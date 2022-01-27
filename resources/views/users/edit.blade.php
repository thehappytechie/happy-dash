@section('title', 'Edit User')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Edit user <span class="font-semibold">{{ $user->name }}</span></h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="margin-x-lg">
                @csrf
                @method('PUT')
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('userDatatable') }}">Back to users</a>
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="name">Full name</label>
                            <input class="form-control width-100% @error('name') is-error @enderror" type="text"
                                name="name" id="name" value="{{ $user->name }}" required>
                            @error('name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="email">Email</label>
                            <input class="form-control width-100%  @error('email') is-error @enderror" type="email"
                                name="email" id="email" value="{{ $user->email }}" required>
                            @error('email')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="password_confirmation">Confirm
                                password</label>
                            <input class="form-control width-100%" type="password" name="password_confirmation"
                                id="password_confirmation">
                        </div>
                        <div class="col-6@md">
                            <label class="form-label margin-bottom-xxs" for="password">Password</label>
                            <input class="form-control width-100%  @error('password') is-error @enderror"
                                type="password" name="password" id="password">
                            @error('password')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
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
                                            name="force_password_change" value="1" @if($user->force_password_change ===
                                        1 ) checked=checked @endif>
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
                                            id="switch-checkbox-2" value="1" @if($user->disable_login === 1 )
                                        checked=checked @endif>
                                        <label class="switch__label" for="switch-checkbox-2" aria-hidden="true">Disable
                                            login</label>
                                        <div class="switch__marker" aria-hidden="true"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12@md text-right margin-top-md margin-right-sm padding-top-sm border-top">
                        <button class="btn btn--subtle margin-right-sm btn--md" aria-controls="dialog-1">Delete
                            user</button>
                        <button type="submit" class="btn btn--primary btn--md">Update user</button>
                    </div>
                </div>
            </form>
            <form action="{{ route('users.destroy',$user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div id="dialog-1" class="dialog js-dialog" data-animation="on">
                    <div class="dialog__content max-width-xxs text-center" role="alertdialog"
                        aria-labelledby="dialog-title-1" aria-describedby="dialog-description-1">
                        <div class="text-component">
                            <h4 id="dialog-title-1">Are you sure you want to permanently delete?
                            </h4>
                            <p id="dialog-description-1">This action cannot be undone.</p>
                        </div>
                        <footer class="margin-top-md">
                            <div class="flex justify-center gap-xs flex-wrap">
                                <button class="btn btn--subtle js-dialog__close">Cancel</button>
                                <button type="submit" class="btn btn--accent">Delete</button>
                            </div>
                        </footer>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
