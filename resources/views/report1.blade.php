<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rapport-AU-Panvac</title>
    <style>
        html {
            /* padding: 0.5rem 1.5rem; */
            padding-bottom: 0.1 !important;
            font-family: Arial;
        }

        .body {
            text-align: center;
        }

        .caption-header {
            font-size: 0.8rem;
            /*  margin-bottom: 20px !important; */
        }

        .caption-footer {
            text-align: left;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1rem;
            font-size: 0.8rem;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            margin-top: 0.3rem;
            font-size: 0.8rem;
        }

        table,
        td,
        th {
            border: 1px solid #595959;
            border-collapse: collapse;
            font-weight: 500;
        }

        td,
        th {
            padding: 2px;
            width: 30px;
            height: 20px;
        }

        tr:nth-of-type(4) th {
            background: silver;
        }

        .even {
            background: #fbf8f0;
        }

        .odd {
            background: #fefcf9;
        }

        /*** header **/

        header {
            padding-bottom: 0.1rem;
            border-bottom: solid 5px rgb(148, 180, 5);
        }

        .center-side {
            text-align: center;
            margin-bottom: 0.3rem;
            flex: 1;
        }

        .center-side img {
            width: 5px !important;
        }

        .section2 .header-title {
            font-weight: 600;
            color: green;
            font-size: 1rem;
            display: block;
            text-align: center;
            max-width: 60%;
            margin-left: auto;
            margin-right: auto;
        }

        .section2 .header-title2 {
            color: green;
            font-weight: 700;
            font-size: 1.3rem;
            display: block;
            text-align: center;
        }

        .container-logo2-twin {
            text-align: center;
        }

        .container-logo2-twin img {
            width: 65%;
        }

        .container-address {
            text-align: center;
            font-size: 1rem;
        }

        .container-address .inline span {
            margin-left: 0.1rem;
        }

        a.email {
            margin-left: 0.1rem;
        }

        @page {
            background: url('C:\wamp64\www\ari\public\css\assets\50.jpg') no-repeat 0 0;
            background-image-resize: 1%;
            background-position: center center;
            background-size: 1%;
            position: absolute;
            display: block;
            margin-left: 20px;
            /* Marge à gauche */
            margin-right: 20px;
            /* Marge à droite */
            opacity: 0.8;
            z-index: -1;
        }

        /***** Main ***/

        .content {
            text-align: center;
            padding: 50px;
            position: relative;
            z-index: 1;
        }

        .body {
            min-height: 30vh;
            position: relative;
            background-image: url('C:\wamp64\www\ari\public\css\assets\logo.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 50px 5px;
            text-align: center;
        }

        .background-image {
            background-image: url('C:\wamp64\www\ari\public\css\assets\logo.png');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.2;
            z-index: -1;
        }

        .body p {
            font-size: 1.75rem;
            margin-top: 0.1rem;
            margin-bottom: 0.1rem;
            text-align: left;
            line-height: 2rem;
        }

        /***** Pre Footer *****/

        .pre-footer {
            display: flex;
            align-items: center;
            position: relative;
            /*   bottom: 350px; */
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .pre-footer .director p {
            margin: 0.1rem 0;
            font-size: 0.8rem;
            line-height: 1rem;
            text-align: left;
        }

        .pre-footer .director {
            flex: 1;
        }

        .pre-footer .spacer {
            flex: 1;
        }

        .pre-footer img {
            width: 8%;
            height: 8%;
            position: absolute;
            top: 0;
            right: 0;
            z-index: -1;
        }

        .pre-footer .version {
            font-size: 0.5rem;
            line-height: 0.4rem;
        }

        /**** Footer *****/

        footer {
            /*  position: absolute; */
            bottom: 0;
        }

        .toptop {
            bottom: 0;
            border-top: solid 5px rgb(148, 180, 5);
        }

        footer img {
            width: 65%;
        }

        strong {
            font-weight: 700;
        }

        /** Test  ***/
        .left-side {
            left: 0;
            top: 0;
            position: absolute;
        }

        .right-side {
            right: 0;
            top: 0;
            position: absolute;
        }

        .section1 {
            display: flex;
            align-items: flex-start;
            flex-wrap: nowrap;
        }

        .section1 div {
            width: 20%;
        }
    </style>
    <meta charset="UTF-8">
</head>

<body style="text-align: center;" class="background-image">

    <table style="width: 100%; border-collapse: collapse; border: none;">
        <tr>
            <td style="width: 20%; vertical-align: top; border: none;">
                <span
                    style="font-size: 1.2rem;font-family: Arial, Helvetica, sans-serif; margin-bottom: 13px;  font-weight: 600; font-style: italic;">
                    <b>AFRICAN
                        UNION</b>
                </span><br>
                <img style="height: 20px; width: 120px;" src="C:\wamp64\www\ari\public\css\assets\arabel.png" alt="logo"><br>
                <span style="font-size: 1.2rem; font-family: Arial, Helvetica, sans-serif; font-weight:6700; font-style: italic;">
                    <b>UMOJA WA
                        AFRIKA </b></span>
            </td>
            <td style="text-align: center;  border: none;">
                <img style="height: 80px;" src="C:\wamp64\www\ari\public\css\assets\logo.png" alt="logo">
            </td>
            <td style="width: 20%; vertical-align: top; text-align: right; border: none;">
                <span
                    style="font-size: 1.2rem; font-weight: 600; font-family: Arial, Helvetica, sans-serif; margin-bottom: 13px; font-style: italic; "><b>
                        UNION
                        AFRICAINE </b><span style="visibility: hidden">.</span>
                </span><br>
                <span
                    style="font-size: 1.2rem; font-weight: 600;font-family: Arial, Helvetica, sans-serif; margin-bottom: 13px; font-style: italic;">
                    <b> UNIÃO
                        AFRICANA </b><span style="visibility: hidden">b</span> </span><br>
                <span style="font-size: 1.2rem; font-weight: 600;font-family: Arial; font-style: italic;"><b> UNIÓN
                        AFRICANA </b><span style="visibility: hidden">b</span> </span>
            </td>
        </tr>
    </table>

    <header class="header" style="margin-top: 15px">

        <div class="section2">
            <span class="header-title"><b>PAN AFRICAN VETERINARY VACCINE CENTRE</b> <br> <b>CENTRE PANAFRICAIN DES
                    VACCINS
                    VETERINAIRES </b> </span><br>

            <span class="header-title2" style=" color:black; "><b> AU-PANVAC </b></span>
            <div class="container-logo2-twin">
                {{-- image double --}}
                <img src="C:\wamp64\www\ari\public\css\assets\logo-twin.png" alt="" srcset="">
            </div>
            <div class="container-address">
                <div class="inline">
                    <span>Debre Zeit, ETHIOPIA</span> <span>P.O. Box 1746</span> <span>Telephone: +251 11 433
                        8001</span> <span>Fax: +251 11 433 8844</span>
                </div>
                <span>E-mail : </span>
                <a class="email" href="mailto:aupanvac@africa-union.org">aupanvac@africa-union.org</a>
            </div>
        </div>
    </header>
    <main class="body">
        <h3>Vaccine Quality Control Test Report</h3>
        <div style="margin-bottom: 1em">

            <div style="display:flex ; justify-content: space-between;">
                <div style="flex-basis: 50%; text-align: left;  margin-bottom: -20px;">
                    <span style=" margin-bottom: -20px;"><b> Quality Control Report Number:
                             {{ $element->cqn  }} </b></span>
                </div>
                <div style="flex-basis: 50%; text-align: right;">
                    <span><b> Date:
                            {{ \Illuminate\Support\Carbon::parse($element->created_at)->format('d F Y') }}</b></span>
                </div>
            </div>
            <table>
                <tbody>
                    <tr>
                        <th colspan="7" style="text-align: left">
                            <span style="display: inline-block; white-space: nowrap;"> <b>Name and
                                    Address of Manufacturer:
                                    {{ $element->name }},
                                    {{ $element->address }} </b></span>

                        </th>

                    </tr>
                    <tr>
                        <th colspan="2"> <b> Vaccine Type: {{ $element->vacinetype }}</b>
                        </th>
                        <th colspan="2"> <b> PANVAC REF NO:{{ $element->prn }} </b></th>
                        <th colspan="2"> <b> Date receipt: {{ $element->dsr }} </b></th>
                        <th> <b> Number of vials: {{ $element->nof }} </b></th>
                    </tr>
                    <tr>
                        <th colspan="2"> <b> Batch Number: {{ $element->bn }}</b>
                        </th>
                        <th colspan="2"> <b> Date of Manufacture: {{ $element->dom }}</b></th>
                        <th colspan="2"> <b> Expiry Date: {{ $element->ed }} </b></th>
                        <th> <b> Doses/vials: {{ $element->dv }} </b></th>
                    </tr>
                    <tr style="background-color: rgb(172, 169, 169);">
                        <th><b> S/N </b></th>
                        <th colspan="2"><b> TEST CONDUCTED </b></th>
                        <th><b> METHOD USED </b></th>
                        <th><b> RESULT OBTAINED </b>
                        </th>
                        <th><b> REFERENCE VALUES </b>
                        </th>
                        <th><b> OPINION/ INTERPRETATION </b>
                        </th>
                    </tr>

                    <?php
                    $counter = 1; // Initialiser le compteur
                    ?>

                    @if (!$allsetril)

                        @foreach ($sterility as $index => $item)
                            <tr>
                                @if ($loop->iteration === 1)
                                    <td rowspan="{{ count($sterility) }}"> <b>  {{ $counter++}} </b></td>
                                    <td rowspan="{{ count($sterility) }}"> <b> {{ 'STERILITY' }} </b></td>
                                @endif

                                <td> {{ $item->multiselectTC }} </td>
                                <td> {{ $item->multiselectMU }} </td>
                                <td> {{ $item->multiselectRO }} </td>
                                <td> {{ $item->multiselectMV }} </td>
                                <td> {{ $item->multiselectIO }} </td>
                            </tr>
                        @endforeach

                    @endif

                    @if (!$allsafetir)

                        @foreach ($safety as $index => $item)
                            <tr>
                                @if ($loop->iteration === 1)
                                    <td rowspan="{{ count($safety) }}"> <b>  {{ $counter++}} </b></td>
                                    <td rowspan="{{ count($safety) }}"> <b> {{ 'SAFETY' }} </b></td>
                                @endif
                                <td> {{ $item->multiselectSTC }} </td>
                                <td> {{ $item->multiselectSMU }} </td>
                                <td> {{ $item->multiselectSRO }} </td>
                                <td> {{ $item->multiselectSMV }} </td>
                                <td> {{ $item->multiselectSIO }} </td>
                            </tr>
                        @endforeach
                    @endif

                    @if (!$allpotencir)

                        @foreach ($potency as $index => $item)
                            <tr>
                                @if ($loop->iteration === 1)
                                    <td rowspan="{{ count($potency) }}"><b>  {{ $counter++}} </b></td>
                                    <td rowspan="{{ count($potency) }}"><b> {{ 'POTENCY' }} </b></td>
                                @endif
                                <td> {{ $item->multiselectPTC }} </td>
                                <td> {{ $item->multiselectPMU }} </td>
                                <td> {{ $item->multiselectPRO }} </td>
                                <td> {{ $item->multiselectPMV }} </td>
                                <td> {{ $item->multiselectPIO }} </td>
                            </tr>
                        @endforeach

                    @endif

                    @if (!$allidentir)

                        @foreach ($identity as $index => $item)
                            <tr>
                                @if ($loop->iteration === 1)
                                    <td rowspan="{{ count($identity) }}"> <b> {{ $counter++}} </b></td>
                                    <td rowspan="{{ count($identity) }}"> <b> {{ 'IDENTITY' }} </b></td>
                                @endif
                                <td> {{ $item->multiselectITC }} </td>
                                <td> {{ $item->multiselectIMU }} </td>
                                <td> {{ $item->multiselectIRO }} </td>
                                <td> {{ $item->multiselectIMV }} </td>
                                <td> {{ $item->multiselectIIO }} </td>
                            </tr>
                        @endforeach

                    @endif

                    @if (!$allstabilir)

                        @foreach ($stability as $index => $item)
                            <tr>
                                @if ($loop->iteration === 1)
                                    <td rowspan="{{ count($stability) }}"><b> {{ $counter++}}</b></td>
                                    <td rowspan="{{ count($stability) }}"><b>{{ 'STABILITY' }} </b></td>
                                @endif

                                <td>{{ $item->multiselectSTTC }} </td>
                                <td> {{ $item->multiselectSTMU }} </td>
                                <td>{{ $item->multiselectSTRO }} </td>
                                <td>
                                    {{ $item->multiselectSTMV }}

                                </td>
                                {{-- </td> --}}


                                <td> {{ $item->multiselectSTIO }}</td>
                            </tr>
                        @endforeach

                    @endif
                </tbody>
            </table>

            <div class="caption-footer">
                @if (empty($element->note))
                    <span class="certif-number">Note: The results relate only to the samples tested as submitted by the
                        client.</span>
                @else
                    <span>{{ $element->note }}.</span><br>
                    <span class="certif-number">Note: The results relate only to the samples tested as submitted by the
                        client.</span>
                @endif

            </div>
        </div>
    </main>
    <footer style="position: fixed; bottom: 0;  width: 100%; z-index: -1;">

        <div class="pre-footer" style="overflow: hidden;" style="padding-bottom: 15px">
            <div class="director" style=" padding-bottom: -30% !important; ">
                <p><b>{{ ucfirst($dernierNomDirecteur) }}</b> </p>
                <p><b>Director of AU-PANVAC</b> </p>
                <p><b> {{ now()->format('d-m-Y, H:i') }}</b></p>
            </div>
            <span class="version" style="visibility: hidden"><b>Version 3, AU-PANVAC/QMS/QF/124 </b> </span> <span
                class="version" style="visibility: hidden"><b>Version 3, AU-PANVAC/QMS/QF/124 </b> </span>
            <span class="version" style="visibility: hidden"><b>Version 3, AU-PANVAC/ Version 2 on 2 Version 2</b>
            </span> <span class="version" style="text-align: center; font-size: 10px;"><b>Version 3,
                    AU-PANVAC/QMS/QF/124 </b>
            </span>

            <img style="width: 70px; height: 50px; margin-top: -60px; float: right;"
                src="data:image/svg+xml;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
        </div>

        <div class="toptop" style="margin-top: 20px">
            <img src="C:\wamp64\www\ari\public\css\assets\logo-multi.jpg" alt="" srcset="">
        </div>
    </footer>

</body>

</html>
