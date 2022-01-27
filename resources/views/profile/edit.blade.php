@section('title', 'Edit Profile')

<x-layout>

    <div class="margin-bottom-md">
        <h1 class="text-lg">Settings</h1>
    </div>

    <div class="margin-bottom-md">
        <nav class="s-tabs">
            <ul class="s-tabs__list">
                <li><a class="s-tabs__link s-tabs__link--current"
                        href="{{ route('profile.edit', Auth::user()->id) }}">Profile</a></li>
                <li><a class="s-tabs__link" href="{{ route('changePassword') }}">Password</a></li>
                <li><a class="s-tabs__link" href="{{ route('security') }}">Account Security</a></li>
            </ul>
        </nav>
    </div>

    <div class="bg radius-md shadow-xs">
        <form action="{{ route('profile.update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="padding-lg">
                <fieldset class="margin-bottom-xl">
                    <legend class="form-legend margin-bottom-md">Profile Settings</legend>
                    <div class="margin-bottom-sm">
                        <div class="grid gap-xxs">
                            <div class="col-3@lg">
                                <label class="inline-block text-sm padding-top-xs@lg" for="input-name">Name</label>
                            </div>
                            <div class="col-4@lg">
                                <input class="form-control width-100%" type="text" name="name" id="input-name"
                                    value="{{ $user->name }}" required="">
                            </div>
                        </div>
                    </div>
                    <div class="margin-bottom-sm">
                        <div class="grid gap-xxs">
                            <div class="col-3@lg">
                                <label class="inline-block text-sm padding-top-xs@lg" for="input-email">Email</label>
                            </div>
                            <div class="col-4@lg">
                                <input class="form-control width-100%" type="email" name="email" id="input-email"
                                    value="{{ $user->email }}">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="border-top border-contrast-lower padding-md text-right">
                <button class="btn btn--primary btn--md">Save</button>
            </div>
        </form>
    </div>


</x-layout>
