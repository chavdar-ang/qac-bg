<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Внедряване на международни стандарти, продуктова сертификация - маркировка СЕ и други маркировки.">
    <link rel="stylesheet" href="/css/app.css?v=2">
    <script src="/js/app.js?v=2"></script>
    <title>Кю Ей Си ООД - @yield('title')</title>
</head>

<body>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164807139-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164807139-1');
    </script>
    <header>
        @include('includes.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>