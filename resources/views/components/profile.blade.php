<div class="dropdown inline-block js-dropdown">
    <div class="dropdown__wrapper">
        <a class="app-ui__user-btn js-dropdown__trigger js-tab-focus">
            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="Avatar" />
        </a>
        <ul class="dropdown__menu js-dropdown__menu padding-lg" aria-label="dropdown">
            <li>
                <p class="dropdown__item text-sm">Signed in as<br>
                    <strong>{{ Auth::user()->name }}</strong>
                </p>
            </li>
            <hr class="dropdown__separator" role="separator">
            <li>
                <a class="dropdown__item text-sm" href="{{ route('profile.edit', Auth::user()->id) }}">Your profile</a>
            </li>
            <li>
                <a class="dropdown__item text-sm" href="{{ route('changePassword') }}">Your password</a>
            </li>
            <li>
                <a class="dropdown__item text-sm" href="{{ route('security') }}">Account security</a>
            </li>
            <hr class="dropdown__separator" role="separator">
            <li>
                <a class="dropdown__item text-sm" href="{{ route('security') }}">Help</a>
            </li>
            <hr class="dropdown__separator" role="separator">
            <li>
                <a class="dropdown__item text-sm" href="{{ route('signout') }}">
                    <p class="color-accent-dark font-semibold">Log out</p>
                </a>
            </li>
        </ul>
    </div>
</div>
