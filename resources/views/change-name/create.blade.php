@section('title', 'Create Form')

<x-layout>
    <div class="margin-bottom-md">
    <h1 class="text-lg">Add Application for permission to change the name of a Ghanaian Ship
        </h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('change-name.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('changeNameShip') }}">Go to forms</a>
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
                                type="text" name="signal_letter" id="signal_letter" required>
                            @error('signal_letter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ship name">Present Name of Ship</label>
                            <input class="form-control width-100%  @error('ship_name') is-error @enderror"
                                type="text" name="ship_name" id="ship_name"
                                value="{{ old('ship_name') }}">
                            @error('ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port registry">Present Port of Registry</label>
                            <input class="form-control width-100%  @error('port_registry') is-error @enderror" type="text"
                                name="port_registry" id="port_registry" value="{{ old('port_registry') }}">
                            @error('port_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port registry">Official number</label>
                            <input class="form-control width-100%  @error('official_number') is-error @enderror" type="text"
                                name="official_number" value="{{ old('official_number') }}" id="type">
                            @error('official_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registry tonnage">Registry Tonnage</label>
                            <input class="form-control width-100%  @error('registry_tonnage') is-error @enderror"
                                type="text" name="registry_tonnage" id="registry_tonnage" value="{{ old('registry_tonnage') }}">
                            @error('registry_tonnage')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross tonnage">Gross Tonnage</label>
                            <input class="form-control width-100%  @error('gross_tonnage') is-error @enderror" type="text"
                                name="gross_tonnage" id="gross_tonnage" value="{{ old('gross_tonnage') }}">
                            @error('gross_tonnage')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="steam motor">Sail, steam or motor</label>
                            <input class="form-control width-100%  @error('steam_motor') is-error @enderror" type="text"
                                name="steam_motor" id="steam_motor" value="{{ old('steam_motor') }}">
                            @error('steam_motor')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="vessel location">Vessel location</label>
                            <input class="form-control width-100%  @error('vessel_location') is-error @enderror" type="text"
                                name="vessel_location" id="vessel_location" value="{{ old('vessel_location') }}">
                            @error('vessel_location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="proposed ship name">Proposed ship name</label>
                            <input class="form-control width-100%  @error('proposed_ship_name') is-error @enderror" type="text"
                                name="proposed_ship_name" id="proposed_ship_name" value="{{ old('proposed_ship_name') }}">
                            @error('proposed_ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="new port registry">New port of registry</label>
                            <input class="form-control width-100%  @error('new_port_registry') is-error @enderror" type="text"
                                name="new_port_registry" id="new_port_registry" value="{{ old('new_port_registry') }}">
                            @error('new_port_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="name late owners">State name of late owners</label>
                            <input class="form-control width-100%  @error('name_late_owners') is-error @enderror" type="text"
                                name="new_port_registry" id="new_port_registry" value="{{ old('name_late_owners') }}">
                            @error('new_port_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-8@md">
                            <label class="form-label margin-bottom-xxs" for="reasons">Reasons for requiring change of name</label>
                            <input class="form-control width-100%  @error('reasons') is-error @enderror" type="text"
                                name="reasons" id="reasons" value="{{ old('reasons') }}">
                            @error('reasons')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="applicant address">Applicant address</label>
                            <input class="form-control width-100%  @error('applicant_address') is-error @enderror" type="text"
                                name="applicant_address" id="applicant_address" value="{{ old('applicant_address') }}">
                            @error('applicant_address')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add Form </x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
