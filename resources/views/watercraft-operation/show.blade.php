<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('certificateDeletion') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>CERTIFICATE OF DELETION</x-print-logo>

        <div class="margin-top-lg padding-x-xxl">
            <table class="text-xs">
                <tr>
                    <th>Name of ship</th>
                    <th><span>{{ $certificateDeletion->port_registry }}</span></th>
                </tr>
                <tr>
                    <td>Official number</td>
                    <td><span>{{ $certificateDeletion->official_number }}</span></td>
                </tr>
                <tr>
                    <td>IMO number</td>
                    <td><span>{{ $certificateDeletion->imo_number }}</span></td>
                </tr>
                <tr>
                    <td>Signal letters</td>
                    <td><span>{{ $certificateDeletion->port_registry }}</span></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><span>{{ $certificateDeletion->type }}</span></td>
                </tr>
                <tr>
                    <td>Port of registry</td>
                    <td><span>{{ $certificateDeletion->port_registry }}</span></td>
                </tr>
                <tr>
                    <td>Gross registry tonnage</td>
                    <td><span>{{ $certificateDeletion->gross_ton }}</span></td>
                </tr>
                <tr>
                    <td>Net registry tonnage</td>
                    <td><span>{{ $certificateDeletion->net_ton }}</span></td>
                </tr>
            </table>
            <p class="padding-y-xl">Registered Owner <br> <span>{{ $certificateDeletion->registered_owner }}</span></p>
            <p class="padding-top-xl">THE VESSEL DESCRIBED ABOVE HAS BEEN DELETED FROM THE GHANAIAN REGISTER ON</p>
            <p class="padding-top-md">Date: <span>{{ $certificateDeletion->dated_at->toFormattedDateString() }}</span></p>
            <p class="padding-y-lg"><span>{{ $certificateDeletion->sale_transfer }}</span></p>
            <p class="padding-top-md"><span>{{ $certificateDeletion->encumberance }}</span></p>
        </div>
    </div>


</x-print>
