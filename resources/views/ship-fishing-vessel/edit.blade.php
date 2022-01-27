@section('title', 'Create Form')

<x-layout>
    <div class="margin-bottom-md">
    <h1 class="text-lg">Add Ship Marking & Marking Note (Fishing Vessel)</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('ship-fishing-vessel.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('shipFishingVessel') }}">Go to forms</a>
                        <x-badge>Ship Information</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="imo_number">IMO number</label>
                            <input class="form-control width-100% @error('imo_number') is-error @enderror" type="text"
                                name="imo_number" id="imo_number" value="{{ old('imo_number') }}">
                            @error('imo_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="signal letter">Signal letters</label>
                            <input class="form-control width-100%  @error('signal_letter') is-error @enderror"
                                type="text" name="signal_letter" value="{{ old('signal_letter') }}" id="signal_letter" required>
                            @error('signal_letter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="official number">Official number</label>
                            <input class="form-control width-100%  @error('official_number') is-error @enderror" type="text"
                                name="official_number" value="{{ old('official_number') }}" id="type">
                            @error('official_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>

                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ship name">Name of ship</label>
                            <input class="form-control width-100%  @error('ship_name') is-error @enderror"
                                type="text" name="ship_name" id="ship_name"
                                value="{{ old('ship_name') }}">
                            @error('ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="register tonnage">Register tonnage</label>
                            <input class="form-control width-100%  @error('register_tonnage') is-error @enderror"
                                type="text" name="register_tonnage" id="register_tonnage" value="{{ old('register_tonnage') }}">
                            @error('register_tonnage')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registrar date">Port of registry date</label>
                            <input class="form-control width-100%  @error('registrar_date') is-error @enderror" type="date"
                                name="registrar_date" id="registrar_date" value="{{ old('registrar_date') }}">
                            @error('registrar_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registry port">Port of registry</label>
                            <input class="form-control width-100%  @error('registry_port') is-error @enderror" type="text"
                                name="registry_port" id="registry_port" value="{{ old('registry_port') }}">
                            @error('registry_port')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="issue date">Date</label>
                            <input class="form-control width-100%  @error('issue_date') is-error @enderror" type="date"
                                name="issue_date" id="issue_date" value="{{ old('issue_date') }}">
                            @error('issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="location">Location</label>
                            <input class="form-control width-100%  @error('location') is-error @enderror" type="text"
                                name="location" id="location" value="{{ old('location') }}">
                            @error('location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add form</x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
