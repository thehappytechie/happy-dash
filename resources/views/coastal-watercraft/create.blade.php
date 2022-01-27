@section('title', 'Create Form')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Marking and Carving Notes (Coastal Watercraft)</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('coastal-watercraft.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('coastalWatercraft') }}">Go to forms</a>
                        <div>
                            <span class="badge badge--warning-light text-sm"><strong>Ship Information</strong></span>
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="craft name">Name of craft</label>
                            <input class="form-control width-100% @error('craft_name') is-error @enderror" type="text"
                                name="craft_name" id="craft_name" value="{{ old('craft_name') }}">
                            @error('craft_name')
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
                            <label class="form-label margin-bottom-xxs" for="signal letter">Signal letter</label>
                            <input class="form-control width-100%  @error('signal_letter') is-error @enderror"
                                type="text" name="signal_letter" id="signal_letter" value="{{ old('signal_letter') }}">
                            @error('signal_letter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="imo number">IMO number</label>
                            <input class="form-control width-100% @error('imo_number') is-error @enderror" type="text"
                                name="imo_number" id="imo_number" value="{{ old('imo_number') }}">
                            @error('imo_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registry port">Port of registry</label>
                            <input class="form-control width-100%  @error('registry_port') is-error @enderror"
                                type="text" name="registry_port" id="registry_port"
                                value="{{ old('registry_port') }}">
                            @error('registry_port')
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
                            <label class="form-label margin-bottom-xxs" for="issue date">Date of issue</label>
                            <input class="form-control width-100% @error('issue_date') is-error @enderror" type="date"
                                name="issue_date" id="issue_date" value="{{ old('issue_date') }}">
                            @error('issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port name">Port name</label>
                            <input class="form-control width-100%  @error('port_name') is-error @enderror"
                                type="text" name="port_name" id="port_name"
                                value="{{ old('port_name') }}">
                            @error('port_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="owner">Name of owner</label>
                            <input class="form-control width-100%  @error('owner') is-error @enderror"
                                type="text" name="owner" id="owner" value="{{ old('owner') }}">
                            @error('owner')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-8@md">
                            <label class="form-label margin-bottom-xxs" for="owner of address">Address of owner</label>
                            <input class="form-control width-100%  @error('owner_address') is-error @enderror"
                                type="text" name="owner_address" id="owner_address"
                                value="{{ old('owner_address') }}">
                            @error('owner_address')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add form </x-submit-button>
            </form>
        </div>
    </div>

</x-layout>
