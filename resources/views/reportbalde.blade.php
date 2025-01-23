<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attestion 2</title>
    <style>
        html {
            padding: 3rem 1.5rem;
            font-family: sans-serif;
        }

        .body {
            text-align: center;
        }

        .caption-header {
            display: flex;
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
            margin-bottom: 1rem;
            flex: 1;
        }

        .section1 .side span {
            font-size: 1.3rem;
            font-weight: 700;
            display: block;
            margin-top: 0.5rem;
            font-style: italic;
        }

        .center-side img {
            width: 20%;
        }


        .section2 .header-title {
            font-weight: 600;
            color: green;
            font-size: 1.1rem;
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
            margin-left: 1rem;
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
            background-image: url('{{ config("app.Files_url") }}logo.jpg');
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
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .pre-footer .director p {
            margin: 0.1rem 0;
            font-size: 1rem;
            line-height: 1.2rem;
            text-align: left;
        }

        .pre-footer img {
            width: 6%;
            height: 6%;
        }

        .pre-footer .version {
            font-size: 0.7rem;
            line-height: 0.8rem;
        }


        /**** Footer *****/

        footer {
            padding-top: 0.5rem;
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
        <h1>Vaccine Quality Control Test Report</h1>

        <div>
            <div class="caption-header">
                <span class="certif-number">Quality Control Report Number: 2238</span>
                <span class="certif-number">Date: Feb 24, 2023</span>
            </div>
            <table>
                <tbody>
                    <tr>
                        <th colspan="7">Name and Address of Manufacturer: Hester Bioscience Africa Limited, Tanzania
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">Vaccine Type: LSD
                        </th>
                        <th colspan="2">PANVAC REF: P212/412/10/22</th>
                        <th colspan="2">Date receipt: 9/5/22</th>
                        <th>Number of vials: 20</th>
                    </tr>
                    <tr>
                        <th colspan="2">Batch Number: 7002
                        </th>
                        <th colspan="2">Date of Manufacture: 1/7/22</th>
                        <th colspan="2">Expiry Date: 6/6/24</th>
                        <th>Doses/vials: 100</th>
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

                    <tr>
                        <td>1.</td>
                        <td>STERILITY</td>
                        <td>Bacteria/Fungi</td>
                        <td>Culture FTG/ TSB
                        </td>
                        <td>No growth obtained
                        </td>
                        <td>Absence of growth
                        </td>
                        <td>Pass</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td></td>
                        <td>Bacteria/Fungi</td>
                        <td>Culture FTG/ TSB
                        </td>
                        <td>No growth obtained
                        </td>
                        <td>Absence of growth
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td></td>
                        <td>Mycoplasma contamination
                        </td>
                        <td>Conventional PCR
                        </td>
                        <td>Identical band obtained
                        </td>
                        <td>Absence of identical band</td>
                        <td>Pass</td>
                    </tr>


                    <tr>
                        <td>4.</td>
                        <td>SAFETY</td>
                        <td>In laboratory Animalas
                        </td>
                        <td>Inoculation in mice
                        </td>
                        <td>No adversed reactions observed
                        </td>
                        <td>Absence of adverse reactions
                        </td>
                        <td>Pass</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>POTENCY</td>
                        <td>LSD</td>
                        <td>Titration on MDBK cells</td>
                        <td>10^4.9 TCID</td>
                        <td>≥ 10^2.5 TCID50</td>
                        <td>Pass</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>IDENTITY</td>
                        <td>CAPRIPOX</td>
                        <td>Classical PCR</td>
                        <td>Identical band obtained
                        </td>
                        <td>Presence of identical band</td>
                        <td>Pass</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>STABILITY</td>
                        <td>acuum</td>
                        <td>Spark tester</td>
                        <td>Violet light obtained
                        </td>
                        <td>Presence of violet light</td>
                        <td>Pass</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td></td>
                        <td>Residual Moisture
                        </td>
                        <td>Thermogravimetric</td>
                        <td>1.2%</td>
                        <td>≤ 3.0%</td>
                        <td>Pass</td>
                    </tr>
                </tbody>
            </table>
            <div class="caption-footer">
                <span class="certif-number">Note: The results relate only to the samples tested as submitted by the
                    client.</span>
            </div>
        </div>

    </main>

</body>

</html>
