<nav class="sidenav padding-y-sm js-sidenav">
    <ul class="sidenav__list">
        <li class="sidenav__item">
            <a href="{{ route('dashboard') }}" class="sidenav__link" aria-current="page">
                <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z" />
                </svg>
                <span class="sidenav__text text-sm@md">Dashboard</span>
            </a>
        </li>
    </ul>

    <div class="sidenav__divider margin-y-xs" role="presentation"></div>

    <ul class="sidenav__list">
        <li class="sidenav__item">
            <a href="#" class="sidenav__link">
                <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16">
                    <path
                        d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                </svg>
                <span class="sidenav__text text-sm@md">Certificates</span>
            </a>
        </li>
    </ul>
    <div class="sidenav__divider margin-y-xs" role="presentation"></div>

    <ul class="sidenav__list">
        <li class="sidenav__item">
            <a class="reset js-sidenav__sublist-control js-tab-focus sidenav__link">
                <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16">
                    <path
                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                </svg>
                <span class="sidenav__text text-sm@md">Roles</span>
            </a>

            <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus"
                aria-label="Toggle sub navigation">
                <svg class="icon" viewBox="0 0 12 12">
                    <polygon points="4 3 8 6 4 9 4 3" />
                </svg>
            </button>
            <ul class="sidenav__list">
                <li class="sidenav__item">
                    <a href="{{ route('roleDatatable') }}" class="sidenav__link">
                        <span class="sidenav__text text-sm@md">All roles</span>
                    </a>
                </li>
                <li class="sidenav__item">
                    <a href="{{ route('roles.create') }}" class="sidenav__link">
                        <span class="sidenav__text text-sm@md">Add role</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidenav__item">
            <a class="reset js-sidenav__sublist-control js-tab-focus sidenav__link">
                <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16">
                    <path
                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    <path fill-rule="evenodd"
                        d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                </svg>
                <span class="sidenav__text text-sm@md">Users</span>
            </a>

            <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus"
                aria-label="Toggle sub navigation">
                <svg class="icon" viewBox="0 0 12 12">
                    <polygon points="4 3 8 6 4 9 4 3" />
                </svg>
            </button>

            <ul class="sidenav__list">
                <li class="sidenav__item">
                    <a href="{{ route('userDatatable') }}" class="sidenav__link">
                        <span class="sidenav__text text-sm@md">All users</span>
                    </a>
                </li>
                <li class="sidenav__item">
                    <a href="{{ route('users.create') }}" class="sidenav__link">
                        <span class="sidenav__text text-sm@md">Add user</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidenav__item">
            <a class="reset js-sidenav__sublist-control js-tab-focus sidenav__link">
                <svg class="icon sidenav__icon" aria-hidden="true" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg>
                <span class="sidenav__text text-sm@md">Settings</span>
            </a>

            <button class="reset sidenav__sublist-control js-sidenav__sublist-control js-tab-focus"
                aria-label="Toggle sub navigation">
                <svg class="icon" viewBox="0 0 12 12">
                    <polygon points="4 3 8 6 4 9 4 3" />
                </svg>
            </button>
            <ul class="sidenav__list">
                <li class="sidenav__item">
                    <a href="{{ route('loginAttempt') }}" class="sidenav__link">
                        <span class="sidenav__text text-sm@md">Login Attempts</span>
                    </a>
                </li>
                <li class="sidenav__item">
                    <a href="{{ url('health?fresh') }}" class="sidenav__link">
                        <span class="sidenav__text text-sm@md">System Health</span>
                    </a>
                </li>
                <li class="sidenav__item">
                    <a href="{{ route('userActivity') }}" class="sidenav__link">
                        <span class="sidenav__text text-sm@md">User Activity</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
