<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
    <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link id="codyframe" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <script>
        if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}document.getElementsByTagName("html")[0].className += " ie";}
    </script>
    <title>@yield('title')</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    span {
        font-family: monospace;
        font-weight: bold;
    }

    @media print {
        .cta__button-section {
            display: none !important;
        }
    }

    @page {
        margin: 0;
    }
</style>

<body>
    <div class="container">
        {{ $slot }}
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/dark-mode.js') }}"></script>
    <script src="{{ asset('js/components-script.js') }}"></script>
</body>

</html>
