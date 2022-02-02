<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
      <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
      <link href="{{ asset('css/inter.css') }}" rel="stylesheet">
      <link id="codyframe" rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/components.css') }}">
      <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
      <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    <!-- browsers not supporting CSS variables -->
    <script>
        if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}document.getElementsByTagName("html")[0].className += " ie";}
    </script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="bg-contrast-lower min-height-100vh flex flex-center padding-md">
        <div class="container max-width-xxxs">
           {{ $slot }}
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/components-script.js') }}"></script>
</body>

</html>
