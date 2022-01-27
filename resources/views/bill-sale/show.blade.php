@section('title', 'Print Form')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('billSale') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>BILL OF SALE (Body Corporate)
        </x-print-logo>

        <div class="margin-top-lg padding-x-xl">
            <table class="text-xs">
                <tr>
                    <th>Official no.</th>
                    <th>Name of ship</th>
                    <th>No. year and port of registry</th>
                    <th>Steam or motor ship</th>
                    <th>Power engine</th>
                </tr>
                <tr>
                    <td><span>{{ $billSale->official_number }}</span></td>
                    <td><span>{{ $billSale->ship_name }}</span></td>
                    <td><span>{{ $billSale->year_port_of_registry }}</span></td>
                    <td><span>{{ $billSale->steam_motor }}</span></td>
                    <td><span>{{ $billSale->power_engine }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <ul class="line-height-xl">
                            <li> Length from forepart of stem, to the aft aside the head of the stem post <span>{{
                                    $billSale->length }}</span></li>
                            <li>Main breadth to outside of plating <span>{{ $billSale->breadth }}</span></li>
                            <li>Depth in hold from tonnage deck to ceiling amidships <span>{{ $billSale->depth }}</span>
                            </li>
                        </ul>
                    </th>
                    <th>
                        <ul class="line-height-xl">
                            <li>Gross tonnage <span>{{ $billSale->gross_ton }}</span></li>
                            <li>Register tonnage <span>{{ $billSale->register_ton }}</span></li>
                    </th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th class="text-center font-bold">And as described in more detail in the Certificate of the surveyor
                        and the Register Book</th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <p class="line-height-xl margin-top-sm">
                            We, <span>{{ $billSale->company_location }}</span> having our principal place of business at
                            <span> {{ $billSale->company_amount }}</span> in consideration of the sum of <span>{{
                                $billSale->company_amount }}</span> paid
                            to us by <span>{{ $billSale->company_payee_main }}</span> the Receipt whereof is
                            hereby acknowledged, transfer <span>{{ $billSale->company_shares }}</span> shares, in the
                            ship above
                            particularly described, and in her boats, guns ammunition, small arms and appurtenances, to
                            the said <span>{{ $billSale->company_payee_other }}</span> Further, we the
                            said {{ $billSale->company_name_other }} for ourselves and our successors
                            covenant with the said <span>{{ $billSale->company_payee_last }}</span> and <span>{{
                                $billSale->company_name_secondary }}</span> assigns, that we have power to transfer in
                            manner aforesaid the premises
                            herein before expressed to be transferred, and that the same are free from encumbrances
                            <span>{{ $billSale->company_assigns }}</span>. In witness whereof we have hereunto
                            affixed our common seal this {{ $billSale->issue_date->format('jS \d\a\y\ \o\f F, Y') }} The
                            Common Seal of the Transferor <span>{{ $billSale->company_transferer }}</span>
                        </p>
                        <p class="margin-y-xxl">Was affixed hereunto in the presence of (e)</p>
                    </th>
                </tr>
            </table>
            <div class="margin-top-lg text-xs">
                <p class="line-height-md">
                    (a) here insert title of the Body Corporate (b) here insert full name and address, with description
                    of the transferor or transferors (c) “his’’, “her’’, “their’’ or “its’’ (d) If there be any
                    subsisting Mortgage, or outstanding Certificates of Mortgage or Sale, add “save as appears by the
                    Registry of the ship’’ (e) Names, address, Directors, Secretary, etc. (As the case may be).<br>
                    NOTE: - A purchaser vessel does not obtain a complete title until the Bill of Sale has been recorded
                    at the Port of Registry; and neglect of this precaution may entail serious consequences.<br>
                    NOTE: - Registered owners or Mortgages are reminded of the importance of keeping the Registrar of
                    Ghanaian
                </p>
            </div>
        </div>
    </div>

</x-print>
