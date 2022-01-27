@section('title', 'Create Form')
<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add declaration of ownership on behalf of ships a body corporate
        </h1>
    </div>

    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('ownership-corporate.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('ownershipCorporate') }}">Go to forms</a>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ship name">Name of ship</label>
                            <input class="form-control width-100% @error('ship_name') is-error @enderror" type="text"
                                name="ship_name" id="ship_name" value="{{ old('ship_name') }}">
                            @error('ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="official number">Official number</label>
                            <input class="form-control width-100%  @error('official_number') is-error @enderror"
                                type="text" name="official_number" value="{{ old('official_number') }}" id="official_number" required>
                            @error('official_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="signal letter">Signal letter</label>
                            <input class="form-control width-100%  @error('signal_letter') is-error @enderror" type="text"
                                name="signal_letter" id="signal_letter" value="{{ old('signal_letter') }}">
                            @error('signal_letter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="imo number">IMO number</label>
                            <input class="form-control width-100%  @error('imo_number') is-error @enderror" type="text"
                                name="imo_number" id="imo_number" value="{{ old('imo_number') }}">
                            @error('imo_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="affixed hereto">Port of registry date</label>
                            <input class="form-control width-100%  @error('port_registry_date') is-error @enderror" type="date"
                                name="port_registry_date" id="port_registry_date" value="{{ old('port_registry_date') }}">
                            @error('port_registry_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="steam_motor">Steam motor</label>
                            <input class="form-control width-100%  @error('steam_motor') is-error @enderror" type="text"
                                name="steam_motor" id="steam_motor" value="{{ old('steam_motor') }}">
                            @error('steam_motor')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="length">Forepart stem length</label>
                            <input class="form-control width-100%  @error('length') is-error @enderror" type="text"
                                name="length" id="length" value="{{ old('length') }}">
                            @error('length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="breadth">Main breadth</label>
                            <input class="form-control width-100%  @error('breadth') is-error @enderror" type="text"
                                name="breadth" id="breadth" value="{{ old('breadth') }}">
                            @error('breadth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="depth">Depth</label>
                            <input class="form-control width-100%  @error('depth') is-error @enderror" type="text"
                                name="depth" id="depth" value="{{ old('depth') }}">
                            @error('depth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine room length">Length of engine room</label>
                            <input class="form-control width-100%  @error('engine_room_length') is-error @enderror" type="text"
                                name="engine_room_length" id="engine_room_length" value="{{ old('engine_room_length') }}">
                            @error('engine_room_length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross tonnage">Gross tonnage</label>
                            <input class="form-control width-100%  @error('gross_ton') is-error @enderror" type="text"
                                name="gross_ton" id="gross_ton" value="{{ old('gross_ton') }}">
                            @error('gross_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="register tonnage">Register tonnage</label>
                            <input class="form-control width-100%  @error('register_ton') is-error @enderror" type="text"
                                name="register_ton" id="register_ton" value="{{ old('register_ton') }}">
                            @error('register_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="rep name">Rep name</label>
                            <input class="form-control width-100%  @error('rep_name') is-error @enderror" type="text"
                                name="rep_name" id="rep_name" value="{{ old('rep_name') }}">
                            @error('rep_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="rep location">Rep location</label>
                            <input class="form-control width-100%  @error('rep_location') is-error @enderror" type="text"
                                name="rep_location" id="rep_location" value="{{ old('rep_location') }}">
                            @error('rep_location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company name">Company name</label>
                            <input class="form-control width-100%  @error('company_name') is-error @enderror" type="text"
                                name="company_name" id="company_name" value="{{ old('company_name') }}">
                            @error('company_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registered location">Registered location</label>
                            <input class="form-control width-100%  @error('registered_location') is-error @enderror" type="text"
                                name="registered_location" id="registered_location" value="{{ old('registered_location') }}">
                            @error('registered_location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="business_location">Business location</label>
                            <input class="form-control width-100%  @error('business_location') is-error @enderror" type="text"
                                name="business_location" id="business_location" value="{{ old('business_location') }}">
                            @error('business_location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="skipper">Skipper</label>
                            <input class="form-control width-100%  @error('skipper') is-error @enderror" type="text"
                                name="skipper" id="skipper" value="{{ old('skipper') }}">
                            @error('skipper')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="competency">Competency</label>
                            <input class="form-control width-100%  @error('competency') is-error @enderror" type="text"
                                name="competency" id="competency" value="{{ old('competency') }}">
                            @error('competency')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="owner shares">Owner shares</label>
                            <input class="form-control width-100%  @error('owner_shares') is-error @enderror" type="text"
                                name="owner_shares" id="owner_shares" value="{{ old('owner_shares') }}">
                            @error('owner_shares')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="subscriber date">Subscriber date</label>
                            <input class="form-control width-100%  @error('subscriber_date') is-error @enderror" type="date"
                                name="subscriber_date" id="subscriber_date" value="{{ old('subscriber_date') }}">
                            @error('subscriber_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="subscriber name">Subscriber name</label>
                            <input class="form-control width-100%  @error('subscriber_name') is-error @enderror" type="text"
                                name="subscriber_name" id="subscriber_name" value="{{ old('subscriber_name') }}">
                            @error('subscriber_name')
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
