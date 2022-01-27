@section('title', 'Forgot Password')

<x-auth.section>
    <x-alert/>
    <form action="{{ route('password.request') }}" method="post" class="bg radius-md shadow-sm padding-lg max-width-xx">
        @csrf
        <div class="text-center margin-bottom-md">
            <h1 class="text-xl font-semibold">Forgot your password?</h1>
            <p class="text-center text-sm color-contrast-medium max-width-xxxs padding-xs">Please enter your email and
                we’ll send you a
                recovery link to reset your password</p>
        </div>
        <div class="margin-bottom-sm">
            <label class="form-label margin-bottom-xs" for="input-email-1">Email</label>
            <input class="form-control width-100%  @error('email') is-error @enderror" type="email" name="email"
                id="input-email-1" required>
        </div>
        @error('email')
        <x-validation-error>{{ $message }}</x-validation-error>
        @enderror
        <div class="margin-bottom-lg">
            <button type="submit" class="btn btn--primary btn--md width-100%">Request reset link</button>
        </div>

        <div class="text-center">
            <p class="text-sm"><a href="{{ route('login') }}">&larr; Back to login</a></p>
        </div>
    </form>
</x-auth.section>
