@section('title', 'Create user')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add new user
        </h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{route('users.store')}}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('userDatatable') }}">Go to users</a>
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="name">Full name</label>
                            <input class="form-control width-100% @error('name') is-error @enderror" type="text"
                                name="name" id="name" value="{{ old('name') }}" required>
                            @error('name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="email">Email</label>
                            <input class="form-control width-100%  @error('email') is-error @enderror" type="email"
                                name="email" id="email" value="{{ old('email') }}" required>
                            @error('email')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="password">Password</label>
                            <input class="form-control width-100%  @error('password') is-error @enderror"
                                type="password" name="password" id="password" required>
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
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="select-this">Role</label>
                            <div class="select">
                                <select class="form-control select__input" name="roles" id="select-this">
                                    <option value="0">Select role</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                                    @endforeach
                                </select>
                                <svg class="icon select__icon" aria-hidden="true" viewBox="0 0 16 16">
                                    <polyline points="1 5 8 12 15 5" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                            </div>
                        </div>
                        <x-badge>Account management</x-badge>
                        <div class="col-5@lg">
                            <p class="inline-block text-sm">Force password change</p>
                        </div>
                        <div class="col-5@lg">
                            <ul class="flex flex-wrap gap-md">
                                <li>
                                    <div class="switch">
                                        <input class="switch__input" type="hidden" name="force_password_change"
                                            value="0">
                                        <input class="switch__input" type="checkbox" id="switch-checkbox-1"
                                            name="force_password_change" value="1">
                                        <label class="switch__label" for="switch-checkbox-1" aria-hidden="true">Force
                                            password change</label>
                                        <div class="switch__marker" aria-hidden="true"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-5@lg">
                            <p class="inline-block text-sm">Disable login</p>
                        </div>
                        <div class="col-5@lg">
                            <ul class="flex flex-wrap gap-md">
                                <li>
                                    <div class="switch">
                                        <input class="switch__input" name="disable_login" type="hidden" value="0">
                                        <input class="switch__input" name="disable_login" type="checkbox"
                                            id="switch-checkbox-2" value="1">
                                        <label class="switch__label" for="switch-checkbox-2" aria-hidden="true">Disable
                                            login</label>
                                        <div class="switch__marker" aria-hidden="true"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <x-submit-button>Create new user</x-submit-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
