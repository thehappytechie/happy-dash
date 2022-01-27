@section('title', 'Print Form')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('coastalWatercraft') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>CARVING AND MARKING NOTE</x-print-logo>
        <p class="text-center text-sm">COASTAL CRAFT AND LESS THAN TWENTY FOUR METRES (24M) IN LENGTH AND LESS THAN 150 GROSS TONNAGE
        </p>
        <div class="margin-top-lg padding-x-xxl">
            <div class="grid gap-xs margin-bottom-sm text-xs">
                <div class="col">IMO number <span>{{ $coastalCraft->imo_number }}</span></div>
                <div class="col">
                    <p class="float-right">Signal letters <span>{{ $coastalCraft->signal_letter }}</span></p>
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
                    <td><span>{{ $coastalCraft->craft_name }}</span></td>
                    <td><span>{{ $coastalCraft->registry_port }}</span></td>
                    <td><span>{{ $coastalCraft->register_tonnage }}</span></td>
                    <td><span>{{ $coastalCraft->official_number }}</span></td>
                </tr>
            </table>
            <p class="text-sm margin-y-md">The Official Number, Tonnage, Name and Port of Registry as stated above are
                to be permanently and conspicuously marked in accordance with the instructions overleaf.</p>
            <div class="flex justify-start margin-top-lg text-sm line-height-lg">
                <div>
                    <p>Dated <span>{{ $coastalCraft->issue_date }}</span><br>
                        Port of <span>{{ $coastalCraft->port_name }}</span></p>
                </div>
            </div>
            <div class="flex justify-end margin-y-xl text-sm line-height-lg">
                <div>
                    <p>Registrar of Ghanaian Ships ________________________</p>
                </div>
            </div>
            <x-divider />
            <p class="text-sm">
                I hereby certify that the Official Number, Tonnage, Name and Port of Registry as stated above are
                permanently and conspicuously marked in accordance with the instruction overleaf.</p>
            <div class="flex justify-end margin-top-lg text-sm line-height-lg">
                <div>
                    <p>Signature of Surveyor ________________<br><br>
                        Date __________________________________</p>
                </div>
            </div>
            <div class="flex justify-start margin-top-lg text-sm line-height-lg">
                <div>
                    <p>Name of owner <span>{{ $coastalCraft->owner }}</span><br>
                        Address of owner <span>{{ $coastalCraft->owner_address }}</span></p>
                </div>
            </div>
            <p class="margin-y-lg text-sm">If the craft is exempted from having the Port of Registry marked on the stem
                the Registrar will delete
                reference to this from license before issue.</p>
            <div style="page-break-before: always;text-align:justify">
                <p class="text-center font-semibold text-md margin-bottom-md">MARKING OF THE CRAFT</p>
                <div class="text-sm line-height-sm">
                    <ul>
                        <li class="margin-y-md">1. The official Number and Registered Tonnage The Official Number and
                            registered tonnage are to be marked on the main beam or, if there is no main beam, on a readily accessible permanent part of the
                            structure of the craft either by cutting in, center punching or raised lettering.
                            <br><br>
                            Alternatively, then official number and registered tonnage may be engraved on plates of
                            metal, wood or plastic, secured to the main beam (or if there is no main beam, to a readily accessible
                            permanent part  of the structure of the craft) with rivets, through bolts with ends clenched, screws with
                            the slots removed, or in the case of metal or plastic plates by epoxy adhesives. Metal or plastic
                            plates secured by adhesives should be coated with translucent epoxy resin after have been fixed in
                            position.
                            <br><br>
                            The figures after the decimal point, if any, in the registered tonnage are to be shown as a
                            fraction of 100 e.g. 1393/100 and not 13.93.
                        </li>

                        <li>2. The name and the name of the Port of Registry.
                            <br><br>
                            The name and, if so, indicated overleaf, the port of registry is be marked on a conspicuous
                            part of the stern of the craft in white or yellow letters on a dark ground or block letters on a light
                            ground the letters being not less than 2 inches high and of proportionate breadth. These color
                            combinations and letter sizes should not be departed from. The name and center punching raised letter or
                            painting.
                            <br><br>
                            Alternatively, the name and where required, the port of registry may be marked by either of
                            the following methods: -
                        </li>
                        <br><br>
                        <li>a. By engraving on plates of metal or of plastic or by may be in on shaped wooden chock.
                            When metal or plastic are used, they should be secured with epoxy adhesives and coated with translucent
                            epoxy resin after fitting. When shaped wooden chocks are used, they should be secured to the hull by
                            through bolts, the end being clenched.</li>
                        <br><br>
                        <li>b. By individual plastic letters and numbers cut out from a sheet of glass reinforced
                            plastic approximately 1/16 inch or 2mm in thickness. These should be fixed to the hull by epoxy adhesives, painted
                            with suitable paint of the appropriate color and coated with translucent epoxy resin.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-print>
