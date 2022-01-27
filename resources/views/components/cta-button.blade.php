<div class="col margin-left-lg">
    <div class="dropdown inline-block js-dropdown">
        <div class="dropdown__wrapper">
            <a class="dropdown__trigger inline-flex items-center js-dropdown__trigger" href="#0">
                <span class="btn btn--primary btn--sm"><strong>Add</strong></span>
                <svg aria-hidden="true" class="dropdown__trigger-icon icon margin-left-xxxs" viewBox="0 0 16 16">
                    <polyline fill="none" stroke-width="1" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-miterlimit="10" points="3.5,6.5 8,11 12.5,6.5 ">
                    </polyline>
                </svg>
            </a>

            <ul class="dropdown__menu js-dropdown__menu aria-label=" dropdown">
                <li class="dropdown__sub-wrapper js-dropdown__sub-wrapper text-sm">
                    <a class="dropdown__item" href="#0">
                        Certificates
                        <svg class="icon" aria-hidden="true" viewBox="0 0 12 12">
                            <polyline stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" points="3.5 0.5 9.5 6 3.5 11.5"></polyline>
                        </svg>
                    </a>

                    <ul class="dropdown__menu js-dropdown__menu" aria-label="submenu">
                        <li><a class="dropdown__item text-sm"
                                href="{{ route('certificate-deletion.create') }}">Deletion</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('registry.create') }}">Registry
                            </a></li>
                        <li><a class="dropdown__item text-sm"
                                href="{{ route('registry-fishing-vessel.create') }}">Registry (Fishing Vessel)
                            </a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('registry-provisional.create') }}">Registry
                                (Provisional)</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('survey.create') }}">Survey</a></li>
                    </ul>
                </li>

                <li class="dropdown__sub-wrapper js-dropdown__sub-wrapper text-sm">
                    <a class="dropdown__item" href="#0">
                        Forms
                        <svg class="icon" aria-hidden="true" viewBox="0 0 12 12">
                            <polyline stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" points="3.5 0.5 9.5 6 3.5 11.5"></polyline>
                        </svg>
                    </a>

                    <ul class="dropdown__menu js-dropdown__menu text-sm" aria-label="submenu">
                        <li><a class="dropdown__item text-sm"
                                href="{{ route('international-code.create') }}">Application for the allotment of
                                International Code of Signal Letters
                            </a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('register-ship.create') }}">Application to register a ship</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('bill-sale.create') }}">Bill of Sale</a></li>
                        <li class="dropdown__sub-wrapper js-dropdown__sub-wrapper text-sm">
                            <a class="dropdown__item" href="#0">
                                Carving & Marking Notes
                                <svg class="icon" aria-hidden="true" viewBox="0 0 12 12">
                                    <polyline stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" points="3.5 0.5 9.5 6 3.5 11.5"></polyline>
                                </svg>
                            </a>
                            <ul class="dropdown__menu js-dropdown__menu" aria-label="submenu">
                                <li><a class="dropdown__item text-sm" href="{{ route('coastal-watercraft.create') }}">Coastal Craft</a></li>
                                <li><a class="dropdown__item text-sm" href="{{ route('inland-watercraft.create') }}">Inland Water Craft</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown__item text-sm" href="{{ route('ownership-corporate.create') }}">Declaration of Ownership on Behalf of a Body
                                Corporate</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('mortgage.create') }}">Mortgage</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('change-name.create') }}">Name Proposed for
                                Ghanaian Ship</a></li>
                        <li class="dropdown__sub-wrapper js-dropdown__sub-wrapper text-sm">
                            <a class="dropdown__item" href="#0">
                                Ship's Marking & Carving Notes
                                <svg class="icon" aria-hidden="true" viewBox="0 0 12 12">
                                    <polyline stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" points="3.5 0.5 9.5 6 3.5 11.5"></polyline>
                                </svg>
                            </a>
                            <ul class="dropdown__menu js-dropdown__menu" aria-label="submenu">
                                <li><a class="dropdown__item text-sm" href="{{ route('ship-fishing-vessel.create') }}">Fishing Vessels</a></li>
                                <li><a class="dropdown__item text-sm" href="{{ route('ship-inland-water.create') }}">Inland Water</a></li>
                                <li><a class="dropdown__item text-sm" href="{{ route('ship-marking-carving.create') }}">Ship's Marking & Carving Notes</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown__item text-sm" href="{{ route('transcript-register.create') }}">Transcript of Register</a></li>
                    </ul>
                </li>

                <li class="dropdown__sub-wrapper js-dropdown__sub-wrapper text-sm">
                    <a class="dropdown__item" href="#0">
                        Licenses
                        <svg class="icon" aria-hidden="true" viewBox="0 0 12 12">
                            <polyline stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" points="3.5 0.5 9.5 6 3.5 11.5"></polyline>
                        </svg>
                    </a>

                    <ul class="dropdown__menu js-dropdown__menu text-sm`" aria-label="submenu">
                        <li><a class="dropdown__item text-sm" href="{{ route('inland-watercraft-license.create') }}">Inland Watercraft Operational License</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('inland-watervessel-license.create') }}">Inland Water Vessel</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('inland-coastal-watercraft.create') }}">Coastal Water Craft</a></li>
                        <li><a class="dropdown__item text-sm" href="{{ route('inland-watercraft.create') }}">Inland Water Craft</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
