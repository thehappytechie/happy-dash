@section('title', 'Two-Factor Challenge')
<x-auth.section>
   <div class="bg radius-md shadow-sm padding-lg max-width-xx">
        <div class="text-center margin-bottom-md">
            <h1 class="text-xl font-semibold">Two-Factor Challenge</h1>
            <p class="text-center text-sm color-contrast-medium max-width-xxxs padding-xs">Please enter your authentication code or emergency recovery code</p>
        </div>
        <div class="tabs js-tabs">
            <ul class="flex flex-wrap gap-sm js-tabs__controls" aria-label="Tabs Interface">
                <li><a href="#tab1Panel1" class="tabs__control" aria-selected="true">Authentication Code</a></li>
                <li><a href="#tab1Panel2" class="tabs__control">Recovery Code</a></li>
            </ul>

            <div class="js-tabs__panels">
                <section id="tab1Panel1" class="padding-top-md js-tabs__panel">
                    <div class="text-component">
                        <form action="{{ url('two-factor-challenge') }}" method="POST">
                            @csrf
                            <div class="margin-bottom-sm">
                                <label class="form-label margin-bottom-xs" for="inputEmail1">Code</label>
                                <input class="form-control width-100%  @error('code') is-error @enderror" type="text" name="code"
                                    id="inputEmail1" required>
                            </div>
                            @error('code')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                            <div class="margin-bottom-lg">
                                <button type="submit" class="btn btn--primary btn--md width-100%">Confirm code</button>
                            </div>
                        </form>
                    </div>
                </section>

                <section id="tab1Panel2" class="padding-top-md js-tabs__panel">
                    <div class="text-component">
                        <form action="{{ url('two-factor-challenge') }}" method="POST">
                            @csrf
                            <div class="margin-bottom-sm">
                                <label class="form-label margin-bottom-xs" for="inputEmail1">Code</label>
                                <input class="form-control width-100%  @error('recovery_code') is-error @enderror" type="text" name="recovery_code"
                                    id="inputEmail1" required>
                            </div>
                            @error('recovery_code')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                            <div class="margin-bottom-lg">
                                <button type="submit" class="btn btn--primary btn--md width-100%">Confirm code</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div class="text-center">
            <p class="text-sm"><a href="{{ route('login') }}">&larr; Back to login</a></p>
        </div>
    </div>
</x-auth.section>
