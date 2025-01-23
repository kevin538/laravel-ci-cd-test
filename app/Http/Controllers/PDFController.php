<?php


namespace App\Http\Controllers;


use PDF;

use Mpdf\Mpdf;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\report;
use App\Models\Safety;
use App\Models\Potency;
use App\Models\director;
use App\Models\Identity;



use App\Models\Stability;
use App\Models\Sterility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PDFController extends Controller
{
    public function generatePDF($id)
    {


        // certificate generation 
        $idcer = $id;
        $userw = report::where('id', $id)->where('cfm', 'yes')->first();
        $valeurRh = report::where('id', $id)->pluck('cqn')->first();


        $safety = DB::table('safeties')
            ->where('cqn', $valeurRh)
            ->pluck('multiselectSIO')
            ->toArray();


        $steritlity = DB::table('sterilities')
            ->where('cqn', $valeurRh)
            ->pluck('multiselectIO')
            ->toArray();

        $identity = DB::table('identities')
            ->where('cqn', $valeurRh)
            ->pluck('multiselectIIO')
            ->toArray();

        $stabilities = DB::table('stabilities')
            ->where('cqn', $valeurRh)
            ->pluck('multiselectSTIO')
            ->toArray();

        $potency = DB::table('potencies')
            ->where('cqn', $valeurRh)
            ->pluck('multiselectPIO')
            ->toArray();


        $first = collect($safety)
            ->concat($steritlity)
            ->every(function ($value) {
                return $value === 'Pass';
            });

        $allPass = collect($potency)
            ->concat($identity)
            ->every(function ($value) {
                return $value === 'Pass';
            });

        /*   $allDifferentFromFail = collect($stabilities)
        ->every(function ($value) {
        return $value !== 'Fail';
        }); */

        if ($userw && $allPass && $first) {

            $routeUrl = URL::route('webcertificate', ['valeurRh' => $id]);
            /*  dd($routeUrl); */
            $qrCode = QrCode::size(300)->generate($routeUrl);

            /*  nom du directeur */
            $dernierNomDirecteur = director::latest()->value('director');

            $user = report::find($id);


            //*** report QrCode  ***
            $routeUrlReport = URL::route('webreport', ['valeurRh' => $id]);
            /*  dd($routeUrl); */

            $qrCodeReport = QrCode::size(300)->generate($routeUrlReport);



            ini_set('max_execution_time', 240);
            $html = View::make('report', compact('user', 'idcer', 'qrCode', 'dernierNomDirecteur', 'qrCodeReport'))->render();
            $dompdf = new Dompdf();
            $options = new Options();
            $dompdf->setBasePath(public_path());
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);

            $dompdf->setOptions($options);
            $dompdf->loadHtml($html);

            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();
            /* fin */

            /*    return $dompdf->stream('reports.pdf', ); */
            $date = Carbon::now()->format('Ymd-His');
            $filename = 'Certificat-' . str_repeat('-', 1) . $date . str_repeat('-', 1) . '.pdf';

            return $dompdf->stream($filename);

        }
        return redirect()->route('home')->with('failled', 'Can not generate the certificate for this Document!');


    }
    public function webcertificate($id)
    { /* generation du certificat */
        $user = report::find($id);
        return view('reports', compact('user'));
    }


    public function vaccinepdf($id)
    {
        try {
            // Ton code actuel pour la génération du PDF

            /* Rapport  */
            $cqn = report::where('id', $id)->value('cqn');
            $id_cert = $id;

            $element = DB::table('reports')->find($id);
            $stability = DB::table('stabilities')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();
            $identity = DB::table('identities')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();
            $potency = DB::table('potencies')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();
            $safety = DB::table('safeties')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();
            $sterility = DB::table('sterilities')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();

            /* genration du qr code avec le lien à l'interieur  */
            $routeUrl = URL::route('webreport', ['valeurRh' => $id]);
            /*  dd($routeUrl); */

            $qrCode = QrCode::size(300)->generate($routeUrl);
            $dernierNomDirecteur = director::latest()->value('director');


            /*  pour les tests  */
            $valeurRh = report::where('id', $id)->pluck('cqn')->first();

            $safetyr = DB::table('safeties')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectSIO')
                ->toArray();


            $steritlityr = DB::table('sterilities')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectIO')
                ->toArray();

            $identityr = DB::table('identities')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectIIO')
                ->toArray();

            $stabilitiesr = DB::table('stabilities')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectSTIO')
                ->toArray();

            $potencyr = DB::table('potencies')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectPIO')
                ->toArray();


            $allsetril = collect($steritlityr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allsafetir = collect($safetyr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allpotencir = collect($potencyr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allstabilir = collect($stabilitiesr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allidentir = collect($identityr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            /* dd($allsetril); */


            ini_set('max_execution_time', 240);
            $html = View::make('report1', compact('sterility', 'safety', 'potency', 'identity', 'stability', 'id_cert', 'cqn', 'element', 'qrCode', 'dernierNomDirecteur', 'allsetril', 'allsafetir', 'allpotencir', 'allstabilir', 'allidentir'))->render();

            

            $mpdf = new Mpdf([
                'mode' => 'utf-8',
                'default_font_size' => 0,
                'default_font' => 'Arial',
                'encoding' => 'UTF-8',
            ]);
           /*  $mpdf->showImageErrors = true; */
            $mpdf->allow_charset_conversion = true;
            $mpdf->charset_in = 'iso-8859-4';     
            $mpdf->WriteHTML($html);

            $date = Carbon::now()->format('Ymd-His');
            $filename = 'Rapport-' . str_repeat('-', 1) . $date . str_repeat('-', 1) . '.pdf';
            $mpdf->Output($filename, 'D');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }


    public function webreport($id)
    {
        try {
            // Ton code actuel pour la génération du PDF

            /* generation du rapport */
            $cqn = report::where('id', $id)->value('cqn');


            $element = DB::table('reports')->find($id);

            $stability = DB::table('stabilities')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();


            $identity = DB::table('identities')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();
            $potency = DB::table('potencies')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();
            $safety = DB::table('safeties')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();
            $sterility = DB::table('sterilities')
                ->where('cqn', $cqn)
                ->get()
                ->toArray();


            /*  pour les tests  */
            $valeurRh = report::where('id', $id)->pluck('cqn')->first();

            $safetyr = DB::table('safeties')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectSIO')
                ->toArray();


            $steritlityr = DB::table('sterilities')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectIO')
                ->toArray();

            $identityr = DB::table('identities')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectIIO')
                ->toArray();

            $stabilitiesr = DB::table('stabilities')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectSTIO')
                ->toArray();

            $potencyr = DB::table('potencies')
                ->where('cqn', $valeurRh)
                ->pluck('multiselectPIO')
                ->toArray();


            $allsetril = collect($steritlityr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allsafetir = collect($safetyr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allpotencir = collect($potencyr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allstabilir = collect($stabilitiesr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            $allidentir = collect($identityr)
                ->every(function ($value) {
                    return $value === 'NaN';
                });
            /* dd($allsetril); */

            $id_cert = $id;

            return view('report1s', compact('sterility', 'safety', 'potency', 'identity', 'stability', 'cqn', 'id_cert', 'element', 'allsetril', 'allsafetir', 'allpotencir', 'allstabilir', 'allidentir'));
        } catch (\Exception $e) { // Gère l'exception (peut-être logge-la pour obtenir plus d'informations)
            Log::error($e->getMessage());
            // Retourne une réponse appropriée, par exemple, une vue d'erreur ou une redirection
            return response()->view('errors.500', [], 500);
        }
    }

}