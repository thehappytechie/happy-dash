@section('title', 'Print Certificate')

<x-print>
    <div class="container padding-top-sm cta__button-section">
        <a href="{{ route('certificateregistryProvisional') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-lg">
        <x-print-logo>CERTIFICATE OF REGISTRY (PROVISIONAL)</x-print-logo>
        <div class="margin-top-md padding-x-sm">
            <div class="grid gap-xs margin-bottom-xs text-xs">
                <div class="col">IMO number <span>{{ $registryProvisional->imo_number }}</span></div>
                <div class="col font-bold">PARTICULARS OF SHIP</div>
                <div class="col">
                    <p class="float-right">Signal letters <span>{{ $registryProvisional->signal_letter }}</span></p>
                </div>
            </div>
            <table class="text-xs">
                <tr>
                    <th>Name of ship</th>
                    <th>Official number</th>
                    <th>No. Year and Port of Registry</th>
                    <th>No., Year and Port of Previous registry (if any)</th>
                </tr>
                <tr>
                    <td><span>{{ $registryProvisional->ship_name }}</span></td>
                    <td><span>{{ $registryProvisional->official_number }}</span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Steam or motor ship</td>
                    <td>Where built</td>
                    <td>When built</td>
                    <td>Name and address of builders</td>
                </tr>
                <tr>
                    <td><span>{{ $registryProvisional->steam_motor }}</span></td>
                    <td><span>{{ $registryProvisional->where_built }}</span></td>
                    <td><span>{{ $registryProvisional->when_built }}</span></td>
                    <td><span>{{ $registryProvisional->name_address_builders }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <td>Number of decks</td>
                    <td>Number of masts</td>
                    <td>Rigged</td>
                    <td>Stem</td>
                    <td>Stern</td>
                    <td>Build</td>
                    <td>Framework and description of vessel</td>
                    <td>Number of bulkheads</td>
                </tr>
                <tr>
                    <td><span>{{ $registryProvisional->decks }}</span></td>
                    <td><span>{{ $registryProvisional->masts }}</span></td>
                    <td><span>{{ $registryProvisional->rigged }}</span></td>
                    <td><span>{{ $registryProvisional->stem }}</span></td>
                    <td><span>{{ $registryProvisional->stern }}</span></td>
                    <td><span>{{ $registryProvisional->build }}</span></td>
                    <td><span>{{ $registryProvisional->vessel_desc }}</span></td>
                    <td><span>{{ $registryProvisional->bulkheads }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <td>Length overall</td>
                    <td>Breadth moulded</td>
                    <td>Depth moulded</td>
                    <td>Length of engine room</td>
                </tr>
                <tr>
                    <td><span>{{ $registryProvisional->overall_length }}</span></td>
                    <td><span>{{ $registryProvisional->breadth_mould}}</span></td>
                    <td><span>{{ $registryProvisional->depth_mould }}</span></td>
                    <td><span>{{ $registryProvisional->engine_length }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <th colspan="5" class="text-center font-bold">PARTICULARS OF PROPELLING ENGINES & C. (IF ANY), As
                    Supplied by Builder, Owners or Engine Makers</th>
                <tr>
                    <td>No. of sets of engines</td>
                    <td>Description of engines</td>
                    <td>Name and address of makers</td>
                    <td>No. of shafts</td>
                    <td>When made</td>
                </tr>
                <tr>
                    <td><span>{{ $registryProvisional->overall_length }}</span></td>
                    <td><span>{{ $registryProvisional->breadth_mould}}</span></td>
                    <td><span>{{ $registryProvisional->depth_mould }}</span></td>
                    <td><span>{{ $registryProvisional->engine_length }}</span></td>
                    <td></td>
                </tr>
            </table>
            <table class="text-xs">
                <th colspan="4" class="text-center text-xs font-bold">PARTICULARS OF TONNAGES</th>
                <tr>
                    <td>Gross tonnage <span>{{ $registryProvisional->gross_ton }}</span></td>
                    <td>Tons(cubic metres) <span>{{ $registryProvisional->gross_ton_cubic }}</span></td>
                    <td>Register tonnage <span>{{ $registryProvisional->register_ton }}</span></td>
                    <td>Tons(cubic metres) <span>{{ $registryProvisional->register_ton_cubic }}</span></td>
                </tr>
                <tr>
                    <td colspan="4">The number of seafarers and apprentices for whom accommodation is certified <span>{{
                            $registryProvisional->number_seafarers }}</span>
                    </td>
                </tr>
                <tr>
                    <td><span>{{ $registryProvisional->breadth_mould}}</span></td>
                    <td><span>{{ $registryProvisional->depth_mould }}</span></td>
                    <td><span>{{ $registryProvisional->engine_length }}</span></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p class="text-xs">
                            I, the undersigned. Registrar of Ghanaian Ships at the Port of ss hereby certify
                            that the ship, the Description of which is prefixed to this cetificate has been duly
                            surveyed and the above description is in accordance with the Registrar Book that is whose
                            Certificate
                            of Competency or Service No ss is the Master of the said ship.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Name, residence and occupation of owners </td>
                    <td colspan="2">Number of shares</td>
                </tr>
                <tr>
                    <td colspan="2"> <span>{{ $registryProvisional->name_residence_owners }}</span></td>
                    <td colspan="2"> <span>{{ $registryProvisional->sixty_four_shares }}</span></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <ul class="grid gap-xs">
                            <li class="col">Issued at <span>{{ $registryProvisional->location }}</span></li>
                            <li class="col">Date: <span>{{ $registryProvisional->issue_date->toFormattedDateString()
                                    }}</span></li>
                            <li class="col-5">
                                <p class="float-right">Registrar of Ghanaian ships ________________________</p>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p class="text-xs"> NOTICE: A Certificate of Registry is not a document of Title. It does not
                            necessarily contain notice of all changes of ownership and in no case does it contain
                            official record of
                            any mortgages affecting the ship. In case of any changeof ownership it is important for the
                            protection of the interest of all parties that the changes should be registered according to
                            Law. Changes of ownership, address or other registered particulars should be notified to the
                            registrar at the Port of registry. Should the vessel be lost, sold to foreigners, or broken
                            up, notice thereof, together with the Certificate of Registry, if in existence, should
                            immediately be given to the Registrar of Ghanaian ships at the Port of Registry or under a
                            penalty for default.</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</x-print>
