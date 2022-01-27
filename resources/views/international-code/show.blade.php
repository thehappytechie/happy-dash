@section('title', 'Print Forms')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('internationalCode') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>APPLICATION FOR THE ALLOTMENT OF
            INTERNATIONAL CODE OF SIGNAL LETTERS</x-print-logo>

        <div class="margin-top-lg padding-x-xxl">
            <table class="text-xs">
                <tr>
                    <th>Name of ship</th>
                    <th>Port of registry</span></th>
                    <th>Net registered tonnage</th>
                    <th>Official number</th>
                </tr>
                <tr>
                    <td><span>{{ $internationalCodeLetter->ship_name }}</span></td>
                    <td><span>{{ $internationalCodeLetter->registry_port }}</span></td>
                    <td><span>{{ $internationalCodeLetter->net_tonnage }}</span></td>
                    <td><span>{{ $internationalCodeLetter->official_number }}</span></td>
                </tr>
            </table>
            <div>
                <p class="text-sm margin-y-md">*Delete as I apply for the allotment of signal letters to the necessary.
                    above-name ship. See note below</p>
                <p>I apply for the allotment of signal letters to the necessary above-name ship</p><br>
                <ul class="line-height-lg">
                    <li> *(A) The Certificate of Registry is enclosed.</li>
                    <li> *(B) The Certificate of Registry is/will be, at the
                        Port of……………………….on or about ……………</li>
                </ul>
            </div>
            <div class="margin-top-lg">
                Name and full address of the
                Registered (Managing) Owner,
                Or if owned by a company/
                Corporation.
            </div>
            <div class="margin-top-lg">
                <p class="line-height-lg">To: The Director General<br>
                    Ghana Maritime Authority<br>
                    P.M.B 34<br>
                    Ministries – Accra</p>
            </div>
            <div class="margin-top-lg">
                <p class="font-semibold margin-y-md">NOTE</p>
                <p>As it important that the Signal letters should be marked on the Certificate of Registry, it will save
                    time and trouble if the Certificate of Registry cannot be enclosed paragraph (b) above should be
                    completed.</p>
            </div>
        </div>
    </div>


</x-print>
