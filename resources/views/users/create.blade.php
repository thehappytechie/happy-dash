@section('title', 'Create user')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add new user</h1>
    </div>

    <div class="bg radius-md shadow-xs">
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            @method('PUT')
            <div class="grid gap-lg max-width-md padding-lg">
                <a href="{{ route('userDatatable') }}">&larr; Go to users</a>
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxs" for="name">Full name</label>
                    <input class="form-control width-100% @error('name') is-error @enderror" type="text" name="name"
                        id="name" value="{{ old('name') }}" required>
                    @error('name')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxs" for="email">Email</label>
                    <input class="form-control width-100%  @error('email') is-error @enderror" type="email" name="email"
                        id="email" value="{{ old('email') }}" required>
                    @error('email')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxs" for="password">Password</label>
                    <input class="form-control width-100%  @error('password') is-error @enderror" type="password"
                        name="password" id="password" required>
                    @error('password')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxs" for="password_confirmation">Confirm
                        password</label>
                    <input class="form-control width-100%" type="password" name="password_confirmation"
                        id="password_confirmation" required>
                </div>
                <div class="max-width-sm text-divider col-12 color-primary-darker"><span> ACCOUNT MANAGEMENT</span>
                </div>
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxs" for="select-this">User role</label>
                    <div class="select">
                        <select class="form-control select__input" name="roles" id="select-this">
                            <option value="0">Select role</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                            @endforeach
                        </select>
                        <svg class="icon select__icon" aria-hidden="true" viewBox="0 0 16 16">
                            <polyline points="1 5 8 12 15 5" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </div>
                </div>
                <fieldset class="margin-top-xs">
                    <ul class="flex flex-wrap gap-md">
                        <li>
                            <input class="checkbox" type="hidden" name="force_password_change" value="0">
                            <input class="checkbox" type="checkbox" id="checkbox-1" name="force_password_change"
                                value="1">
                            <label for="checkbox-1"><span class="text-sm color-accent-light">DISABLE ACCOUNT</span></label>
                        </li>

                        <li>
                            <input class="checkbox" name="disable_login" type="hidden" value="0">
                            <input class="checkbox" name="disable_login" type="checkbox" id="checkbox-2" value="1">
                            <label for="checkbox-2"><span class="text-sm">RESET PASSWORD</span></label>
                        </li>
                    </ul>
                </fieldset>
            </div>
            <x-submit-button>Create new user</x-submit-button>
        </form>
    </div>

</x-layout>
