<?php

namespace App\Http\Controllers;

use App\Models\User;
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

class reportcontroller extends Controller
{
    //
    public function index()
    {
        return view('create');
    }
    public function indexn()
    {
        return view('createn');
    }
    public function info()
    {
        $latestDirector = Director::latest()->first();

        return view('com', ['latestDirector' => $latestDirector] );
    }
    public function store(Request $request)
    {
     
        // Décoder les données JSON pour les convertir en tableau
            $data = json_decode(json_encode($request->all()), true);

            // Initialiser des groupes pour chaque type de multiselect
            $groupedData = [
                'IO' => [],
                'MU' => [],
                'MV' => [],
                'RO' => [],
                'TC' => [],
            ];

            // Itérer sur les données pour organiser chaque champ multiselect Sterility
            foreach ($data as $key => $value) {
                if (preg_match('/^multiselect(IO|MU|MV|RO|TC)(\d*)$/', $key, $matches)) {
                    $type = $matches[1]; // Ex. 'IO', 'MU'
                    $index = $matches[2] ?: '0'; // Suffixe ou '0' si non défini
                    $groupedData[$type][$index] = $value;
                }
            }
            // Trier chaque sous-tableau par ordre numérique des clés (facultatif)
            foreach ($groupedData as $type => &$values) {
                ksort($values);
            }
            // Afficher ou traiter le tableau de données regroupé
          /*   return response()->json($groupedData); */
            \Log::debug('Données JSON reçues :', $groupedData);
    }
    public function storei(Request $request)
    {


        $cfm = $request->json('cfm');
        $cqn = $request->json('cqn');
        $name = $request->json('name');
        $address = $request->json('address');
        $vacinetype = $request->json('vacinetype');
        $prn = $request->json('prn');
        $dsr = $request->json('dsr');
        $nof = $request->json('nof');
        $bn = $request->json('bn');
        $dom = $request->json('dom');
        $ed = $request->json('ed');
        $dv = $request->json('dv');
        $terms = $request->json('terms');
        $note = "";
        $multiselectTC = $request->json('multiselectTC');
        $multiselectMU = $request->json('multiselectMU');
        $multiselectRO = $request->json('multiselectRO');
        $multiselectMV = $request->json('multiselectMV');
        $multiselectIO = $request->json('multiselectIO');
        $multiselectSTC = $request->json('multiselectSTC');
        $multiselectSMU = $request->json('multiselectSMU');
        $multiselectSRO = $request->json('multiselectSRO');
        $multiselectSMV = $request->json('multiselectSMV');
        $multiselectSIO = $request->json('multiselectSIO');
        $multiselectPTC = $request->json('multiselectPTC');
        $multiselectPMU = $request->json('multiselectPMU');
        $multiselectPRO = $request->json('multiselectPRO');
        $multiselectPMV = $request->json('multiselectPMV');
        $multiselectPIO = $request->json('multiselectPIO');
        $multiselectITC = $request->json('multiselectITC');
        $multiselectIMU = $request->json('multiselectIMU');
        $multiselectIRO = $request->json('multiselectIRO');
        $multiselectIMV = $request->json('multiselectIMV');
        $multiselectIIO = $request->json('multiselectIIO');
        $multiselectSTTC = $request->json('multiselectSTTC');
        $multiselectSTMU = $request->json('multiselectSTMU');
        $multiselectSTRO = $request->json('multiselectSTRO');
        $multiselectSTMV = $request->json('multiselectSTMV');
        $multiselectSTIO = $request->json('multiselectSTIO');


       /*  = new report(); */
       /*  $cfm = $request->cfm;
        $cqn = $request->cqn;
        $name = $request->name;
        $address = $request->address;
        $vacinetype = $request->vacinetype;
        $prn = $request->prn;
        $dsr = $request->dsr;
        $nof = $request->nof;
        $bn = $request->bn;
        $dom = $request->dom;
        $ed = $request->ed;
        $dv = $request->dv;
        $note = $request->note; */
        /*  premier table */
        /* $multiselectTC = $request->input('multiselectTC');
        $multiselectMU = $request->input('multiselectMU');
        $multiselectRO = $request->input('multiselectRO'); */

        /* input */
        /* $otherInputRO = $request->otherInputRO;
        for ($i = 0; $i < count($multiselectRO); $i++) {
            if ($multiselectRO[$i] === 'other' && isset($otherInputRO[$i])) {
                $multiselectRO[$i] = $otherInputRO[$i];
            }
        } */

        /*  dd($multiselectRO); */
       /*  $multiselectMV = $request->input('multiselectMV');
        $multiselectIO = $request->input('multiselectIO'); */




        /*  premier table */
       /*  $multiselectSTC = $request->input('multiselectSTC');
        $multiselectSMU = $request->input('multiselectSMU');
        $multiselectSRO = $request->input('multiselectSRO'); */
        /* input */
        /*  $otherInputSRO = $request->input('otherInputSRO[]'); */

        /* $otherInputSRO = $request->otherInputSRO;
        for ($i = 0; $i < count($multiselectSRO); $i++) {
            if ($multiselectSRO[$i] === 'other1' && isset($otherInputSRO[$i])) {
                $multiselectSRO[$i] = $otherInputSRO[$i];
            }
        } */


        /* $multiselectSMV = $request->input('multiselectSMV');
        $multiselectSIO = $request->input('multiselectSIO'); */

        /*  premier table */
       /*  $multiselectPTC = $request->input('multiselectPTC');
        $multiselectPMU = $request->input('multiselectPMU');
        /* input */
        
      /*   $otherInputPMU = $request->otherInputPMU;
        for ($i = 0; $i < count($multiselectPMU); $i++) {
            if ($multiselectPMU[$i] === 'other2' && isset($otherInputPMU[$i])) {
                $multiselectPMU[$i] = $otherInputPMU[$i];
            }
        } */


    /*     $multiselectPRO = $request->input('multiselectPRO');
        $multiselectPMV = $request->input('multiselectPMV');
        $multiselectPIO = $request->input('multiselectPIO');
 */


        /*  premier table */
     /*    $multiselectITC = $request->input('multiselectITC');
        $multiselectIMU = $request->input('multiselectIMU');
        $multiselectIRO = $request->input('multiselectIRO');
        $multiselectIMV = $request->input('multiselectIMV');
        $multiselectIIO = $request->input('multiselectIIO');
 */


        /*  premier table */
     /*    $multiselectSTTC = $request->input('multiselectSTTC');
        $multiselectSTMU = $request->input('multiselectSTMU');
        $multiselectSTRO = $request->input('multiselectSTRO'); */
        /* input */

      /*   $otherInputSTRO = $request->otherInputSTRO;
        for ($i = 0; $i < count($multiselectSTRO); $i++) {
            if ($multiselectSTRO[$i] === 'other3' && isset($otherInputSTRO[$i])) {
                $multiselectSTRO[$i] = $otherInputSTRO[$i];
            }
        } */

       /*  $multiselectSTMV = $request->input('multiselectSTMV');
        $multiselectSTIO = $request->input('multiselectSTIO');
 */
        
        report::create([
            'cfm' => $cfm,
            'cqn' => $cqn,
            'name' => $name,
            'address' => $address,
            'vacinetype' => $vacinetype,

            'prn' => $prn,
            'dsr' => $dsr,
            'nof' => $nof,
            'bn' => $bn,
            'dom' => $dom,
            'ed' => $ed,
            'dv' => $dv,
            'note' => $note,
        ]);
        Sterility::create([

            'multiselectTC' => $multiselectTC,
            'multiselectMU' => $multiselectMU,
            'multiselectRO' => $multiselectRO,
            'multiselectMV' => $multiselectMV,
            'multiselectIO' => $multiselectIO,
            'cqn' => $cqn,
        ]);
        Safety::create([

            'multiselectSTC' => $multiselectSTC,
            'multiselectSMU' => $multiselectSMU,
            'multiselectSRO' => $multiselectSRO,
            'multiselectSMV' => $multiselectSMV,
            'multiselectSIO' => $multiselectSIO,
            'cqn' => $cqn,
        ]);
        Potency::create([

            'multiselectPTC' => $multiselectPTC,
            'multiselectPMU' => $multiselectPMU,
            'multiselectPRO' => $multiselectPRO,
            'multiselectPMV' => $multiselectPMV,
            'multiselectPIO' => $multiselectPIO,
            'cqn' => $cqn,
        ]);
        Identity::create([

            'multiselectITC' => $multiselectITC,
            'multiselectIMU' => $multiselectIMU,
            'multiselectIRO' => $multiselectIRO,
            'multiselectIMV' => $multiselectIMV,
            'multiselectIIO' => $multiselectIIO,
            'cqn' => $cqn,
        ]);
        Stability::create([

            'multiselectSTTC' => $multiselectSTTC,
            'multiselectSTMU' => $multiselectSTMU,
            'multiselectSTRO' => $multiselectSTRO,
            'multiselectSTMV' => $multiselectSTMV,
            'multiselectSTIO' => $multiselectSTIO,
            'cqn' => $cqn,
        ]);

       /*  $count = count($multiselectTC);
        $count1 = count($multiselectSTC);
        $count2 = count($multiselectPTC);
        $count3 = count($multiselectITC);
        $count4 = count($multiselectSTTC); */


       /*  for ($index = 0; $index < $count; $index++) {

            Sterility::create([

                'multiselectTC' => $multiselectTC[$index],
                'multiselectMU' => $multiselectMU[$index],
                'multiselectRO' => $multiselectRO[$index],
                'multiselectMV' => $multiselectMV[$index],
                'multiselectIO' => $multiselectIO[$index],
                'cqn' => $cqn,
            ]);
        } */
       /*  for ($index = 0; $index < $count1; $index++) {

            Safety::create([

                'multiselectSTC' => $multiselectSTC[$index],
                'multiselectSMU' => $multiselectSMU[$index],
                'multiselectSRO' => $multiselectSRO[$index],
                'multiselectSMV' => $multiselectSMV[$index],
                'multiselectSIO' => $multiselectSIO[$index],
                'cqn' => $cqn,
            ]);
        } */
        /* for ($index = 0; $index < $count2; $index++) {

            Potency::create([

                'multiselectPTC' => $multiselectPTC[$index],
                'multiselectPMU' => $multiselectPMU[$index],
                'multiselectPRO' => $multiselectPRO[$index],
                'multiselectPMV' => $multiselectPMV[$index],
                'multiselectPIO' => $multiselectPIO[$index],
                'cqn' => $cqn,
            ]);
        } */
        /* for ($index = 0; $index < $count3; $index++) {

            Identity::create([

                'multiselectITC' => $multiselectITC[$index],
                'multiselectIMU' => $multiselectIMU[$index],
                'multiselectIRO' => $multiselectIRO[$index],
                'multiselectIMV' => $multiselectIMV[$index],
                'multiselectIIO' => $multiselectIIO[$index],
                'cqn' => $cqn,
            ]);
        } */

        /* for ($index = 0; $index < $count4; $index++) {

            Stability::create([

                'multiselectSTTC' => $multiselectSTTC[$index],
                'multiselectSTMU' => $multiselectSTMU[$index],
                'multiselectSTRO' => $multiselectSTRO[$index],
                'multiselectSTMV' => $multiselectSTMV[$index],
                'multiselectSTIO' => $multiselectSTIO[$index],
                'cqn' => $cqn,
            ]);
        } */





        // Redirection ou traitement supplémentaire
        return redirect()->route('home')->with('success', 'Successful Store in the database Thank You !');
        /*  $projet->save();
        return redirect()->route('home'); */
    }
    public function search(Request $request)
    {
        // Récupérer les termes de recherche depuis la requête
        $searchTerm = $request->input('search');

        // Effectuer la logique de recherche selon vos besoins
        // ...
        $results = report::where('bn', 'LIKE', "%$searchTerm%")
            ->orWhere('cqn', 'LIKE', "%$searchTerm%")
            ->orWhere('vacinetype', 'LIKE', "%$searchTerm%")
            ->orWhere('prn', 'LIKE', "%$searchTerm%")
            ->get();

        // Retourner la vue de résultats de recherche
        return view('searchresult', compact('searchTerm', 'results'));
    }
    public function director(Request $request)
    {
        director::create([
            'director' => $request->director,
        ]);

        return redirect()->route('info')->with('success', 'Successful Store in the database Thank You !');
    }
    public function deleted($id)
    {
        $report = Report::find($id);

        if ($report) {
            $report->update(['deleted' => true]);
            // Autres opérations si nécessaire
        }

        return redirect()->route('home')->with('deleted', 'Successful deleted Thank You !');
    }
    public function reportdeleted()
    {

        $articles = DB::table('reports')
            ->where('deleted', true)
            ->orderBy('id', 'DESC')
            ->paginate(5);

        $userStatus = User::select('status')->get();

        return view('homedeleted', compact('userStatus', 'articles'));

    }


