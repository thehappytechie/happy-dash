@section('title', 'Edit Form')

<x-layout>
    <div class="margin-bottom-md">
        <h1 class="text-lg">Add Bill of Sale</h1>
    </div>
    <div class="grid gap-sm">
        <div class="bg radius-md padding-md shadow-xs col-12">
            <form action="{{ route('bill-sale.store') }}" method="POST" class="margin-x-lg">
                @csrf
                <div class="margin-y-md">
                    <div class="grid gap-lg margin-right-lg">
                        <a href="{{ route('billSale') }}">Go to forms</a>
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
                            <label class="form-label margin-bottom-xxs" for="signal letter">Signal letters</label>
                            <input class="form-control width-100%  @error('signal_letter') is-error @enderror"
                                type="text" name="signal_letter" value="{{ old('signal_letter') }}" id="signal_letter" required>
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
                            <label class="form-label margin-bottom-xxs" for="year port of registry">No. Year and Port of
                                Registry</label>
                            <input class="form-control width-100%  @error('year_port_of_registry') is-error @enderror"
                                type="text" name="year_port_of_registry" value="{{ old('year_port_of_registry') }}"
                                id="type">
                            @error('year_port_of_registry')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="steam motor">Steam or Motor Ship</label>
                            <input class="form-control width-100%  @error('steam_motor') is-error @enderror" type="text"
                                name="steam_motor" id="steam_motor" value="{{ old('steam_motor') }}">
                            @error('steam_motor')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="power engine">Power of Engine</label>
                            <input class="form-control width-100%  @error('power_engine') is-error @enderror"
                                type="text" name="power_engine" id="power_engine" value="{{ old('power_engine') }}">
                            @error('power_engine')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="length">Length from forepart of stem
                                (metres)</label>
                            <input class="form-control width-100%  @error('length') is-error @enderror" type="text"
                                name="length" id="length" value="{{ old('length') }}">
                            @error('length')
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
                            <label class="form-label margin-bottom-xxs" for="breadth">Main breadth to outside of plating
                                (metres)</label>
                            <input class="form-control width-100%  @error('breadth') is-error @enderror" type="text"
                                name="breadth" id="breadth" value="{{ old('breadth') }}">
                            @error('breadth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="depth">Depth in hold from tonnage deck
                                (metres)</label>
                            <input class="form-control width-100%  @error('depth') is-error @enderror" type="text"
                                name="depth" id="depth" value="{{ old('depth') }}">
                            @error('depth')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="register ton">Register tonnage</label>
                            <input class="form-control width-100%  @error('register_ton') is-error @enderror"
                                type="text" name="register_ton" id="register_ton" value="{{ old('register_ton') }}">
                            @error('register_ton')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-divider />
                    <div class="grid gap-lg margin-right-lg">
                        <x-badge>And as described in more detail in the certificate of the surveyor and the register
                            book</x-badge>
                        <p class="text-sm line-height-md" style="text-align:justify">We, <strong>(A) __________</strong> having our principal place of business at
                            <strong>(B) __________</strong> in consideration of the sum of <strong>(C) __________</strong> paid
                            to us by <strong>(D) __________</strong> the receipt whereof is hereby acknowledged,
                            transfer <strong>(E) __________</strong> shares, in the ship above particularly described,
                            and in her boats, guns ammunition, small arms and appurtenances, to the said <strong>(F) __________</strong> Further, we the said <strong>(G) ________</strong> for ourselves and
                            our successors covenant with the said <strong>(H) __________</strong>  and <strong>(I) __________</strong>
                            assigns, that we have power to transfer in manner aforesaid the premises
                            herein before expressed to be transferred, and that the same are free from encumbrances <strong>(J) __________</strong>  In witness whereof we have hereunto affixed our common seal this <strong>(K) _________</strong> The Common Seal of the Transferor <strong>(L) _________</strong></p>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company name main">(A)</label>
                            <input class="form-control width-100%  @error('company_name_main') is-error @enderror"
                                type="text" name="company_name_main" id="company_name_main"
                                value="{{ old('company_name_main') }}">
                            @error('company_name_main')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company location">(B)</label>
                            <input class="form-control width-100%  @error('company_location') is-error @enderror"
                                type="text" name="company_location" id="company_location"
                                value="{{ old('company_location') }}">
                            @error('company_location')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company amount">(C)</label>
                            <input class="form-control width-100%  @error('company_amount') is-error @enderror"
                                type="text" name="company_amount" id="company_amount"
                                value="{{ old('company_amount') }}">
                            @error('company_amount')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company payee main">(D)</label>
                            <input class="form-control width-100%  @error('company_payee_main') is-error @enderror"
                                type="text" name="company_payee_main" id="company_payee_main"
                                value="{{ old('company_payee_main') }}">
                            @error('company_payee_main')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company shares">(E)</label>
                            <input class="form-control width-100%  @error('company_shares') is-error @enderror"
                                type="text" name="company_shares" id="company_shares"
                                value="{{ old('company_shares') }}">
                            @error('company_shares')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company payee other">(F)</label>
                            <input class="form-control width-100%  @error('company_payee_other') is-error @enderror"
                                type="text" name="company_payee_other" id="company_payee_other"
                                value="{{ old('company_payee_other') }}">
                            @error('company_payee_other')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company name other">(G)</label>
                            <input class="form-control width-100%  @error('company_name_other') is-error @enderror"
                                type="text" name="company_name_other" id="company_name_other"
                                value="{{ old('company_name_other') }}">
                            @error('company_name_other')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company payee last">(H)</label>
                            <input class="form-control width-100%  @error('company_payee_last') is-error @enderror"
                                type="text" name="company_payee_last" id="company_payee_last"
                                value="{{ old('company_payee_last') }}">
                            @error('company_payee_last')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company name secondary">(I)</label>
                            <input class="form-control width-100%  @error('company_name_secondary') is-error @enderror"
                                type="text" name="company_name_secondary" id="company_name_secondary"
                                value="{{ old('company_name_secondary') }}">
                            @error('company_name_secondary')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company assigns">(J)</label>
                            <input class="form-control width-100%  @error('company_assigns') is-error @enderror"
                                type="text" name="company_assigns" id="company_assigns"
                                value="{{ old('company_assigns') }}">
                            @error('company_assigns')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="issue_date">(K)</label>
                            <input class="form-control width-100%  @error('issue_date') is-error @enderror"
                                type="date" name="issue_date" id="issue_date"
                                value="{{ old('issue_date') }}">
                            @error('issue_date')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                        <div class="col-4@md">
                            <label class="form-label margin-bottom-xxs" for="company transferer">(L)</label>
                            <input class="form-control width-100%  @error('company_transferer') is-error @enderror"
                                type="text" name="company_transferer" id="company_transferer"
                                value="{{ old('company_transferer') }}">
                            @error('company_transferer')
                            <x-validation-error>{{ $message }}</x-validation-error>
                            @enderror
                        </div>
                    </div>
                    <x-submit-button>Add Form </x-submit-button>
            </form>
        </div>
    </div>
</x-layout>
