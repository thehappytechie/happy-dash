@section('title', 'Print Form')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('shipMarkingCarving') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>SHIP'S MARKING AND CARVING NOTES</x-print-logo>
        <div class="margin-top-lg padding-x-xxl">
            <div class="grid gap-xs margin-bottom-sm text-xs">
                <div class="col">IMO number <span>{{ $shipMarkingCarving->imo_number }}</span></div>
                <div class="col">
                    <p class="float-right">Signal letters <span>{{ $shipMarkingCarving->signal_letter }}</span></p>
                </div>
            </div>
            <table class="text-xs">
                <tr>
                    <th>Name of craft</th>
                    <th>Port of registry</span></th>
                    <th>Net registered tonnage</th>
                    <th>Official number</th>
                </tr>
                <tr>
                    <td><span>{{ $shipMarkingCarving->ship_name }}</span></td>
                    <td><span>{{ $shipMarkingCarving->registry_port }}</span></td>
                    <td><span>{{ $shipMarkingCarving->register_tonnage }}</span></td>
                    <td><span>{{ $shipMarkingCarving->official_number }}</span></td>
                </tr>
            </table>
            <p class="text-sm margin-y-md">The Official Number and Tonnage, as stated above are to be permanently and
                conspicuously cut in on the Main-Beam of the Vessel.
            </p>
            <div class="flex justify-start margin-top-lg text-sm line-height-lg">
                <div>
                    <p>Dated <span>{{ $shipMarkingCarving->issue_date }}</span><br>
                        Port of <span>{{ $shipMarkingCarving->location }}</span></p>
                </div>
            </div>
            <div class="flex justify-end margin-y-xl text-sm line-height-lg">
                <div>
                    <p>Registrar of Ghanaian Ships ________________________</p>
                </div>
            </div>
            <x-divider />
            <p class="text-sm line-height-md">
                I hereby certify that I have inspected the Vessel, and find that the Official Number Tonnage, as stated
                above are permanently and conspicuously cut in on her Main-Beam, that her Name is marked on each of her
                Bows, and her Name of her port of Registry, are marked on her stem, in the manner directed by section
                27(1) of the Ghana Shipping Act 2003 Act 645.</p>
            <div class="flex justify-end margin-top-lg text-sm line-height-lg">
                <div>
                    <p>Signature of Surveyor ________________<br><br>
                        Date __________________________________</p>
                </div>
            </div>
            <p class="text-center margin-y-lg text-sm">See overleaf for extract from section 27 of the Ghana Shipping
                Act 2003, Act, 645
            </p>
            <div style="page-break-before: always;text-align:justify">
                <p class="text-center font-semibold text-md margin-bottom-md">EXTRACT FROM SECTION 27 OF THE GHANA
                    SHIPPING ACT. 2003 ACT 645
                </p>
                <div class="text-sm line-height-sm">
                    <ul>
                        <li class="margin-y-md">7. (1) Every Ghanaian ship shall, before registration, be marked
                            permanently and conspicuously to the satisfaction of the Director General in the manner
                            following, that is to say.
                        </li>

                        <li>(a) Her name shall be marked on each of her bows, and her name and the name of her port of
                            registration shall be marked on her stem.
                        </li>
                        <br>
                        <li>(b) Her official number and the number denoting her registered tonnage shall be cut in on
                            the main hatch coaming or on some other permanent part of her structure.</li>
                        <br>
                        <li>(c) A scale of feet denoting her draught of water shall be marked on each side of her stern
                            and her stempost on figure six inches in length, the lower line of such figures to coincide
                            with the draught line denoted thereby.
                        </li><br>
                        <li>(2) the Board may exempt any class of ship from all or any of the requirement of this
                            section.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-print>