    public function restore($id)
    {
        $report = Report::find($id);

        if ($report) {
            $report->update(['deleted' => false]);
            // Autres opérations si nécessaire
        }

        return redirect()->route('home')->with('deleted', 'Successful restored Thank You !');
    }

    public function completetly($id)
    {

        $report = report::find($id);

        if ($report) {



            $cqn = report::where('id', $id)->pluck('cqn')->first();

            $safety = DB::table('safeties')
                ->where('cqn', $cqn)
                ->get();

            $safety->each(function ($item) {
                DB::table('safeties')->where('id', $item->id)->delete();
            });
            $steritlity = DB::table('sterilities')
                ->where('cqn', $cqn)
                ->get();
            $steritlity->each(function ($item) {
                DB::table('sterilities')->where('id', $item->id)->delete();
            });
            $stabilities = DB::table('stabilities')
                ->where('cqn', $cqn)->get();
            $stabilities->each(function ($item) {
                DB::table('stabilities')->where('id', $item->id)->delete();
            });
            $potency = DB::table('potencies')
                ->where('cqn', $cqn)->get();
            $potency->each(function ($item) {
                DB::table('potencies')->where('id', $item->id)->delete();
            });
            $identity = DB::table('identities')
                ->where('cqn', $cqn)
                ->get();
            $identity->each(function ($item) {
                DB::table('identities')->where('id', $item->id)->delete();
            });

            $report->delete();
            return redirect()->route('home')->with('deleted', 'Completly deleted Thank You !');
        }
        return "Enregistrement introuvable.";


    }

}