@section('title', 'Print Certificate')

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

        </div>
    </div>


</x-print>
