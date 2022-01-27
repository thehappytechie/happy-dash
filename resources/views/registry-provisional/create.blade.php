@section('title', 'Create Certificate')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Certificate of Registry (Provisional)</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('registry.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('certificateRegistryProvisional') }}">Go to certificates</a>
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
                            <label class="form-label margin-bottom-xxs" for="ship name">Name of ship</label>
                            <input class="form-control width-100%  @error('ship_name') is-error @enderror" type="text"
                                name="ship_name" id="ship_name" value="{{ old('ship_name') }}">
                            @error('ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port registry">No. year and port of
                                registry</label>
                            <input class="form-control width-100%  @error('port_registry') is-error @enderror"
                                type="text" name="port_registry" id="port_registry" value="{{ old('port_registry') }}">
                            @error('port_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="prev port registry">No. year and port of
                                registry(if any)</label>
                            <input class="form-control width-100%  @error('prev_port_registry') is-error @enderror"
                                type="text" name="prev_port_registry" id="prev_port_registry">
                            @error('prev_port_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="steam motor">Steam/motor ship</label>
                            <input class="form-control width-100%  @error('steam_motor') is-error @enderror" type="text"
                                name="steam_motor" id="steam_motor">
                            @error('steam_motor')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
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
                                name="when_built" id="when_built">
                            @error('when_built')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md ">
                            <label class="form-label margin-bottom-xxs" for="name address builders">Name and address of
                                builders</label>
                            <input class="form-control width-100%  @error('name_address_builders') is-error @enderror"
                                type="text" name="name_address_builders" id="name_address_builders">
                            @error('name_address_builders')
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
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Particulars of Propelling engines</x-badge>
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
                                name="stem" id="stem">
                            @error('stem')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="build">Build</label>
                            <input class="form-control width-100%  @error('build') is-error @enderror" type="text"
                                name="build" id="build">
                            @error('build')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="vessel desc">Framework and desc. of
                                vessel</label>
                            <input class="form-control width-100%  @error('vessel_desc') is-error @enderror" type="text"
                                name="vessel_desc" id="vessel_desc" value="{{ old('vessel_desc') }}">
                            @error('vessel_desc')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="overall length">Length overall</label>
                            <input class="form-control width-100%  @error('overall_length') is-error @enderror"
                                type="text" name="overall_length" id="overall_length">
                            @error('overall_length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="breadth mould">Breadth moulded</label>
                            <input class="form-control width-100%  @error('breadth_mould') is-error @enderror" type="text"
                                name="breadth_mould" id="breadth_mould">
                            @error('breadth_mould')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="depth mould">Depth moulded</label>
                            <input class="form-control width-100%  @error('depth_mould') is-error @enderror"
                                type="text" name="depth_mould" id="depth_mould" value="{{ old('depth_mould') }}">
                            @error('depth_mould')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="no_engines">No. of sets of engines</label>
                            <input class="form-control width-100%  @error('no_engines') is-error @enderror" type="text"
                                name="no_engines" id="no_engines">
                            @error('no_engines')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="no_shafts">No. of shaft</label>
                            <input class="form-control width-100%  @error('no_shafts') is-error @enderror" type="text"
                                name="no_shafts" id="no_shafts">
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
                            <label class="form-label margin-bottom-xxs" for="stern">Stern</label>
                            <input class="form-control width-100%  @error('stern') is-error @enderror" type="text"
                                name="stern" id="stern">
                            @error('stern')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="bulkheads">Number of bulkheads</label>
                            <input class="form-control width-100%  @error('bulkheads') is-error @enderror" type="text"
                                name="bulkheads" id="bulkheads">
                            @error('bulkheads')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine length">Length of engine
                                room</label>
                            <input class="form-control width-100%  @error('engine_length') is-error @enderror"
                                type="text" name="engine_length" id="engine_length" value="{{ old('engine_length') }}">
                            @error('engine_length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engine name address maker">Name and address of
                                makers(engine)</label>
                            <input class="form-control width-100%  @error('engine_name_address_maker') is-error @enderror"
                                type="text" name="engine_name_address_maker" id="engine_name_address_maker">
                            @error('engine_name_address_maker')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="engin _make">When engine
                                made</label>
                            <input
                                class="form-control width-100%  @error('engine_make') is-error @enderror"
                                type="text" name="engine_make" id="engine_make">
                            @error('engine_make')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Reciprocating engines/rotary engines</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="cylinder set">No. of cylinders in each
                                set</label>
                            <input class="form-control width-100% @error('cylinder_set') is-error @enderror" type="text"
                                name="cylinder_set" id="cylinder_set" value="{{ old('cylinder_set') }}">
                            @error('cylinder_set')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="cylinder diameter">Diameter of
                                cylinders</label>
                            <input class="form-control width-100%  @error('cylinder_diameter') is-error @enderror"
                                type="text" name="cylinder_diameter" id="cylinder_diameter"
                                value="{{ old('cylinder_diameter') }}">
                            @error('cylinder_diameter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="cylinder no">No. of cylinders in each
                                set</label>
                            <input class="form-control width-100%  @error('cylinder_no') is-error @enderror" type="text"
                                name="cylinder_no" id="cylinder_no" value="{{ old('cylinder_no') }}">
                            @error('cylinder_no')
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
                        <div class="col-4@md ">
                            <label class="form-label margin-bottom-xxs" for="bhp">B.H.P</label>
                            <input class="form-control width-100%  @error('bhp') is-error @enderror" type="text"
                                name="bhp" id="bhp" value="{{ old('bhp') }}">
                            @error('bhp')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ihp">I.H.P</label>
                            <input class="form-control width-100%  @error('ihp') is-error @enderror" type="text"
                                name="ihp" id="ihp" value="{{ old('ihp') }}">
                            @error('ihp')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ship speed">Estimated speed of ship</label>
                            <input class="form-control width-100% @error('ship_speed') is-error @enderror" type="text"
                                name="ship_speed" id="ship_speed" value="{{ old('ship_speed') }}">
                            @error('ship_speed')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md ">
                            <label class="form-label margin-bottom-xxs" for="stroke length">Stroke Length</label>
                            <input class="form-control width-100%  @error('stroke_length') is-error @enderror"
                                type="text" name="stroke_length" id="stroke_length" value="{{ old('stroke_length') }}">
                            @error('stroke_length')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Particulars of tonnages</x-badge>
                        <div class="col-3@md">
                            <label class="form-label margin-bottom-xxs" for="gross tonn">Gross tonnage(tons)</label>
                            <input class="form-control width-100% @error('gross_tonn') is-error @enderror" type="text"
                                name="gross_tonn" id="gross_tonn" value="{{ old('gross_tonn') }}">
                            @error('gross_tonn')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-3@md">
                            <label class="form-label margin-bottom-xxs" for="gross ton cubic">Gross tonnage(cubic
                                metres)</label>
                            <input class="form-control width-100%  @error('gross_ton_cubic') is-error @enderror"
                                type="text" name="gross_ton_cubic" id="gross_ton_cubic"
                                value="{{ old('gross_ton_cubic') }}">
                            @error('gross_ton_cubic')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-3@md">
                            <label class="form-label margin-bottom-xxs" for="register tonn">Register
                                tonnage(tons)</label>
                            <input class="form-control width-100%  @error('register_tonn') is-error @enderror"
                                type="text" name="register_tonn" id="register_tonn" value="{{ old('register_tonn') }}">
                            @error('register_tonn')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-3@md">
                            <label class="form-label margin-bottom-xxs" for="register ton cubic">Register tonnage(cubic
                                metres)</label>
                            <input class="form-control width-100% @error('register_ton_cubic') is-error @enderror"
                                type="text" name="register_ton_cubic" id="register_ton_cubic"
                                value="{{ old('register_ton_cubic') }}">
                            @error('register_ton_cubic')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>Detailed summary of the tonnage of ship</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="number seafarers">Number of
                             seafarers/apprentices</label>
                            <input class="form-control width-100% @error('number_seafarers') is-error @enderror"
                                type="text" name="number_seafarers" id="number_seafarers"
                                value="{{ old('number_seafarers') }}">
                            @error('number_seafarers')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="registry_port">Port of registry</label>
                            <input class="form-control width-100%  @error('registry_port') is-error @enderror"
                                type="text" name="registry_port" id="registry_port" value="{{ old('registry_port') }}">
                            @error('registry_port')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="captain">Captain name</label>
                            <input class="form-control width-100%  @error('captain') is-error @enderror" type="text"
                                name="captain" id="captain" value="{{ old('captain') }}">
                            @error('captain')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="competency">Competency number</label>
                            <input class="form-control width-100% @error('competency') is-error @enderror" type="text"
                                name="competency" id="competency" value="{{ old('competency') }}">
                            @error('competency')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="name residence owners">Name, residence and
                                occupation of owners</label>
                            <input class="form-control width-100%  @error('name_residence_owners') is-error @enderror"
                                type="text" name="name_residence_owners" id="name_residence_owners"
                                value="{{ old('name_residence_owners') }}">
                            @error('name_residence_owners')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="sixty four shares">Number of sixty-four
                                shares</label>
                            <input class="form-control width-100%  @error('sixty_four_shares') is-error @enderror"
                                type="text" name="sixty_four_shares" id="sixty_four_shares"
                                value="{{ old('sixty_four_shares') }}">
                            @error('sixty_four_shares')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="location">Dated at</label>
                            <input class="form-control width-100% @error('location') is-error @enderror" type="text"
                                name="location" id="location" value="{{ old('location') }}">
                            @error('location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="issue_date">Date of issue</label>
                            <input class="form-control width-100%  @error('issue_date') is-error @enderror" type="date"
                                name="issue_date" id="issue_date" value="{{ old('issue_date') }}">
                            @error('issue_date')
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
                    </div>
                    <x-submit-button>Create Certificate </x-submit-button>
                </div>
            </form>
        </div>
    </div>

</x-layout>
