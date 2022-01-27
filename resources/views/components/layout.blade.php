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
    <script>
        if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}document.getElementsByTagName("html")[0].className += " ie";}
    </script>
    <title>@yield('title')</title>

</head>

<body>
    <div class="app-ui js-app-ui">
        <header class="app-ui__header shadow-xs padding-x-md padding-x-0@md">
            <div class="app-ui__logo-wrapper padding-x-sm@md">
                <a href="index.html" class="app-ui__logo">
                    <svg width="104" height="30" viewBox="0 0 104 30" fill="var(--color-contrast-higher)">
                        <title>Go to homepage</title>
                        <circle cx="15" cy="15" r="15" fill="var(--color-contrast-lower)" />
                        <path
                            d="M36.184,6.145h4.551l4.807,11.727h.2L50.553,6.145H55.1V23.6H51.525V12.239h-.146L46.862,23.514H44.425L39.908,12.2h-.145V23.6H36.184Z" />
                        <path
                            d="M61.8,23.846c-3.556,0-4.347-2.234-4.347-3.9a3.405,3.405,0,0,1,2.5-3.524c1.371-.521,3.771-.56,4.854-.866.485-.136.732-.377.732-.869,0-.555-.191-1.695-1.942-1.695A2.187,2.187,0,0,0,61.274,14.5l-3.357-.273c.249-1.193,1.349-3.886,5.7-3.886,2.913,0,4.257,1.246,4.778,1.9a3.944,3.944,0,0,1,.779,2.536V23.6H65.731V21.784h-.1A3.986,3.986,0,0,1,61.8,23.846Zm1.04-2.5a2.543,2.543,0,0,0,2.727-2.42v-1.39a8.013,8.013,0,0,1-2.523.589c-.637.079-2.122.351-2.122,1.7C60.925,21.035,62.059,21.341,62.843,21.341Z" />
                        <path
                            d="M72,23.6V10.509h3.52v2.284h.136a3.513,3.513,0,0,1,1.2-1.845,3.867,3.867,0,0,1,3.084-.5v3.222c-.169-.057-2.266-.7-3.523.558a2.657,2.657,0,0,0-.789,1.964V23.6Z" />
                        <path
                            d="M89.425,10.509v2.726H86.962v6.342a1.307,1.307,0,0,0,.341,1.014,2.092,2.092,0,0,0,1.789.145l.571,2.7c-.182.057-3.132,1-5.143-.515a3.348,3.348,0,0,1-1.189-2.869V13.235h-1.79V10.509h1.79V7.372h3.631v3.137Z" />
                        <path
                            d="M97.615,23.855A6,6,0,0,1,91.9,20.7a7.7,7.7,0,0,1-.783-3.583c0-2.22,1-6.776,6.349-6.776,5.7,0,6.153,5.165,6.153,6.647v1H94.709v.008a2.864,2.864,0,0,0,2.966,3.154,2.41,2.41,0,0,0,2.513-1.517l3.359.221C103.291,21.065,102.094,23.855,97.615,23.855Zm-2.906-8.122h5.5a2.576,2.576,0,0,0-2.677-2.685A2.772,2.772,0,0,0,94.709,15.733Z" />
                        <path d="M25.607,4.393,4.393,25.607A15,15,0,0,0,25.607,4.393Z" />
                    </svg>
                </a>
            </div>

            <button class="reset app-ui__menu-btn hide@md js-app-ui__menu-btn js-tab-focus" aria-label="Toggle menu"
                aria-controls="app-ui-navigation">
                <svg class="icon" viewBox="0 0 24 24">
                    <g class="icon__group" fill="none" stroke="currentColor" stroke-linecap="square"
                        stroke-miterlimit="10" stroke-width="2">
                        <path d="M1 6h22" />
                        <path d="M1 12h22" />
                        <path d="M1 18h22" />
                    </g>
                </svg>
            </button>
            <div class="display@md flex flex-grow height-100% items-center justify-between padding-x-sm">
                <form class="expandable-search text-sm@md js-expandable-search">
                    <label class="sr-only" for="expandable-search">Search</label>
                    <input class="reset expandable-search__input js-expandable-search__input" type="search"
                        name="expandable-search" id="expandable-search" placeholder="Search...">
                    <button class="reset expandable-search__btn">
                        <svg class="icon" viewBox="0 0 20 20">
                            <title>Search</title>
                            <g fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2">
                                <circle cx="8" cy="8" r="6" />
                                <line x1="12.243" y1="12.243" x2="18" y2="18" />
                            </g>
                        </svg>
                    </button>
                </form>
                <x-cta-button />
                <div class="flex gap-lg">
                    <button class="reset app-ui__header-btn js-tab-focus" aria-controls="notifications-popover">
                        <svg class="icon" viewBox="0 0 20 20">
                            <title>Notifications</title>
                            <path d="M16,12V7a6,6,0,0,0-6-6h0A6,6,0,0,0,4,7v5L2,16H18Z" fill="none"
                                stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
                            <path d="M7.184,18a2.982,2.982,0,0,0,5.632,0Z" />
                        </svg>

                        <span class="app-ui__notification-indicator"><i class="sr-only">You have 6
                                notifications</i></span>
                    </button>
                    <x-profile />
                </div>
            </div>
        </header>

        <!-- navigation -->
        <div class="app-ui__nav js-app-ui__nav" id="app-ui-navigation">
            <div class="flex flex-column height-100%">
                <div class="flex-grow overflow-auto momentum-scrolling">
                    <!-- (mobile-only) search -->
                    <div class="padding-x-md padding-top-md hide@md">
                        <div class="search-input search-input--icon-right">
                            <input class="form-control width-100% height-100%" type="search" name="searchInputX"
                                id="searchInputX" placeholder="Search..." aria-label="Search">
                            <button class="search-input__btn">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <title>Submit</title>
                                    <g stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-miterlimit="10">
                                        <line x1="22" y1="22" x2="15.656" y2="15.656"></line>
                                        <circle cx="10" cy="10" r="8"></circle>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <x-sidenav />
                </div>
                <!-- light/dark mode toggle -->
                <div
                    class="padding-md padding-sm@md margin-top-auto flex-shrink-0 border-top border-contrast-lower ie:hide">
                    <div class="flex items-center justify-between@md">
                        <p class="text-sm@md">Dark Mode</p>

                        <div class="switch dark-mode-switch margin-left-xxs">
                            <input class="switch__input" type="checkbox" id="switch-light-dark">
                            <label aria-hidden="true" class="switch__label" for="switch-light-dark">On</label>
                            <div aria-hidden="true" class="switch__marker"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main content -->
        <main class="app-ui__body padding-md js-app-ui__body">
            <x-alert />
            {{ $slot }}
        </main>
    </div>

    <x-notification />

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/dark-mode.js') }}"></script>
    <script src="{{ asset('js/components-script.js') }}"></script>

</body>

</html>
