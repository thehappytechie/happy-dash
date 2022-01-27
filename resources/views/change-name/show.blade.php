@section('title', 'Print Certificate')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('changeNameShip') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>Application for permission to change the name of a Ghanaian Ship
        </x-print-logo>

        <div class="margin-top-lg padding-x-xxl">
            <table class="text-xs">
                <tr>
                    <th>Present name of ship</th>
                    <th>Present Port of registry</span></th>
                    <th>Official number</th>
                    <th>Registry tonnage</th>
                    <th>Gross Tonnage</th>
                </tr>
                <tr>
                    <td>{{ $changeNameShip->ship_name }}</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>Sail, Steam or Motor</th>
                    <th>Place where the vessel is now lying</span></th>
                </tr>
                <tr>
                    <td>{{ $changeNameShip->ship_name }}</td>
                    <td>1</td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>Proposed name of ship (see para.2 of conditions) overleaf</th>
                    <th>New port of registry if port is being changed</span></th>
                    <th>If name is being changed on transfer of vessel, state name of late owners</span></th>
                </tr>
                <tr>
                    <td>{{ $changeNameShip->ship_name }}</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">Reasons for requiring change of name</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center"></td>
                </tr>
            </table>
            <div class="margin-top-lg text-sm">
                <p class="line-height-lg">
                    I hereby declare that I make this application consciously believing that the foregoing particulars
                    are true and complete, and that the proposed change of name will not be prejudicial to any person or
                    persons interested in the ship.
                </p>
            </div>
            <div class="flex justify-end margin-top-lg text-sm line-height-lg">
                <div>
                    <p>Signature of applicant<br>
                        Address</p>
                </div>
            </div>
            <div class="text-sm margin-top-lg line-height-lg">
                <p>To the Director General. <br>
                    Ghana Maritime Authority</p>
            </div>

            <div class="flex justify-end margin-top-xl text-sm line-height-lg">
                <div>
                    <p>Director General _________________________</p>
                </div>
            </div>
            <div class="line-height-lg">
                <p class="margin-top-xxl text-xs">This form should be forwarded, when filled up, to the Director General
                    Ghana
                    Maritime Authority, PMB 34, Ministries, Accra.</p>
            </div>

            <div style="page-break-before: always;text-align:justify">
                <p class="text-uppercase font-bold margin-bottom-lg">CONDITIONS ON WHICH THE CHANGE OF A GHANAIAN SHIP
                    NAME MAY BE AUTHORISED</p>
                <ul class="text-sm line-height-xl">
                    <li>1. Application must be made, in attached form to the Director General, Ghanaian Maritime
                        Authority.</li><br>
                    <li>2. The name proposed must not already be the name of a registered Ghanaian Ship or a name, which
                        is so similar to any such name as to be likely to lead to confusion. A name which is already
                        the name of another may, however, allowed. <br>
                        (a) If the is intended to replace another of the same name which within 10 years of the date of
                        the application belonged to the same owner when her Ghanaian registry was closed, or which
                        within 10 years of the date of the application, and her name has been changed, or <br>
                        (b) If such cases a full designation proposed is a number only and the vessel so designated
                        plies only in or about a port or harbor n which no other vessel is designation by the same
                        number. In cases a full statement of the circumstances must be submitted with the application.
                    </li><br>
                    <li>3. The fee chargeable for the change of name of Ghanaian registered ship is ………………………… which
                        sound be forwarded with the application to the Registrar of Ghanaian Ships.</li>
                </ul>
            </div>
        </div>
    </div>

</x-print>
