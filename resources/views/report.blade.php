<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Certificat-AU-Panvac</title>
    <style>
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

        @media print {
            table {
                margin-left: auto;
                margin-right: auto;
                width: 95%;
                margin-top: 0.3rem;
                font-size: 0.75rem;
            }
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

        html {
            padding: 3rem 1.5rem;
            font-family: justify;
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
            font-size: 1rem;
            font-weight: 700;
            display: block;
            margin-top: 0.1rem;
            font-style: italic;
        }

        .center-side img {
            width: 20%;
        }

        @media print {
            .center-side img {
                width: 35%;
            }
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

        @media print {
            .section2 .header-title {
                max-width: 80%;
            }
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

        @media print {

            .container-address span,
            a.email {
                font-size: 0.75rem !important;
            }

            .container-address .inline span {
                margin-left: 0rem;
            }
        }

        

        /***** Main ***/

        .body {
            min-height: 53vh;
            position: relative;
        }

        @media print {
            .body {
                min-height: 53vh;
                position: relative;
            }
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
            /*  padding-top: 0.1rem; */
           /*  border-top: solid 5px rgb(148, 180, 5); */
        }

        .toptop {
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
    <header class="header">
        <div class="section1">
            <div class="side left-side">
                <span style="font-family: Arial, Helvetica, sans-serif; margin-bottom:5px">AFRICAN UNION</span>
                <img style="height:20px !important ; width:150px !important" 
                    src="{{ config("app.Files_url") }}arabel.png"
                    alt="logo" srcset="">
                <span style="font-family: Arial, Helvetica, sans-serif">UMOJA WA AFRIKA</span>
            </div>
            <div class="center-side">
                <img src="{{ config("app.Files_url") }}logo.png"
                    alt="logo" srcset="">
            </div>
            <div class="side right-side">
                <span style="font-family: Arial, Helvetica, sans-serif">UNION AFRICAINE</span>
                <span style="font-family: Arial, Helvetica, sans-serif">UNIÃO AFRICANA</span>
                <span style="font-family: Arial, Helvetica, sans-serif">UNIÓN AFRICANA</span>
            </div>
        </div>
        <div class="section2">
            <span class="header-title" style="font-family: Arial, Helvetica, sans-serif"><b>PAN AFRICAN VETERINARY VACCINE
                CENTRE </b> <br><b> CENTRE PANAFRICAIN DES VACCINS
                VETERINAIRES </b> </span>
            <span class="header-title2"> <b>
                AU-PANVAC  </b></span>
            <div class="container-logo2-twin" >
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
        <h2 style="margin-top: 0.2em! important">Vaccine Quality Certificate</h2>
        <h3>LSD VACCINE <br> Batch No: {{ $user['bn'] }}</h3>

        <div>
            <span class="certif-number" style="position: absolute; right: 0; ; font-size: 1.2rem"> <b>Certificate number:
                {{ $idcer }}</b> 
            </span>

            <p style="margin-top: 1em !important; text-align: justify; font-family: MySansSerif, sans-serif;">This is
                to
                certify that bottles/vials of
                <strong>{{ $user['vacinetype'] }} </strong> batch No: <strong>
                    {{ $user['bn'] }} (100 doses
                    per vial)
                    Manufactured on Jun 07, 2023 and Expiring on
                    Jun 6, 2024 </strong>produced by: <strong>{{ $user['name'] }}
                    Africa Limited, {{ $user['address'] }} </strong> Passed Quality Control (QC) tests. Details are
                provided in the
                report ( {{ $user['cqn'] }} ).
            </p>
        </div>

        <img style="position: relative !important; top: 155px !important; margin-left: 10px !important; width: 60px; height: 50px; margin-top: 10px; float: right;" src="data:image/svg+xml;base64,{{ base64_encode($qrCodeReport) }}" alt="QR Code"> 
       

    </main>
    <footer>
        <div class="pre-footer">
            <div class="director" style="overflow: hidden;" style="padding-bottom: 15px">
                <p><b>{{ ucfirst($dernierNomDirecteur) }}</b> </p>
                <p> <b>Director of AU-PANVAC</b> </p>
                <p> <b>{{ now()->format('d-m-Y, H:i') }}</b> </p>
            </div>
            <span class="version" style="visibility: hidden"><b>Version 2, AU-PANVAC/QMS/QF/124 </b> </span> <span
            class="version" style="visibility: hidden"><b>Version 2, AU-PANVAC/QMS/QF/124 </b> </span>
        <span class="version" style="visibility: hidden"><b>d</b> </span>
            <span class="version"><b> Version 3, AU-PANVAC/QMS/QF/124 </b></span>

            
            <img style="width: 60px; height: 50px; margin-top: 10px; float: right;" src="data:image/svg+xml;base64,{{ base64_encode($qrCode) }}" alt="QR Code">

        </div>
        <div class="toptop" style="margin-top: 20px">
        <img src="{{ config("app.Files_url") }}logo-multi.jpg"
            alt="" srcset="">
        </div>
    </footer>

</body>

</html>