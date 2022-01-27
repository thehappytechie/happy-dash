@section('title', 'Security')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Settings</h1>
    </div>

    <div class="margin-bottom-md">
        <nav class="s-tabs">
            <ul class="s-tabs__list">
                <li><a class="s-tabs__link" href="{{ route('profile.edit', Auth::user()->id) }}">Profile</a></li>
                <li><a class="s-tabs__link" href="{{ route('changePassword') }}">Password</a></li>
                <li><a class="s-tabs__link s-tabs__link--current" href="{{ route('security') }}">Account Security</a>
                <li><a class="s-tabs__link" href="{{ route('myActivity') }}">Activity</a></li>
                <li><a class="s-tabs__link" href="#">Notifications</a></li>
                </li>
            </ul>
        </nav>
    </div>

    <div class="bg radius-md shadow-xs">
        <div class="padding-lg">
            <fieldset class="margin-bottom-xl margin-right-lg">
                <legend class="form-legend margin-bottom-md">Two Factor Authentication</legend>
                <p class="margin-top-sm text-sm">Help protect your acount from unauthorized access by requiring a second
                    authentication method in addition to your password using <a
                        href="https://authy.com/blog/everybody-should-2fa/" target="_blank"> two-factor
                        authentication</a></p>
                <div class="grid gap-lg text-center text-sm margin-y-lg">
                    <div class="col@lg">
                        <img src="{{ asset('img/password.png') }}" width="80" alt="icon">
                        <p class="margin-top-xs color-contrast-medium">Log in using your email and password.</p>
                    </div>
                    <div class="col@lg">
                        <img src="{{ asset('img/qr.png') }}" width="80" alt="icon">
                        <p class="margin-top-xs color-contrast-medium">Using a two-factor authentication app, generate a
                            passcode to verify
                            your identity.</p>
                    </div>
                    <div class="col@lg">
                        <img src="{{ asset('img/passcode.png') }}" width="80" alt="icon">
                        <p class="margin-top-xs color-contrast-medium">Once you enter the passcode at the prompt, you
                            will be logged onto our
                            web console.</p>
                    </div>
                </div>
                <div class=" margin-bottom-md border-bottom border-contrast-lower"></div>

                @if (!auth()->user()->two_factor_secret)<span class="badge badge--error text-sm font-medium">2FA is Off,
                    You will need to set this up.</span> @endif

                <div>
                    <div class="grid gap-xxs">
                        <div class="col-6@lg">
                            <label class="inline-block text-sm padding-top-xs@lg" for="input-name">
                                @if(!auth()->user()->two_factor_secret)
                                @else
                                Scan the following QR code using your phone's authenticator application.

                                <div class="max-width-md margin-y-lg">
                                    <a class="link-card flex flex-column bg radius-md col-12@sm col-12@lg margin-top-lg"
                                        href="https://authy.com/download/" target="_blank" aria-label="Link label">
                                        <div class="padding-sm">
                                            <div class="flex flex-wrap gap-xs items-center">
                                                <div class="line-height-xs">
                                                    <p class="text-md font-semibold color-contrast-higher">Twilio</p>
                                                    <p class="color-contrast-medium margin-top-xxxs text-sm">Use your
                                                        mobile phone to receive security codes.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="link-card__footer margin-top-auto border-top border-contrast-lower">
                                            <p class="text-sm">Download app</p>
                                            <div>
                                                <svg class="icon icon--sm" viewBox="0 0 24 24">
                                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2">
                                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                                        <polyline points="15 6 21 12 15 18"></polyline>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            </label>
                        </div>
                        <div class="col-6@lg">
                            @if (auth()->user()->two_factor_secret)
                            <div>
                                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="padding-bottom-sm border-bottom border-contrast-lower">
                </div>
                <div class="margin-y-lg">
                    <div class="grid gap-xxs">
                        <div class="col-6@lg">
                            <label class="inline-block text-sm padding-top-xs@lg" for="input-email">
                                Store these recovery codes in a secure password manager.
                                They can be used to recover access to your accout if your two factor authentication device is lost.
                            </label>
                        </div>
                        <div class="col-6@lg">
                            <div class="text-dark">
                                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as
                                $code )
                                <div class="font-monospace"> {{ $code }} </div>
                                @endforeach
                                <div>
                                    <form action="{{ url('user/two-factor-recovery-codes') }}" method="POST">
                                        @csrf
                                        <div class="flex flex-wrap gap-xs margin-top-lg">
                                            <button type="submit" class="btn btn--primary text-uppercase">Regenerate
                                                codes</button>
                                        </div>

                                    </form>
                                </div>
                                <div>
                                    @if (auth()->user()->two_factor_secret)
                                    <form action="{{ url('user/two-factor-authentication') }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        @endif
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        @if (!auth()->user()->two_factor_secret)
        <div class="border-top border-contrast-lower padding-md text-right">
            <form action="{{ url('user/two-factor-authentication') }}" method="POST" class="mt-2">
                @csrf
                <button type="submit" class="btn btn--primary btn--md">Enable</button>
            </form>
        </div>
        @else
        <div class="border-top border-contrast-lower padding-md text-right">
            <button type="submit" class="btn btn--accent btn--md">Disable</button>
        </div>
        @endif
        </form>
    </div>

</x-layout>
