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