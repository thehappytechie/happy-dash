@section('title', 'Create Certificate')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Certificate of Survey</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('survey.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('certificateSurvey') }}">Go to certificates</a>
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
                                type="text" name="signal_letter" id="signal_letter" value="{{ old('signal_letter') }}">
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
                            <label class="form-label margin-bottom-xxs" for="port of ship">Port of intended
                                registry</label>
                            <input class="form-control width-100%  @error('ship_port') is-error @enderror" type="text"
                                name="ship_port" id="ship_port" value="{{ old('ship_port') }}">
                            @error('ship_port')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="steam motor">Steam or motor ship</label>
                            <input class="form-control width-100%  @error('steam_motor') is-error @enderror" type="text"
                                name="steam_motor" id="steam_motor" value="{{ old('steam_motor') }}">
                            @error('steam_motor')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md ">
                            <label class="form-label margin-bottom-xxs" for="where built">Where built</label>
                            <input class="form-control width-100%  @error('where_built') is-error @enderror" type="text"
                                name="where_built" id="where_built" value="{{ old('where_built') }}">
                            @error('where_built')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md ">
                            <label class="form-label margin-bottom-xxs" for="when built">When built</label>
                            <input class="form-control width-100%  @error('when_built') is-error @enderror" type="text"
                                name="when_built" id="when_built" value="{{ old('when_built') }}">
                            @error('when_built')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="name address builders">Name and address of
                                builders</label>
                            <input class="form-control width-100%  @error('name_address_builder') is-error @enderror"
                                type="text" name="name_address_builder" id="name_address_builder"
                                value="{{ old('name_address_builder') }}">
                            @error('name_address_builder')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="decks">Number of decks</label>
                            <input class="form-control width-100% @error('decks') is-error @enderror" type="text"
                                name="decks" id="decks" value="{{ old('decks') }}">
                            @error('decks')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="masts">Number of masts</label>
                            <input class="form-control width-100%  @error('masts') is-error @enderror" type="text"
                                name="masts" id="masts" value="{{ old('masts') }}">
                            @error('masts')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="rigged">Rigged</label>
                            <input class="form-control width-100%  @error('rigged') is-error @enderror" type="text"
                                name="rigged" id="rigged" value="{{ old('rigged') }}">
                            @error('rigged')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="stem">Stem</label>
                            <input class="form-control width-100%  @error('stem') is-error @enderror" type="text"
                                name="stem" id="stem" value="{{ old('stem') }}">
                            @error('stem')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="stern">Stern</label>
                            <input class="form-control width-100%  @error('stern') is-error @enderror" type="text"
                                name="stern" id="stern" value="{{ old('stern') }}">
                            @error('stern')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="build">Build</label>
                            <input class="form-control width-100%  @error('build') is-error @enderror" type="text"
                                name="build" id="build" value="{{ old('build') }}">
                            @error('build')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="desc of vessel">Framework and description
                                of vessel</label>
                            <input class="form-control width-100%  @error('vessel_desc') is-error @enderror" type="text"
                                name="vessel_desc" id="vessel_desc" value="{{ old('vessel_desc') }}">
                            @error('vessel_desc')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="no bulkheads">Number of bulkheads</label>
                            <input class="form-control width-100%  @error('bulkheads') is-error @enderror" type="text"
                                name="bulkheads" id="bulkheads" value="{{ old('bulkheads') }}">
                            @error('bulkheads')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="length">Length overall</label>
                            <input class="form-control width-100%  @error('length') is-error @enderror" type="text"
                                name="length" id="length" value="{{ old('length') }}">
                            @error('length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="depth">Depth in hold from tonnage deck to
                                ceiling</label>
                            <input class="form-control width-100%  @error('depth') is-error @enderror" type="text"
                                name="depth" id="depth" value="{{ old('depth') }}">
                            @error('depth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="breath">Breadth moulded</label>
                            <input class="form-control width-100%  @error('breadth') is-error @enderror" type="text"
                                name="breadth" id="breadth" value="{{ old('breadth') }}">
                            @error('breadth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine room length">Length of engine
                                room</label>
                            <input class="form-control width-100%  @error('engine_length') is-error @enderror"
                                type="text" name="engine_length" id="engine_length" value="{{ old('engine_length') }}">
                            @error('engine_length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Particulars of Tonnages</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross ton">Gross tonnage</label>
                            <input class="form-control width-100% @error('gross_ton') is-error @enderror" type="text"
                                name="gross_ton" id=gross_ton" value="{{ old('gross_ton') }}">
                            @error('gross_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross cubic ton">Tons (cubic
                                metres)</label>
                            <input class="form-control width-100%  @error('gross_cubic_ton') is-error @enderror"
                                type="text" name="gross_cubic_ton" id="gross_cubic_ton"
                                value="{{ old('gross_cubic_ton') }}">
                            @error('gross_cubic_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="register ton">Register tonnage</label>
                            <input class="form-control width-100%  @error('register_ton') is-error @enderror"
                                type="text" name="register_ton" id="register_ton" value="{{ old('register_ton') }}">
                            @error('register_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="register cubic ton">Tons (cubic
                                metres)</label>
                            <input class="form-control width-100%  @error('register_cubic_ton') is-error @enderror"
                                type="text" name="register_cubic_ton" id="register_cubic_ton"
                                value="{{ old('register_cubic_ton') }}">
                            @error('register_cubic_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="no seafarer apprentices">No. of seafarers &
                                apprentices accomodation is certified</label>
                            <input class="form-control width-100%  @error('number_seafarers') is-error @enderror"
                                type="text" name="number_seafarers" id="number_seafarers"
                                value="{{ old('number_seafarers') }}">
                            @error('number_seafarers')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="location">Dated at</label>
                            <input class="form-control width-100%  @error('location') is-error @enderror" type="text"
                                name="location" id="location" value="{{ old('location') }}">
                            @error('location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registry date">Date</label>
                            <input class="form-control width-100%  @error('issue_date') is-error @enderror" type="date"
                                name="issue_date" id="issue_date" value="{{ old('issue_date') }}">
                            @error('issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Particulars of Propelling Engine</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="no_of_engines">No. of set engines</label>
                            <input class="form-control width-100% @error('no_engines') is-error @enderror" type="text"
                                name="no_engines" id="no_of_engines" value="{{ old('no_engines') }}">
                            @error('no_engines')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="no of shafts">No. of shafts</label>
                            <input class="form-control width-100%  @error('no_shafts') is-error @enderror" type="text"
                                name="no_shafts" id="no_shafts" value="{{ old('no_shafts') }}">
                            @error('no_shafts')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="desc engine">Description of engines</label>
                            <input class="form-control width-100%  @error('desc_engine') is-error @enderror" type="text"
                                name="desc_engine" id="desc_engine" value="{{ old('desc_engine') }}">
                            @error('desc_engine')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine make">When made</label>
                            <input class="form-control width-100% @error('engine_make') is-error @enderror" type="text"
                                name="engine_make" id="engine_make" value="{{ old('engine_make') }}">
                            @error('engine_make')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md ">
                            <label class="form-label margin-bottom-xxs" for="name address maker engine">Name and address
                                of makers</label>
                            <input
                                class="form-control width-100%  @error('name_address_maker_engine') is-error @enderror"
                                type="text" name="name_address_maker_engine" id="name_address_maker_engine"
                                value="{{ old('name_address_maker_engine') }}">
                            @error('name_address_maker_engine')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <x-badge>Reciprocating Engines</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="cylinder set">No. of cylinders in each
                                set</label>
                            <input class="form-control width-100%  @error('cylinder_set') is-error @enderror"
                                type="text" name="cylinder_set" id="cylinder_set" value="{{ old('cylinder_set') }}">
                            @error('cylinder_set')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="cylinder_diameter">Diameter of
                                cylinders</label>
                            <input class="form-control width-100% @error('cylinder_diameter') is-error @enderror"
                                type="text" name="cylinder_diameter" id="cylinder_diameter"
                                value="{{ old('cylinder_diameter') }}">
                            @error('cylinder_diameter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md ">
                            <label class="form-label margin-bottom-xxs" for="length_stroke">Length of stroke</label>
                            <input class="form-control width-100%  @error('stroke_length') is-error @enderror"
                                type="text" name="stroke_length" id="stroke_length" value="{{ old('stroke_length') }}">
                            @error('stroke_length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Rotary engines</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="cylinder_no_recip">No. of Cylinders in each
                                set</label>
                            <input class="form-control width-100% @error('cylinder_no') is-error @enderror" type="text"
                                name="cylinder_no" id="cylinder_no" value="{{ old('cylinder_no') }}">
                            @error('cylinder_no')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Particulars of Boilers</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="desc boiler">Description</label>
                            <input class="form-control width-100%  @error('boiler_desc') is-error @enderror" type="text"
                                name="boiler_desc" id="boiler_desc" value="{{ old('boiler_desc') }}">
                            @error('boiler_desc')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="numb boiler">Number</label>
                            <input class="form-control width-100%  @error('boiler_no') is-error @enderror" type="text"
                                name="boiler_no" id="boiler_no" value="{{ old('boiler_no') }}">
                            @error('boiler_no')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="load_pressure">Loaded pressure</label>
                            <input class="form-control width-100%  @error('load_pressure') is-error @enderror"
                                type="text" name="load_pressure" id="load_pressure" value="{{ old('load_pressure') }}">
                            @error('load_pressure')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="nhp">N.H.P</label>
                            <input class="form-control width-100% @error('nhp') is-error @enderror" type="text"
                                name="nhp" id="nhp" value="{{ old('nhp') }}">
                            @error('nhp')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="bhp">B.H.P</label>
                            <input class="form-control width-100% @error('bhp') is-error @enderror" type="text"
                                name="bhp" id="bhp" value="{{ old('bhp') }}">
                            @error('bhp')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ihp">I.H.P</label>
                            <input class="form-control width-100% @error('ihp') is-error @enderror" type="text"
                                name="ihp" id="ihp" value="{{ old('ihp') }}">
                            @error('ihp')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="boiler make">When made</label>
                            <input class="form-control width-100% @error('boiler_make') is-error @enderror" type="text"
                                name="boiler_make" id="boiler_make" value="{{ old('boiler_make') }}">
                            @error('boiler_make')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="name address maker engine">Name and address
                                of makers</label>
                            <input class="form-control width-100% @error('boiler_maker_address') is-error @enderror"
                                type="text" name="boiler_maker_address" id="boiler_maker_address"
                                value="{{ old('boiler_maker_address') }}">
                            @error('boiler_maker_address')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="speed of ship">Estimated speed of
                                ship</label>
                            <input class="form-control width-100% @error('ship_speed') is-error @enderror" type="text"
                                name="ship_speed" id="ship_speed" value="{{ old('ship_speed') }}">
                            @error('ship_speed')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Create Certificate </x-submit-button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
