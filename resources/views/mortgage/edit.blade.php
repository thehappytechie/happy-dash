@section('title', 'Create Form')

<x-layout>
    <div class="margin-bottom-md">
    <h1 class="text-lg">Add Mortgage</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('mortgage.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('mortgage') }}">Go to forms</a>
                        <x-badge>Ship Information</x-badge>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="imo_number">IMO number</label>
                            <input class="form-control width-100% @error('imo_number') is-error @enderror" type="text"
                                name="imo_number" id="imo_number" value="{{ old('imo_number') }}">
                            @error('imo_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="signal letter">Signal letter</label>
                            <input class="form-control width-100%  @error('signal_letter') is-error @enderror"
                                type="text" name="signal_letter" id="signal_letter" required value="{{ old('signal_letter') }}">
                            @error('signal_letter')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="official number">Official Number</label>
                            <input class="form-control width-100%  @error('official_number') is-error @enderror"
                                type="text" name="official_number" id="official_number"
                                value="{{ old('official_number') }}">
                            @error('official_number')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="ship name">Name of ship</label>
                            <input class="form-control width-100%  @error('ship_name') is-error @enderror" type="text"
                                name="ship_name" id="ship_name" value="{{ old('ship_name') }}">
                            @error('ship_name')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="port registry">No. Year and Port of Registry</label>
                            <input class="form-control width-100%  @error('registry_port') is-error @enderror" type="text"
                                name="registry_port" value="{{ old('registry_port') }}" id="registry_port">
                            @error('registry_port')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="steam motor">Steam or Motor Ship</label>
                            <input class="form-control width-100%  @error('steam_motor_ship') is-error @enderror"
                                type="text" name="steam_motor_ship" id="steam_motor_ship" value="{{ old('steam_motor_ship') }}">
                            @error('steam_motor_ship')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="horse power engine">Horse Power of Engines (if any)</label>
                            <input class="form-control width-100%  @error('horse_power_engine') is-error @enderror" type="text"
                                name="horse_power_engine" id="horse_power_engine" value="{{ old('horse_power_engine') }}">
                            @error('horse_power_engine')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="length forepart">Length from forepart of stem (metres)</label>
                            <input class="form-control width-100%  @error('length_forepart') is-error @enderror" type="text"
                                name="length_forepart" id="length_forepart" value="{{ old('length_forepart') }}">
                            @error('length_forepart')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="breadth">Main breadth to outside of plating (metres)</label>
                            <input class="form-control width-100%  @error('breadth') is-error @enderror" type="text"
                                name="breadth" id="breadth" value="{{ old('breadth') }}">
                            @error('breadth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="depth">Depth in hold from tonnage deck (metres)</label>
                            <input class="form-control width-100%  @error('depth') is-error @enderror" type="text"
                                name="depth" id="depth" value="{{ old('depth') }}">
                            @error('depth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="gross ton">Gross tonnage</label>
                            <input class="form-control width-100%  @error('gross_ton') is-error @enderror" type="text"
                                name="gross_ton" id="gross_ton" value="{{ old('gross_ton') }}">
                            @error('gross_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="register ton">Register tonnage</label>
                            <input class="form-control width-100%  @error('register_ton') is-error @enderror" type="text"
                                name="register_ton" id="register_ton" value="{{ old('register_ton') }}">
                            @error('register_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>And as described in more detail in the certificate of the surveyor and the register book</x-badge>
                        <p></p>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="common seal">Company name/common seal (A)(U)</label>
                            <input class="form-control width-100%  @error('common_seal') is-error @enderror" type="text"
                                name="common_seal" id="common_seal" value="{{ old('common_seal') }}">
                            @error('common_seal')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="amount considered">Amount considered (B)(G)(N)</label>
                            <input class="form-control width-100%  @error('amount_considered') is-error @enderror" type="text"
                                name="amount_considered" id="amount_considered" value="{{ old('amount_considered') }}">
                            @error('amount_considered')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company">Company (C)(D)(F)(J)(K)(O)(Q)</label>
                            <input class="form-control width-100%  @error('company') is-error @enderror" type="text"
                                name="company" id="company" value="{{ old('company') }}">
                            @error('company')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company pronoun">Company pronoun (E)</label>
                            <input class="form-control width-100%  @error('company_pronoun') is-error @enderror" type="text"
                                name="company_pronoun" id="company_pronoun" value="{{ old('company_pronoun') }}">
                            @error('company_pronoun')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company rate">Rate (H)(K)</label>
                            <input class="form-control width-100%  @error('company_rate') is-error @enderror" type="text"
                                name="company_rate" id="company_rate" value="{{ old('company_rate') }}">
                            @error('company_rate')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="rate date">Rate date (I)</label>
                            <input class="form-control width-100%  @error('rate_date') is-error @enderror" type="date"
                                name="rate_date" id="rate_date" value="{{ old('rate_date') }}">
                            @error('rate_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="rate issue date">Date (L)</label>
                            <input class="form-control width-100%  @error('rate_issue_date') is-error @enderror" type="date"
                                name="rate_issue_date" id="rate_issue_date" value="{{ old('rate_issue_date') }}">
                            @error('rate_issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="rate final date">Second date of payment (M)</label>
                            <input class="form-control width-100%  @error('rate_final_date') is-error @enderror" type="date"
                                name="rate_final_date" id="rate_final_date" value="{{ old('rate_final_date') }}">
                            @error('rate_final_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div><div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="shares">No. of shares (P)</label>
                            <input class="form-control width-100%  @error('shares') is-error @enderror" type="text"
                                name="shares" id="shares" value="{{ old('shares') }}">
                            @error('shares')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="incumberance">Incumberance (S)</label>
                            <input class="form-control width-100%  @error('incumberance') is-error @enderror" type="text"
                                name="incumberance" id="incumberance" value="{{ old('incumberance') }}">
                            @error('incumberance')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="seal date">Seal date (T)</label>
                            <input class="form-control width-100%  @error('seal_date') is-error @enderror" type="date"
                                name="seal_date" id="seal_date" value="{{ old('seal_date') }}">
                            @error('seal_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add Form </x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
