@section('title', 'Register')

<x-auth.section>
    <x-alert />
    <form action="{{ route('register') }}" method="POST" class="bg radius-md shadow-sm padding-lg">
        @csrf
        <div class="text-center margin-bottom-md">
            <h1 class="text-xl font-semibold">Create account</h1>
        </div>
        <div class="margin-bottom-sm">
            <label class="form-label margin-bottom-xs" for="inputName">Full name</label>
            <input class="form-control width-100%  @error('name') is-error @enderror" type="text" name="name"
                value="{{ old('name') }}" id="inputName" required>
        </div>
        <small class="text-xs">Please provide your full name exactly as it appears in your ID</small>
        @error('name')
        <x-validation-error>{{ $message }}</x-validation-error>
        @enderror

        <div class="margin-y-sm">
            <label class="form-label margin-bottom-xs" for="inputEmail">Email</label>
            <input class="form-control width-100%  @error('email') is-error @enderror" type="email" name="email"
                id="inputEmail" value="{{ old('email') }}" required>
        </div>
        @error('email')
        <x-validation-error>{{ $message }}</x-validation-error>
        @enderror

        <div class="margin-y-sm">
            <label class="form-label margin-bottom-xs" for="inputPassword">Password</label>
            <input class="form-control width-100%  @error('password') is-error @enderror" type="password"
                name="password" id="inputPassword" required>
        </div>
        @error('password')
        <x-validation-error>{{ $message }}</x-validation-error>
        @enderror

        <div class="margin-bottom-sm">
            <div class="flex justify-between margin-bottom-xs">
                <label class="form-label" for="inputPasswordConfirm">Confirm password</label>
            </div>
            <input class="form-control width-100%" type="password" name="password_confirmation" id="inputPasswordConfirm"
                required>
        </div>
        <div class="margin-bottom-lg">
            <button type="submit" class="btn btn--primary btn--md width-100%">Register</button>
        </div>
        <div class="text-center">
            <p class="text-sm">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    </form>
</x-auth.section>
