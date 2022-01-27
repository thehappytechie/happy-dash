@section('title', 'Log In')

<x-auth.section>
    <x-alert/>
    <form action="{{ route('login') }}" method="POST" class="bg radius-md shadow-sm padding-lg">
        @csrf
        <div class="text-center margin-bottom-md">
            <h1 class="text-xxl font-semibold">Log In</h1>
        </div>
        <div class="margin-bottom-sm">
            <label for="Email" class="form-label margin-bottom-xs">Email</label>
            <input class="form-control width-100%  @error('email') is-error @enderror" type="email" name="email"
                id="Email" required>
        </div>
        @error('email')
        <x-validation-error>{{ $message }}</x-validation-error>
        @enderror
        <div class="margin-bottom-sm">
            <div class="flex justify-between margin-bottom-xs">
                <label for="Password" class="form-label">Password</label>
                <span class="text-sm"><a href="{{ url('forgot-password') }}">Forgot?</a></span>
            </div>
            <input class="form-control width-100%" type="password" name="password" id="Password" required>
        </div>
        <div class="margin-bottom-lg">
            <button type="submit" class="btn btn--primary btn--md width-100%">Login</button>
        </div>
        <div class="text-center">
            <p class="text-sm">Don't have an account? <a href="{{ route('register') }}">Get started</a></p>
        </div>
    </form>
</x-auth.section>
