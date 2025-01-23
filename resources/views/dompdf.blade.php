<!DOCTYPE html>
<html lang="en">

<head>

    <title>Attestion 2</title>
    <style>

        html {
            /* padding: 0.5rem 1.5rem; */
            padding-bottom: 0.1 !important;
            font-family: sans-serif;
        }

        .body {
            text-align: center;
        }

        .caption-header {

            font-size: 0.8rem;
            margin-bottom: 20px !important;
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

        .section1 {
            display: flex;
            justify-content: space-between;
        }

        .center-side {
            text-align: center;
            margin-bottom: 0.3rem;
            flex: 1;
        }

        .section1 .side span {
            font-size: 1rem;
            font-weight: 700;
            display: block;
            margin-top: 0.1rem;
            font-style: italic;
        }

        .center-side img {
            width: 15%;
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
            font-weight: 600;
            font-size: 1.6rem;
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


        /***** Main ***/

        .body {
            min-height: 30vh;
            position: relative;
        }


        .body:before {
            content: ' ';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0.2;
            background-image: url('{{ config("app.Files_url") }}logo.png');
            z-index: -1;
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-size: auto 50%;
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
            position: absolute;
            bottom: 0;
            /*  padding-top: 0.5rem; */
            border-top: solid 5px rgb(148, 180, 5);
        }

        footer img {
            width: 100%;
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
    </style>
    <meta charset="UTF-8">
</head>

<body>
    <header class="header">
        <div class="section1">
            <div class="side left-side">
                <span style="margin-bottom: 10px !important; margin-left:5px !important;"> AFRICAN
                    UNION</span>
                <img style="height:30px !important ; width:150px !important"
                    src="{{ config("app.Files_url") }}arabel.png"
                    alt="logo" srcset="">
                <span>UMOJA WA AFRIKA</span>
            </div>
            <div class="center-side">
                <img src="{{ config("app.Files_url") }}logo.png"
                    alt="logo" srcset="">
            </div>
            <div class="side right-side">
                <span> UNION AFRICAINE</span>
                <span>UNIÃO AFRICANA</span>
                <span>UNIÓN AFRICANA</span>
            </div>
        </div>
        <div class="section2">
            <span class="header-title">PAN AFRICAN VETERINARY VACCINE CENTRE <br>CENTRE PANAFRICAIN DES VACCINS
                VETERINAIRES</span>

            <span class="header-title2">AU-PANVAC</span>
            <div class="container-logo2-twin">
                <img src="{{ config("app.Files_url") }}logo-twin.png"
                    alt="" srcset="">
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
            <div class="caption-header">
                <span class="certif-number" style="float: left !important;">Quality Control Report Number:
                    {{ $id_cert }}</span>
                {{--  <span class="certif-number" style=" visibility: hidden;">Quality Control Report
                    Number:sssjhsjhjhsjhjshdbbbb
                </span> --}}

                <span class="certif-number" style="float: right !important;">Date: {{ date('M d, Y') }}</span>
            </div>
            <table>
                <tbody>
                    <tr>
                        <th colspan="7">
                            <span style="float: left !important;"> Name and Address of Manufacturer:
                                {{ $element->name }},
                                {{ $element->address }}</span>
                            <span style=" visibility: hidden; float: right !important;">Name and Address of Manufacturer
                                db: {{ $element->name }}
                                {{ $element->address }}</span>
                        </th>

                    </tr>
                    <tr>
                        <th colspan="2">Vaccine Type: {{ $element->vacinetype }}
                        </th>
                        <th colspan="2">PANVAC REF NO:{{ $element->prn }}</th>
                        <th colspan="2">Date receipt: {{ $element->dsr }}</th>
                        <th>Number of vials: {{ $element->nof }}</th>
                    </tr>
                    <tr>
                        <th colspan="2">Batch Number: {{ $element->bn }}
                        </th>
                        <th colspan="2">Date of Manufacture: {{ $element->dom }}</th>
                        <th colspan="2">Expiry Date: {{ $element->ed }}</th>
                        <th>Doses/vials: {{ $element->dv }}</th>
                    </tr>
                    <tr>
                        <th>S/N</th>
                        <th colspan="2">TEST CONDUCTED</th>
                        <th>METHOD USED</th>
                        <th>RESULT OBTAINED
                        </th>
                        <th>REFERENCE VALUES
                        </th>
                        <th>OPINION/ INTERPRETATION
                        </th>
                    </tr>

                    @foreach ($sterility as $index => $item)
                        <tr>
                            @if ($loop->iteration === 1)
                                <td rowspan="{{ count($sterility) }}">{{ 1 }}</td>
                                <td rowspan="{{ count($sterility) }}">{{ 'STERILITY' }}</td>
                            @endif

                            <td>{{ $item->multiselectTC }}</td>
                            <td> {{ $item->multiselectMU }}</td>
                            <td>{{ $item->multiselectRO }}</td>
                            <td>{{ $item->multiselectMV }}</td>
                            <td> {{ $item->multiselectIO }}</td>
                        </tr>
                    @endforeach
                    @foreach ($safety as $index => $item)
                        <tr>
                            @if ($loop->iteration === 1)
                                <td rowspan="{{ count($safety) }}">{{ 2 }}</td>
                                <td rowspan="{{ count($safety) }}">{{ 'SAFETY' }}</td>
                            @endif
                            <td>{{ $item->multiselectSTC }}</td>
                            <td> {{ $item->multiselectSMU }}</td>
                            <td>{{ $item->multiselectSRO }}</td>
                            <td>{{ $item->multiselectSMV }}</td>
                            <td> {{ $item->multiselectSIO }}</td>
                        </tr>
                    @endforeach
                    @foreach ($potency as $index => $item)
                        <tr>
                            @if ($loop->iteration === 1)
                                <td rowspan="{{ count($potency) }}">{{ 3 }}</td>
                                <td rowspan="{{ count($potency) }}">{{ 'POTENCY' }}</td>
                            @endif
                            <td>{{ $item->multiselectPTC }}</td>
                            <td> {{ $item->multiselectPMU }}</td>
                            <td>{{ $item->multiselectPRO }}</td>
                            <td>{{ $item->multiselectPMV }}</td>
                            <td> {{ $item->multiselectPIO }}</td>
                        </tr>
                    @endforeach
                    @foreach ($identity as $index => $item)
                        <tr>
                            @if ($loop->iteration === 1)
                                <td rowspan="{{ count($identity) }}">{{ 4 }}</td>
                                <td rowspan="{{ count($identity) }}">{{ 'IDENTITY' }}</td>
                            @endif
                            <td>{{ $item->multiselectITC }}</td>
                            <td> {{ $item->multiselectIMU }}</td>
                            <td>{{ $item->multiselectIRO }}</td>
                            <td>{{ $item->multiselectIMV }}</td>
                            <td> {{ $item->multiselectIIO }}</td>
                        </tr>
                    @endforeach
                    @foreach ($stability as $index => $item)
                        <tr>
                            @if ($loop->iteration === 1)
                                <td rowspan="{{ count($stability) }}">{{ 5 }}</td>
                                <td rowspan="{{ count($stability) }}">{{ 'STABILITY' }}</td>
                            @endif

                            <td>{{ $item->multiselectSTTC }}</td>
                            <td> {{ $item->multiselectSTMU }}</td>
                            <td>{{ $item->multiselectSTRO }}</td>
                            {{-- <td>{!! str_replace('≤', '&le;', $item->multiselectSTMV) !!}</td> --}}
                            <td>
                                {{ $item->multiselectSTMV }}

                            </td>
                            </td>


                            <td> {{ $item->multiselectSTIO }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div
                style="margin-top: 0.5em! important;  text-align: left;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            loat: right !important;">
                @if (!empty($element->note))
                    <span class="certif-number"
                        style="text-align: left;
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 1rem;
                    font-size: 0.8rem;">{{ $element->note }}.</span>
                @else
                    <span style="visibility: hidden;"></span>
                @endif
            </div>
            <div class="caption-footer">
                <span class="certif-number">Note: The results relate only to the samples tested as submitted by the
                    client.</span>

            </div>
        </div>


        <div class="pre-footer" style="">
            <div class="director" style=" padding-bottom: -30% !important">
                <p>Dr. Nick Nwankap</p>
                <p>Director AU-PANVAC</p>
                <p>{{ now()->format('d-m-Y, H:i') }}</p>
            </div>
            <span class="version">Version 2, AU-PANVAC/QMS/QF/124</span>

            <img src="data:image/svg+xml;base64,{{ base64_encode($qrCode) }}" alt="QR Code">
        </div>

    </main>
    <footer>
        <img src="{{ config("app.Files_url") }}logo-multi.jpg"
            alt="" srcset="">
    </footer>

</body>

</html>
