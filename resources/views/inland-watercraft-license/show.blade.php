@section('title', 'Print License')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('licenseCoastalCraft') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>LICENSE FOR COASTAL WATER CRAFT</x-print-logo>
        <div class="margin-top-lg padding-x-xxl">
            <div class="grid gap-xs margin-bottom-sm text-xs">
                <div class="col">IMO number <span>{{ $licenseCoastalCraft->imo_number }}</span></div>
                <div class="col">
                    <p class="float-right">Signal letters <span>{{ $licenseCoastalCraft->signal_letter }}</span></p>
                </div>
            </div>
            <table class="text-xs">
                <tr>
                    <th>Name of craft</th>
                    <th>Official Number</span></th>
                    <th>Port of Registry</th>
                    <th>Type of Craft</th>
                    <th>Number of Persons</th>
                    <th>Engine Speed</th>
                </tr>
                <tr>
                    <td><span>{{ $licenseCoastalCraft->craft_name }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->official_number }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->port_registry }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->craft_type }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->no_persons }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->engine_speed }}</span></td>
                </tr>
            </table><br><br>
            <table class="text-xs">
                <tr>
                    <th>Description of Engine</th>
                    <th>Name and Address of Makers</span></th>
                    <th>Total Number of Engines</th>
                    <th>Where built</th>
                    <th>Name and Address of Builders</th>
                    <th>Year built</th>
                </tr>
                <tr>
                    <td><span>{{ $licenseCoastalCraft->engine_desc }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->maker_address_name }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->engine_total }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->where_built }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->maker_builder_name }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->year_built }}</span></td>
                </tr>
                <tr>
                    <th>Power in (kw)</th>
                    <th>Length(metres)</span></th>
                    <th>Breadth(metres)</th>
                    <th>Depth(metres)</th>
                    <th>Net Tonnage</th>
                    <th>Gross Tonnage</th>
                </tr>
                <tr>
                    <td><span>{{ $licenseCoastalCraft->power }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->length }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->breadth }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->depth }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->net_tonnage }}</span></td>
                    <td><span>{{ $licenseCoastalCraft->gross_tonnage }}</span></td>
                </tr>
            </table>
            <div class="flex justify-start margin-top-lg text-sm line-height-lg">
                <div>
                    <ul class="text-xs line-height-md">
                       <li>Operators Name <span>{{ $licenseCoastalCraft->operator_name }}</span></li>
                       <li>Certificate No. <span>{{ $licenseCoastalCraft->certificate_no }}</span></li>
                       <li>Name and Address of Owners <span>{{ $licenseCoastalCraft->address_owner_name }}</span></li>
                       <li>License issue date <span>{{ $licenseCoastalCraft->issue_date }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-end margin-y-xl text-sm line-height-lg">
                <div>
                    <p>Registrar of Ghanaian Ships ________________________</p>
                </div>
            </div>
            <p class="text-md text-center font-semibold">YOU MUST READ THE FOLLOWING REQUIREMENT</p>
            <p class="text-xs">
                If the craft is lost or ceases to be a Ghanaian craft, the license MUST be surrendered to the Registrar of Ships. If this license of registry is lost, stolen, destroyed or defaced, the owner should apply for a duplicate license of registry. If any of the details entered on this license change you MUST inform the Registrar or the Director - General Ghana Maritime Authority, Accra. This license is not transferable.
            </p>
        </div>
    </div>

</x-print>
