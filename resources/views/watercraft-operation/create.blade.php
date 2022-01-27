@section('title', 'Create Certificate')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Certificate of Deletion</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('certificate-deletion.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('certificateDeletion') }}">Go to certificates</a>
                        <div>
                            <span class="badge badge--warning-light text-sm"><strong>Ship Information</strong></span>
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ship name">Name of ship</label>
                            <input class="form-control width-100% @error('ship_name') is-error @enderror" type="text"
                                name="ship_name" id="ship_name" value="{{ old('ship_name') }}">
                            @error('ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="official number">Official number</label>
                            <input class="form-control width-100%  @error('official_number') is-error @enderror"
                                type="text" name="official_number" id="official_number"
                                value="{{ old('official_number') }}">
                            @error('official_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="signal letters">Signal letters</label>
                            <input class="form-control width-100%  @error('signal_letters') is-error @enderror"
                                type="text" name="signal_letters" id="signal_letters">
                            @error('signal_letters')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="imo number">IMO number</label>
                            <input class="form-control width-100%  @error('imo_number') is-error @enderror" type="text"
                                name="imo_number" id="imo_number">
                            @error('imo_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="type">Type</label>
                            <input class="form-control width-100%  @error('type') is-error @enderror" type="text"
                                name="type" value="{{ old('type') }}" id="type">
                            @error('type')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port registry">Port of registry</label>
                            <input class="form-control width-100%  @error('port_registry') is-error @enderror"
                                type="text" name="port_registry" id="port_registry" value="{{ old('port_registry') }}">
                            @error('port_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross ton">Gross register tonnage</label>
                            <input class="form-control width-100%  @error('gross_ton') is-error @enderror" type="text"
                                name="gross_ton" id="gross_ton" value="{{ old('gross_ton') }}">
                            @error('gross_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="net_ton">Net register tonnage</label>
                            <input class="form-control width-100%  @error('net_ton') is-error @enderror" type="text"
                                name="net_ton" id="net_ton" value="{{ old('net_ton') }}">
                            @error('net_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross ton">Gross register tonnage</label>
                            <input class="form-control width-100%  @error('gross_ton') is-error @enderror" type="text"
                                name="gross_ton" id="gross_ton" value="{{ old('gross_ton') }}">
                            @error('gross_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="net_ton">Net register tonnage</label>
                            <input class="form-control width-100%  @error('net_ton') is-error @enderror" type="text"
                                name="net_ton" id="net_ton" value="{{ old('net_ton') }}">
                            @error('net_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-8@md">
                            <label class="form-label margin-bottom-xxs" for="registered owner">Registered owner</label>
                            <input class="form-control width-100%  @error('registered_owner') is-error @enderror"
                                type="text" name="registered_owner" id="registered_owner"
                                value="{{ old('registered_owner') }}">
                            @error('registered_owner')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="dated_at">Date deleted</label>
                            <input class="form-control width-100%  @error('dated_at') is-error @enderror" type="date"
                                name="dated_at" id="dated_at" value="{{ old('dated_at') }}">
                            @error('dated_at')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="sale transfer">On sale/transfer to</label>
                            <input class="form-control width-100%  @error('sale_transfer') is-error @enderror"
                                type="text" name="sale_transfer" id="sale_transfer" value="{{ old('sale_transfer') }}">
                            @error('sale_transfer')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="encumberance">Encumberance</label>
                            <input class="form-control width-100%  @error('encumberance') is-error @enderror"
                                type="text" name="encumberance" id="encumberance" value="{{ old('encumberance') }}">
                            @error('encumberance')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add Certificate </x-submit-button>
            </form>
        </div>
    </div>

</x-layout>
