@section('title', 'Create License')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Coastal Watercraft License</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('inland-coastal-watercraft.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('licenseCoastalCraft') }}">Go to licenses</a>
                        <x-badge>Ship Information</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="imo number">IMO number</label>
                            <input class="form-control width-100% @error('imo_number') is-error @enderror" type="text"
                                name="imo_number" id="imo_number" value="{{ old('imo_number') }}">
                            @error('imo_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="signal letter">Signal letters</label>
                            <input class="form-control width-100%  @error('signal_letter') is-error @enderror"
                                type="text" name="signal_letter" id="signal_letter"
                                value="{{ old('signal_letter') }}">
                            @error('signal_letter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="craft name">Name of craft</label>
                            <input class="form-control width-100%  @error('craft_name') is-error @enderror"
                                type="text" name="craft_name" id="craft_name" value="{{ old('craft_name') }}">
                            @error('craft_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="official number">Official number</label>
                            <input class="form-control width-100% @error('official_number') is-error @enderror" type="text"
                                name="official_number" id="official_number" value="{{ old('official_number') }}">
                            @error('official_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port registry">Port of registry</label>
                            <input class="form-control width-100%  @error('port_registry') is-error @enderror"
                                type="text" name="port_registry" id="port_registry"
                                value="{{ old('port_registry') }}">
                            @error('port_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="craft type">Type of craft</label>
                            <input class="form-control width-100%  @error('craft_type') is-error @enderror"
                                type="text" name="craft_type" id="craft_type" value="{{ old('craft_type') }}">
                            @error('craft_type')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="no persons">Number of persons</label>
                            <input class="form-control width-100% @error('no_persons') is-error @enderror" type="text"
                                name="no_persons" id="no_persons" value="{{ old('no_persons') }}">
                            @error('no_persons')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine speed">Engine speed</label>
                            <input class="form-control width-100%  @error('engine_speed') is-error @enderror"
                                type="text" name="engine_speed" id="engine_speed"
                                value="{{ old('engine_speed') }}">
                            @error('engine_speed')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine desc">Description of engine</label>
                            <input class="form-control width-100%  @error('engine_desc') is-error @enderror"
                                type="text" name="engine_desc" id="engine_desc" value="{{ old('engine_desc') }}">
                            @error('engine_desc')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="maker address name">Name and address of makers</label>
                            <input class="form-control width-100%  @error('maker_address_name') is-error @enderror"
                                type="text" name="maker_address_name" id="maker_address_name" value="{{ old('maker_address_name') }}">
                            @error('maker_address_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine total">Total number of engines</label>
                            <input class="form-control width-100%  @error('engine_total') is-error @enderror"
                                type="text" name="engine_total" id="engine_total" value="{{ old('engine_total') }}">
                            @error('engine_total')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="where built">Where built</label>
                            <input class="form-control width-100%  @error('where_built') is-error @enderror"
                                type="text" name="where_built" id="where_built" value="{{ old('where_built') }}">
                            @error('where_built')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="maker builder name">Name and address of builders</label>
                            <input class="form-control width-100%  @error('maker_builder_name') is-error @enderror"
                                type="text" name="maker_builder_name" id="maker_builder_name" value="{{ old('maker_builder_name') }}">
                            @error('maker_builder_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="year built">Year built</label>
                            <input class="form-control width-100%  @error('year_built') is-error @enderror"
                                type="text" name="year_built" id="year_built" value="{{ old('year_built') }}">
                            @error('year_built')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="power">Power(kw)</label>
                            <input class="form-control width-100%  @error('power') is-error @enderror"
                                type="text" name="power" id="power" value="{{ old('power') }}">
                            @error('power')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="length">Length(metres)</label>
                            <input class="form-control width-100%  @error('length') is-error @enderror"
                                type="text" name="length" id="length" value="{{ old('length') }}">
                            @error('length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="breadth">Breadth(metres)</label>
                            <input class="form-control width-100%  @error('breadth') is-error @enderror"
                                type="text" name="breadth" id="breadth" value="{{ old('breadth') }}">
                            @error('breadth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="depth">Depth(metres)</label>
                            <input class="form-control width-100%  @error('depth') is-error @enderror"
                                type="text" name="depth" id="depth" value="{{ old('depth') }}">
                            @error('depth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="net tonnage">Net tonnage</label>
                            <input class="form-control width-100%  @error('net_tonnage') is-error @enderror"
                                type="text" name="net_tonnage" id="net_tonnage" value="{{ old('net_tonnage') }}">
                            @error('net_tonnage')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross tonnage">Gross tonnage</label>
                            <input class="form-control width-100%  @error('gross_tonnage') is-error @enderror"
                                type="text" name="gross_tonnage" id="gross_tonnage" value="{{ old('gross_tonnage') }}">
                            @error('gross_tonnage')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="operator name">Operators name</label>
                            <input class="form-control width-100%  @error('operator_name') is-error @enderror"
                                type="text" name="operator_name" id="operator_name" value="{{ old('operator_name') }}">
                            @error('operator_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="certificate no">Certificate No.</label>
                            <input class="form-control width-100%  @error('certificate_no') is-error @enderror"
                                type="text" name="certificate_no" id="certificate_no" value="{{ old('certificate_no') }}">
                            @error('certificate_no')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="issue date">License issue date</label>
                            <input class="form-control width-100%  @error('issue_date') is-error @enderror"
                                type="date" name="issue_date" id="issue_date" value="{{ old('issue_date') }}">
                            @error('issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="address owner name">Name and address of owners</label>
                            <input class="form-control width-100%  @error('address_owner_name') is-error @enderror"
                                type="text" name="address_owner_name" id="address_owner_name" value="{{ old('address_owner_name') }}">
                            @error('address_owner_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add form </x-submit-button>
            </form>
        </div>
    </div>

</x-layout>
