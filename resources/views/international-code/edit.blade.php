@section('title', 'Create Form')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Application for Allotment of International Code of Signal Letters
        </h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('international-code.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('internationalCode') }}">Go to forms</a>
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
                            <label class="form-label margin-bottom-xxs" for="official number">Official number</label>
                            <input class="form-control width-100%  @error('official_number') is-error @enderror"
                                type="text" name="official_number" id="official_number"
                                value="{{ old('official_number') }}">
                            @error('official_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ship name">Name of ship</label>
                            <input class="form-control width-100%  @error('ship_name') is-error @enderror" type="text"
                                name="ship_name" id="ship_name" value="{{ old('ship_name') }}">
                            @error('ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registry port">Port of registry</label>
                            <input class="form-control width-100%  @error('registry_port') is-error @enderror" type="text"
                                name="registry_port" value="{{ old('registry_port') }}" id="type">
                            @error('registry_port')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port registry">Net registered tonnage</label>
                            <input class="form-control width-100%  @error('net_tonnage') is-error @enderror"
                                type="text" name="net_tonnage" id="net_tonnage" value="{{ old('net_tonnage') }}">
                            @error('net_tonnage')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="name address owner">Name and full address of the registered owner/corporation</label>
                            <input class="form-control width-100%  @error('name_address_owner') is-error @enderror" type="text"
                                name="name_address_owner" id="name_address_owner" value="{{ old('name_address_owner') }}">
                            @error('name_address_owner')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registry port location">Port of registry location</label>
                            <input class="form-control width-100%  @error('registry_port_location') is-error @enderror" type="text"
                                name="registry_port_location" id="registry_port_location" value="{{ old('registry_port_location') }}">
                            @error('registry_port_location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="issue date">Date of issue</label>
                            <input class="form-control width-100%  @error('issue_date') is-error @enderror" type="date"
                                name="issue_date" id="issue_date" value="{{ old('issue_date') }}">
                            @error('issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add Form </x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
