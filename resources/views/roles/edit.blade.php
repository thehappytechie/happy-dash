@section('title', 'Edit Role')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Edit role {{ $role->name }}</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form method="POST" action="{{ route('roles.update', $role->id) }}" class="margin-x-lg">
                @csrf
                @method('PUT')
                <div class="margin-y-md">
                    <div class="grid gap-lg">
                        <a href="{{ route('roleDatatable') }}">Back to roles</a>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="name">Role name</label>
                            <input class="form-control width-100% @error('name') is-error @enderror" type="text"
                                name="name" id="name" value="{{ $role->name }}" required>
                            @error('name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <div class="col-8@md text-right margin-top-md padding-top-sm border-top">
                        <button class="btn btn--subtle margin-right-xxl" aria-controls="dialog-1">Delete user</button>
                        <button type="submit" class="btn btn--primary">Update role</button>
                    </div>
            </form>
            <form action="{{ route('roles.destroy', $role->id) }}" method="post">
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
