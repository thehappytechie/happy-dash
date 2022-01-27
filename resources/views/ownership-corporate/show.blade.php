@section('title', 'Print Form')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('ownershipCorporate') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>ownershipCorporate (to Secure Principal Sum and Interest) – Body Corporate
        </x-print-logo>

        <div class="margin-top-lg padding-x-xl">
            <table class="text-xs">
                <tr>
                    <th>Name of Ship</th>
                    <th>Official No.</th>
                    <th>No. Date and Port of Registry</th>
                    <th>Steam or Motor ship</th>
                    <th>Horse Power Engine (if any)</th>
                </tr>
                <tr>
                    <td><span>{{ $ownershipCorporate->ship_name }}</span></td>
                    <td><span>{{ $ownershipCorporate->official_number }}</span></td>
                    <td><span>{{ $ownershipCorporate->port_registry_date }}</span></td>
                    <td><span>{{ $ownershipCorporate->steam_motor }}</span></td>
                    <td><span>{{ $ownershipCorporate->engine_power }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <ul class="line-height-xl">
                            <li> Length from forepart of stem, to the aft aside the head of the stem post <span>{{
                                    $ownershipCorporate->length }}</span></li>
                            <li>Main breadth to outside of plating <span>{{ $ownershipCorporate->breadth }}</span></li>
                            <li>Depth in hold from tonnage deck to ceiling amidships <span>{{ $ownershipCorporate->depth }}</span>
                            </li>
                            <li>Length of engine room <span>{{ $ownershipCorporate->engine_room_length }}</span>
                            </li>
                        </ul>
                    </th>
                </tr>
                <tr>
                    <th class="text-center font-semibold">
                        NUMBER OF TONS
                    </th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>Gross tonnage <span>{{ $ownershipCorporate->gross_ton }}</span></th>
                    <th>Register tonnage <span>{{ $ownershipCorporate->register_ton }}</span></th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th class="text-center font-semibold">And as described in more detail in the Certificate of the
                        surveyor and the Register Book</th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <p class="line-height-xl margin-y-sm">
                            I, the undersigned <span>{{ $ownershipCorporate->rep_name }}</span> of <span>{{ $ownershipCorporate->rep_location }} </span> of the
                            <span>{{ $ownershipCorporate->company_name }}</span>
                            Company/Corporation Ltd, declares as follows: <br>
                            The said Company/Corporation was incorporated by virtue of the Companies Ordinance on the
                            <span>{{ $ownershipCorporate->created_at }}</span> and is subjected to the laws of Ghana and its registered office is
                            at <span>{{ $ownershipCorporate->registered_location }}</span> The said Company/Corporation has its principal place of
                            business at <span>{{ $ownershipCorporate->business_location }}</span>
                            where all the important business of the Company/Corporation is in fact, controlled and
                            managed at
                            meetings of Directors or Managers of the Company/Corporation. The above general description
                            of the ship is correct.<br>
                            Captain/Skipper <span>{{ $ownershipCorporate->skipper }}</span>whose Certificate of <br> Competency is No
                            <span>{{ $ownershipCorporate->competency }}</span> Is Master/Skipper of
                            the said ship
                            <br>
                            The said Company/Corporation is entitled to be registered as owner of
                            <span>{{ $ownershipCorporate->owner_shares }}</span>
                            Shares in the said ship. To the best of my knowledge and belief, no of persons or body of
                            persons other than such persons or bodies of person as are by the Ghana shipping Act 2003.
                            Act 645 to be owners of Ghanaian ships is entitled, as Owner, to any interest whatever,
                            either legal or beneficial, in the said ship. And I make this solemn Declaration
                            conscientiously believing the same to be true.
                        </p>
                        <p class="margin-y-sm">Made and subscribe <span>{{ $ownershipCorporate->subscriber_date }}</span></p>
                        <p class="margin-y-sm">By the above-named <span>{{ $ownershipCorporate->subscriber_name }}</span></p>
                    </th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <p class="line-height-xl margin-top-sm">
                            *Insect office of person making declaration, Secretary or otherwise.
                            Declaration must be made before a Registrar of Ships, a Justice of Peace, a Commissioner for
                            Oaths or Representative of Ghana. The qualification of the person taking the declaration and
                            the place of attestation are to be added to his signature.
                        </p>
                    </th>
                </tr>
            </table>
        </div>
    </div>

</x-print>
