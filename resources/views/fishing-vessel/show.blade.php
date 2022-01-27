@section('title', 'Print Form')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('registerShip') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>DECLARATION OF OWNERSHIP ON BEHALF OF SHIPS
            A BODY CORPORATE
        </x-print-logo>
        <div class="margin-top-xl">
            <p class="line-height-md">
                THE REGISTRAR OF GHANAIAN SHIPS, <br>GHANA MARITIME AUTHORITY, <br>
                P.O. BOX 194, <br> TAKORADI.</p>
        </div>

        <div class="margin-top-xxl">
            <p>We ________________________ having our
                principal place of business at ______________________________
                hereby appoint___________________________</p>
            <p class="line-height-md margin-top-xl"> Public Officer of the Company/Corporation and authorize him to make
                and sign applications for Registry
                and all Declarations of Ownership or otherwise for and on behalf of our said Company/ Corporation as
                required under the provisions of the Ghana Shipping Act. 2003. Act 645 Sect. 4</p>
        </div>

        <div class="margin-top-xl">
            <p> The common Seal of the_______________________ was</p>
            <p class="margin-top-md">affixed hereto the</p>
            <p class="margin-top-md">day of , 20</p>
            <p class="margin-top-md">in presence of </p>
        </div>
    </div>

</x-print>
