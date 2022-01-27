@section('title', 'Create Form')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Application to register a ship
        </h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('register-ship.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('registerShip') }}">Go to forms</a>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company">Company/business name</label>
                            <input class="form-control width-100% @error('company') is-error @enderror" type="text"
                                name="company" id="company" value="{{ old('company') }}">
                            @error('company')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="business location">Location of
                                company/business</label>
                            <input class="form-control width-100%  @error('business_location') is-error @enderror"
                                type="text" name="business_location" value="{{ old('business_location') }}" id="business_location" required>
                            @error('business_location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="appointee">Appointee</label>
                            <input class="form-control width-100%  @error('appointee') is-error @enderror" type="text"
                                name="appointee" id="appointee" value="{{ old('appointee') }}">
                            @error('appointee')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="common seal">Common seal</label>
                            <input class="form-control width-100%  @error('common_seal') is-error @enderror" type="text"
                                name="common_seal" id="common_seal" value="{{ old('common_seal') }}">
                            @error('common_seal')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="affixed hereto">Affixed hereto</label>
                            <input class="form-control width-100%  @error('affixed_hereto') is-error @enderror" type="text"
                                name="affixed_hereto" id="affixed_hereto" value="{{ old('affixed_hereto') }}">
                            @error('affixed_hereto')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="issue date">Issue date</label>
                            <input class="form-control width-100%  @error('issue_date') is-error @enderror" type="date"
                                name="issue_date" id="issue_date" value="{{ old('issue_date') }}">
                            @error('issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-8@md">
                            <label class="form-label margin-bottom-xxs" for="witness">Witness</label>
                            <input class="form-control width-100%  @error('witness') is-error @enderror" type="text"
                                name="witness" id="witness" value="{{ old('witness') }}">
                            @error('witness')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add Form </x-submit-button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
