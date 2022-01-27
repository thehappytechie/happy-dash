@section('title', 'Create Role')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add new role</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form method="POST" action="{{route('roles.store')}}" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg">
                        <a href="{{ route('roleDatatable') }}">Back to roles</a>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="name">Role name</label>
                            <input class="form-control width-100% @error('name') is-error @enderror" type="text"
                                name="name" id="name" value="{{ old('name') }}" required>
                            @error('name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <div class="col-8@md text-right margin-top-md padding-top-sm border-top">
                        <button type="submit" class="btn btn--primary">Create new role</button>
                    </div>
            </form>
        </div>
    </div>

</x-layout>
