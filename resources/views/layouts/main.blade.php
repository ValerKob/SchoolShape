<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../assets/img/favicon.png" type="image/png" />
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Questrial&display=swap');

        body {
            background: #fad390;
            font-family: 'Questrial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .calendar {
            text-align: center;
            width: 100%;
            max-width: 425px;
            display: inline-grid;
            justify-content: center;
            align-items: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            margin: 0 auto;
            box-shadow: 0 10px 20px 0 rgba(153, 153, 153, 0.25);
            border: 1px solid rgba(0, 0, 0, .125);
        }

        .calendar .month {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 300;
        }

        .calendar .month .year {
            font-weight: 600;
            margin-left: 10px;
        }

        .calendar .month .nav {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #0a3d62;
            width: 40px;
            height: 40px;
            border-radius: 40px;
            transition-duration: 0.2s;
            position: relative;
        }

        .calendar .month .nav:hover {
            background: #eee;
        }

        .calendar .days {
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-columns: repeat(7, 1fr);
            color: #999;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .calendar .days span {
            width: 50px;
            justify-self: center;
            align-self: center;
            text-align: center;
        }

        .calendar .dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }

        .calendar .dates button {
            cursor: pointer;
            outline: 0;
            border: 0;
            background: #fff;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            justify-self: center;
            align-self: center;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            margin: 2px;
            transition-duration: 0.2s;
        }

        .calendar .dates button.today {
            box-shadow: inset 0px 0px 0px 2px #0a3d62;
        }

        .calendar .dates button:first-child {
            grid-column: 2;
        }

        .calendar .dates button:hover {
            background: #eee;
        }

        .calendar .dates button.active {
            background: #0a3d62;
            color: #fff;
            font-weight: 600;
        }

        .calendar .dates button.red {
            background: red;
            box-shadow: inset 0px 0px 0px 2px red;
            color: #fff;
        }

        .calendar .dates button.green {
            background: #00ff33;
        }

        .calendar .dates button.green.active {
            background: #0a3d62;
        }

        .red:hover {
            background-color: red;
        }

        .dates button time {
            padding: 2px 2px;
            position: relative;
        }

        .circle {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            top: -21px;
            right: -21px;
            width: 20px;
            height: 20px;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;
            background: #4da6ff;
            color: #fff;
            font-size: 12px;
        }

        .dates button.red time:before {
            display: none;
        }

        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');

        *,
        *:after,
        *:before {
            box-sizing: border-box;
        }

        body {
            margin: 20px 0;
            font-family: "DM Sans", sans-serif;
            background-color: #f1f3fb;
            /* padding: 0 2rem; */
        }

        img {
            max-width: 100%;
            display: block;
        }

        input {
            appearance: none;
            border-radius: 0;
        }

        .card {
            margin: 2rem auto;
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 425px;
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 10px 20px 0 rgba(153, 153, 153, 0.25);
            padding: 0.75rem;

            top: -100px;
            opacity: .1;
            transition: all .5s ease-in-out 0s;
        }

        .card.active {
            top: 0px;
            opacity: 1;
        }

        .card-image {
            border-radius: 8px;
            overflow: hidden;
            padding-bottom: 65%;
            background-image: url('https://assets.codepen.io/285131/coffee_1.jpg');
            background-repeat: no-repeat;
            background-size: 150%;
            background-position: 0 5%;
            position: relative;
        }

        .card-heading {
            position: absolute;
            left: 10%;
            top: 15%;
            right: 10%;
            font-size: 1.75rem;
            font-weight: 700;
            color: #735400;
            line-height: 1.222;
        }

        .card-heading small {
            display: block;
            font-size: 0.75em;
            font-weight: 400;
            margin-top: 0.25em;
        }

        .card-form {
            padding: 1rem 1rem 2rem;
        }

        .input {
            display: flex;
            flex-direction: column-reverse;
            position: relative;
            padding-top: 1.5rem;
        }

        .input+.input {
            margin-top: 1.5rem;
        }

        .input-label {
            color: #8597a3;
            position: absolute;
            top: 1.5rem;
            transition: 0.25s ease;
        }

        .input-field {
            border: 0;
            z-index: 1;
            background-color: transparent;
            border-bottom: 2px solid #c2c2c2;
            font: inherit;
            font-size: 1.125rem;
            padding: 0.25rem 0;
        }

        .input-field:focus,
        .input-field:valid {
            outline: 0;
            border-bottom-color: #6658d3;
        }

        .input-field:focus+.input-label,
        .input-field:valid+.input-label {
            color: #6658d3;
            transform: translateY(-1.5rem);
        }

        .action {
            margin-top: 2rem;
        }

        .action-button {
            font: inherit;
            font-size: 1.25rem;
            padding: 1em;
            width: 100%;
            font-weight: 500;
            background-color: #6658d3;
            border-radius: 6px;
            color: #FFF;
            border: 0;
        }

        .action-button:focus {
            outline: 0;
        }

        .card-info {
            padding: 1rem 1rem;
            text-align: center;
            font-size: 0.875rem;
            color: #8597a3;
        }

        .card-info a {
            display: block;
            color: #6658d3;
            text-decoration: none;
        }

        .cardCircle {
            width: 17px;
            height: 15px;
            color: #4da6ff;
            background-color: #4da6ff;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Modal */
        .modalNew {
            display: flex;
            justify-content: center;
            align-items: center;

            position: fixed;

            width: 0;
            height: 0;

            top: -100%;
            left: -100%;
            z-index: 1;
            background-color: rgba(0, 0, 0, .3);
        }

        .modalNew.active {
            width: 100vw;
            height: 100vh;

            top: 0;
            left: 0;
        }

        .modalNewCard {
            width: 350px;
            height: auto;
            background-color: #fff;
            border-radius: 10px;
            opacity: 1;
            padding: 15px;
        }

        .modalNewHeader {
            display: flex;
            justify-content: space-between;

            border-bottom: 2px solid #ccc;
            margin-bottom: 30px;
        }

        .closeModaleNewBtn {
            width: 30px;
            height: 30px;
            position: relative;

            cursor: pointer;
        }

        .closeModaleNewBtn::after {
            content: '';
            position: absolute;
            top: 15px;
            z-index: 1;
            width: 30px;
            height: 2px;
            background-color: #000;
            transform: rotate(45deg);
        }

        .closeModaleNewBtn::before {
            content: '';
            position: absolute;
            top: 15px;
            z-index: 1;
            width: 30px;
            height: 2px;
            background-color: #000;
            transform: rotate(-45deg);
        }
    </style>
    <!-- Header -->
    @include('includes.main.header')

    <!-- Main -->
    @yield('content')

    <!-- Fooret -->
    @include('includes.main.footer')
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
        function timeCard() {
            let card = document.querySelectorAll('.card');

            for (i = 0; i < card.length; i++) {
                card[i].classList.add('active');
            }
        }
        setInterval(timeCard, 150);
    </script>
</body>

</html>