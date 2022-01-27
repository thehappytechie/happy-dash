@section('title', 'Print Certificate')

<x-print>
    <div class="container padding-top-sm cta__button-section">
        <a href="{{ route('certificateSurvey') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-lg">
        <x-print-logo>CERTIFICATE OF SURVEY</x-print-logo>
        <div class="margin-top-lg padding-x-sm">
            <div class="grid gap-xs margin-bottom-sm text-xs">
                <div class="col">IMO number <span>{{ $certificateSurvey->imo_number }}</span></div>
                <div class="col font-bold">PARTICULARS OF SHIP</div>
                <div class="col">
                    <p class="float-right">Signal letters <span>{{ $certificateSurvey->signal_letter }}</span></p>
                </div>
            </div>

            <table class="text-xs">
                <tr>
                    <th>Name of ship</th>
                    <th>Port of intended registry</th>
                    <th>Official number if there has been any former
                        registry</th>
                </tr>
                <tr>
                    <td><span>{{ $internationalCode->ship_name }}</span></td>
                    <td><span>{{ $certificateSurvey->ship_port }}</span></td>
                    <td><span>{{ $certificateSurvey->official_number }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>Steam or motor ship</th>
                    <th>Where built</th>
                    <th>When built</th>
                    <th>Name and address of builders</th>
                </tr>
                <tr>
                    <td><span>{{ $certificateSurvey->steam_motor }}</span></td>
                    <td><span>{{ $certificateSurvey->where_built }}</span></td>
                    <td><span>{{ $certificateSurvey->when_built }}</span></td>
                    <td><span>{{ $certificateSurvey->name_address_builder }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <ul class="line-height-md margin-y-sm">
                            <li>Number of decks</li>
                            <li>Rigged</li>
                            <li>Stem</li>
                            <li>Build</li>
                            <li>Framework and description of vessel</li>
                            <li>Number of bulkheads</li>
                        </ul>
                    </th>
                    <th>
                        <ul class="line-height-md">
                            <li><span>{{ $certificateSurvey->decks }}</span></li>
                            <li><span>{{ $certificateSurvey->rigged }}</span>/li>
                            <li><span>{{ $certificateSurvey->stem }}</span></li>
                            <li><span>{{ $certificateSurvey->build }}</span></li>
                            <li><span>{{ $certificateSurvey->vessel_desc }}</span></li>
                            <li><span>{{ $certificateSurvey->bulkheads }}</span></li>
                        </ul>
                    </th>
                    <th>
                        <ul class="line-height-md">
                            <li>Length overall</li>
                            <li>Breadth moulded</li>
                            <li>Depth in hold from tonnage deck to ceiling amidships</li>
                            <li>Length of engine room</li>
                        </ul>
                    </th>
                    <th>
                        <ul class="line-height-md">
                            <li><span>{{ $certificateSurvey->length }}</span></li>
                            <li><span>{{ $certificateSurvey->breadth }}</span></li>
                            <li><span>{{ $certificateSurvey->depth }}</span></li>
                            <li><span>{{ $certificateSurvey->steam_motor }}</span></li>
                        </ul>
                    </th>
                </tr>
            </table>
            <table class="text-xs">
                <th class="text-center font-bold">PARTICULARS OF TONNAGES</th>
                <tr>
                    <th colspan="5"> <p class="padding-y-xs">The tonnage of this in ship accordance with her International Tonnage Certificate
                        are:</p>
                        <div class="grid grid-xs margin-y-sm">
                            <div class="col-6">GROSS TONNAGE</div>
                            <div class="col-6">tons (<span>{{ $certificateSurvey->gross_cubic_ton }}</span>cubic metres)</div>
                        </div>
                        <div class="grid grid-xs margin-y-sm">
                            <div class="col-6">REGISTER TONNAGE</div>
                            <div class="col-6">tons (<span>{{ $certificateSurvey->register_cubic_ton }}</span>cubic metres)</div>
                        </div>
                        <p class="margin-y-md">The number of seafarers and apprentices for whom accommodation is certified <span>{{ $certificateSurvey->number_seafarers }}</span>
                        </p>
                    </th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th colspan="5" class="line-height-md padding-y-md">I, the undersigned surveyor appointed by the Ghana Maritime
                        Authority certify that the above particulars are true, and that her name is marked on her brows,
                        and her name and port of registry is properly marked on a conspicuous part of her stern, and a
                        scale of feet marked on each side of her stern and of her stern post, in manner directed by the
                        Ghana Shipping, Act, 2003, Act 645.
                        <ul class="margin-top-lg">
                            <li class="margin-y-xs">Location <span>{{ $certificateSurvey->location }}</span></li>
                            <li class="margin-y-xs">Date <span>{{ $certificateSurvey->issue_date }}</span></li>
                        </ul>
                        <p class="float-right margin-top-lg margin-x-lg">SHIP’S SURVEYOR</p>
                    </th>
                </tr>
            </table>

            <div style="page-break-before: always;">
                <br>
                <table class="text-xs">
                    <p class="text-center font-bold text-md margin-bottom-lg">CERTIFIED EXTRACT OF PARTICULARS SUPPLIED BY BUILDERS,
                        OWNERS OR ENGINE MAKERS</p>
                    <tr>
                        <th>
                            <ul class="line-height-lg margin-x-sm margin-y-lg">
                                <li class="font-semibold text-sm">Particulars of propelling engine</li>
                                <li>No. of set engines:<span>{{ $certificateSurvey->no_engines }}</span></li>
                                <li>No. of shafts:<span>{{ $certificateSurvey->no_shafts }}</span></li>
                                <li>Description of engines:<span>{{ $certificateSurvey->desc_engine }}</span></li>
                                <li>Name and address of makers:<span>{{ $certificateSurvey->name_address_maker_engine }}</span></li>
                            </ul>
                            <ul class="line-height-lg margin-x-sm margin-y-lg">
                                <li class="font-semibold text-sm">Reciprocating engines</li>
                                <li>No. of cylinders in each set:<span>{{ $certificateSurvey->cylinder_set }}</span></li>
                                <li>Diameter of cylinders:<span>{{ $certificateSurvey->cylinder_diameter }}</span></li>
                                <li>Length of stroke:<span>{{ $certificateSurvey->stroke_length }}</span></li>
                            </ul>
                            <ul class="line-height-lg margin-x-sm margin-y-lg">
                                <li class="font-semibold text-sm"> Particulars of boilers</li>
                                <li>Number:<span>{{ $certificateSurvey->number_seafarers }}</span></li>
                                <li>Loaded Pressure :<span>{{ $certificateSurvey->load_pressure }}</span></li>
                                <li>When made :<span>{{ $certificateSurvey->when_made }}</span></li>
                                <li>Name and address of maker :<span>{{ $certificateSurvey->boiler_maker_address }}</span></li>
                                <li>N.H.P. :<span>{{ $certificateSurvey->nhp }}</span></li>
                                <li>B.H.P. :<span>{{ $certificateSurvey->bhp }}</span></li>
                                <li>Estimated speed of ship :<span>{{ $certificateSurvey->ship_speed }}</span>knots.</li>
                            </ul>
                            <p class="float-right margin-x-lg margin-y-lg">Surveyor</p>
                        </th>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</x-print>
    </div>
</x-print>
