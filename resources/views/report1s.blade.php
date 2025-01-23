<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport {{ $cqn }}</title>
    <style>
        html {
            padding: 3rem 1.5rem;
            font-family: sans-serif;
        }

        .body {
            text-align: center;
        }

        .caption-header {
            /*  display: flex; */
            justify-content: space-between;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            font-size: 0.8rem;
        }

        .caption-footer {
            text-align: left;
            width: 95%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 2rem;
            font-size: 0.8rem;
        }

        table {
            margin-left: auto;
            margin-right: auto;
            width: 95%;
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
            padding-bottom: 0.5rem;
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
            min-height: 53vh;
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
            margin-top: 0.2rem;
            margin-bottom: 0.2rem;
            text-align: left;
            line-height: 2.6rem;
        }


        /***** Pre Footer *****/

        .pre-footer {

            position: absolute;
            bottom: 300px;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .pre-footer .director p {
            margin: 0.1rem 0;
            font-size: 0.8rem;
            line-height: 1rem;
            text-align: left;
        }

        .pre-footer img {
            width: 6%;
            height: 6%;
            margin-right: 10px;
            text-align: right;
        }

        .pre-footer .version {
            font-size: 0.5rem;
            line-height: 0.4rem;
        }


        /**** Footer *****/

        footer {
            position: absolute;
            bottom: 0;
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
</head>

<body>
    <main class="body">
        <h2>Vaccine Quality Control Test Report</h2>
        <div>
            <div class="caption-header">
                <span class="certif-number" style="">Quality Control Report Number:
                    QCR {{ $id_cert }} </span>
                <span class="certif-number" style=" visibility: hidden;">Quality Control Report
                    Number:sssjhsjhjhsjhjshdbbbb
                </span>

                <span class="certif-number">Date:  {{ \Illuminate\Support\Carbon::parse($element->created_at)->format('d F Y') }}</span>
            </div>
            <table>
                <tbody>
                    <tr>
                        <th colspan="7">Name and Address of Manufacturer: {{ $element->name }},
                            {{ $element->address }}
                            <span style=" visibility: hidden;">Name and Address of Manufacturer db: {{ $element->name }}
                                {{ $element->address }}</span>
                        </th>

                    </tr>
                    <tr>
                        <th colspan="2">Vaccine Type: {{ $element->vacinetype }}
                        </th>
                        <th colspan="2">PANVAC REF:{{ $element->prn }}</th>
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

</body>

</html>
