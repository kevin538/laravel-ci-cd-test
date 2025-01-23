<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Attestion 1</title>
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
            font-family: sans-serif;
        }


        /*** header **/

        header {
            padding-bottom: 0.5rem;
            border-bottom: solid 5px rgb(148, 180, 5);
        }

        .section1 {
            text-align: center
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

            position: absolute;
            bottom: 360px;
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
            height: 7%;
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
            /*  padding-top: 0.1rem; */
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
        <h1 style="margin-top: 0.2em! important">Vaccine Quality Certificate</h1>
        <h2>LSD VACCINE <br> Batch No: {{ $user['bn'] }}</h2>

        <div>
            <span class="certif-number" style="visibility: hidden"> {{ $user['prn'] }} </span><span class="certif-number"
                style="visibility: hidden">Certificate number: {{ $user['prn'] }} </span><span
                class="certif-number">Certificate number: {{ $user['prn'] }} </span>
            <p style="margin-top: 1em !important">This is to certify that bottles/vials of
                <strong>{{ $user['vacinetype'] }} </strong> batch No: <strong>
                    {{ $user['bn'] }} (100 doses
                    per vial)
                    Manufactured on Jun 07, 2023 and Expiring on
                    Jun 6, 2024 </strong>produced by: <strong>{{ $user['name'] }}
                    Africa Limited, {{ $user['address'] }} </strong> Passed Quality Control (QC) tests. Details are
                provided in the
                report ({{ $user['cqn'] }} ).
            </p>
        </div>

</body>

</html>
