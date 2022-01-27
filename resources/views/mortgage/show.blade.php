@section('title', 'Print Form')

<x-print>
    <div class="container padding-top-md cta__button-section">
        <a href="{{ route('mortgage') }}" class="padding-right-md">Go back</a>
        <a class="btn btn--primary btn--sm" onclick="window.print()">Print certificate</a>
    </div>

    <div class="grid justify-between width-90% margin-auto margin-y-xl">
        <x-print-logo>MORTGAGE (to Secure Principal Sum and Interest) – Body Corporate
        </x-print-logo>

        <div class="margin-top-lg padding-x-xl">
            <table class="text-xs">
                <tr>
                    <th>Official No.</th>
                    <th>Name of Ship</th>
                    <th>No. Date and Port of Registry</th>
                    <th>Whether a Sailing, Steam or motor ship</th>
                    <th>Horse Power Engine (if any)</th>
                </tr>
                <tr>
                    <td><span>{{ $mortgage->official_number }}</span></td>
                    <td><span>{{ $mortgage->ship_name }}</span></td>
                    <td><span>{{ $mortgage->registry_port }}</span></td>
                    <td><span>{{ $mortgage->steam_motor_ship }}</span></td>
                    <td><span>{{ $mortgage->horse_power_engine }}</span></td>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <ul class="line-height-xl">
                            <li> Length from forepart of stem, to the aft aside the head of the stem post <span>{{
                                    $mortgage->length }}</span></li>
                            <li>Main breadth to outside of plating <span>{{ $mortgage->breadth }}</span></li>
                            <li>Depth in hold from tonnage deck to ceiling amidships <span>{{ $mortgage->depth }}</span>
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
                    <th>Gross tonnage <span>{{ $mortgage->gross_ton }}</span></th>
                    <th>Register tonnage <span>{{ $mortgage->register_ton }}</span></th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th class="text-center font-semibold">And as described in more detail in the Certificate of the
                        surveyor
                        and the Register Book</th>
                </tr>
            </table>
            <table class="text-xs">
                <tr>
                    <th>
                        <p class="line-height-xl margin-top-sm">
                            We, <span>{{ $mortgage->common_seal }}</span> in consideration of <span>{{
                                $mortgage->amount_considered }}</span> this day lent to us by <span>{{
                                $mortgage->company }}</span> do hereby for ourselves and our successors covenant with
                            the said <span>{{ $mortgage->company }}</span> and <span>{{ $mortgage->company_pronoun
                                }}</span> assigns firstly, that we or our successor. Will pay to the said <span>{{
                                $mortgage->company }}</span> the said sum of <span>{{ $mortgage->amount_considered
                                }}</span> Together with interest thereon at the rate of <span>{{ $mortgage->compay_rate
                                }}</span> per cent. Per annum on the <span>{{ $mortgage->rate_date }}</span> next;
                            secondly, that if the said principal sum is not on the said day, we or our successor will,
                            during such time as the same part thereof as may for the time being remains unpaid, pay to
                            the said <span>{{ $mortgage->company }}</span> or assign interest on the whole or such part
                            thereof as may for the time being remain unpaid, at the rate of <span>{{
                                $mortgage->company_rate }}</span> per annum, by equal half-yearly payment on the
                            <span>{{ $mortgage->rate_issue_date }}</span> and <span>{{ $mortgage->rate_final_date
                                }}</span> in every year; and for better securing <span>{{ $mortgage->amount_considered
                                }}</span>the repayment in manner aforesaid of the principal sum and interest we hereby
                            mortgage to the said <span>{{ $mortgage->company }}</span>. <span>{{ $mortgage->shares
                                }}</span> Share, of which we are the owners in ship above particularly described, and in
                            her boats, guns, ammunition, small arms, and appurtenances. Lastly, we for ourselves and our
                            successors covenant with the said <span>{{ $mortgage->company }}</span> and (R)
                            …………………………………………… assigns that’s we have power to mortgage in manner aforesaid the
                            above-mentioned shares, and that the same are free from incumbrances <span>{{
                                $mortgage->incumberance }}</span>
                            In witness whereof we have hereunto affixed our common seal this <span>{{
                                $mortgage->seal_date }}</span>
                            The common Seal of the <span>{{ $mortgage->common_seal }}</span> <br>
                            Was affixed hereunto in the presence of

                        </p>
                    </th>
                </tr>
            </table>
            <div class="margin-y-md text-xs" style="margin-bottom: 150px">
                <ul class="line-height-md">
                    <li class="font-semibold">NOTE</li>
                    <li>(1) The prompt registration of a Mortgage Deed at the Port of Registry of the Ship is essential
                        to the security of Mortgagee, as a Mortgage takes its priority from the date of production for
                        registry, not from the date of instrument.</li>
                    <li>(2) Registered Owners of Mortgages are reminded of the importance of keeping Registrar of
                        Ghanaian Ships informed of any</li>
                    <li>(a) Name in full body corporate together with its principle place of business.</li>
                    <li>(b) Full name, address and description of mortgage. If joint mortgagees are concerned, they must
                        be described. If the mortgages is a body corporate, the full title and address must given.</li>
                    <li>(c) “His” ‘’their’’ or ‘’its’’ (d) Insert the day fixed for the payment of principle as above.
                    </li>
                </ul>
                N.B. – In the case of Transfer it must be made by Endorsement in one of the following forms: -
                </p>
            </div>
            <div style="page-break-before: always;margin-top:-120px">
                <div class="text-xs">
                    <p class="text-center font-bold margin-y-md text-md">TRANSFER OF MORTGAGE-by individuals or Joint
                        Owners
                    </p>
                    <p class="line-height-md">
                        <strong>_________________________</strong> the within-mentioned
                        <strong>__________________________</strong>
                        in consideration of <strong>___________________________</strong> this paid to
                        <strong>________________________</strong> by
                        <strong>___________________________________</strong><br>
                        Hereby transfer to <strong>______________________</strong> the benefit of the within-written
                        security. In witness whereof (a)
                        <strong>__________________</strong> have hereunto subscribed <strong>______________</strong>
                        name <strong>_____________</strong> And affixed (d) <strong>________________</strong> Seal
                        <strong>___________</strong> this
                        <strong>____________</strong> day of <strong>__________</strong> two thousand and
                        <strong>______________</strong> <br>
                        Executed by the above-named <strong>______________________________</strong> <br>
                        In the presence of (e) <strong>_____________________________</strong>
                    </p>
                </div>

                <div class="margin-top-lg text-xs">
                    <p class="text-center font-bold margin-y-md text-md">TRANSFER OF MORTGAGE by Body Corporate </p>
                    <p class="line-height-md">
                        The within-mentioned <strong>______________________________</strong> <br>
                        In consideration of <strong>_______________________________</strong> <br>
                        This day paid to it <strong>________________________________</strong> <br>
                        Hereby transfer to (c) <strong>________________</strong> The benefit of within-written security.
                        In witness whereof we
                        have hereunto affixed our common seal this <strong>__________________</strong>
                        day of <strong>________________</strong> two thousand and <strong>___________</strong> <br>
                        The Common Seal of the <strong>__________________________</strong> <br>
                        Was affixed in the presence of* <br>
                        <strong>________________________________</strong>
                    </p>
                    N.B.- In case a Mortgage is paid off, a Memorandum of its Discharge in one of the following forms
                    must
                    be used:-
                </div>

                <div class="margin-top-lg text-xs">
                    <p class="text-center font-bold margin-y-md text-md">BY INDIVIDUALS OR JOINT OWNERS</p>
                    <p class="line-height-md">
                    <p>
                        Received the sum of <strong>__________________________________________</strong> <br>
                        In discharge of the within-written security. Dated at <strong>________________</strong> this
                        <strong>________________</strong> day
                        of <strong>_____________________</strong>
                        Witness (e) <br>
                        <strong>________________________________________</strong>
                        Of <strong>________________________________________</strong>
                    </p>
                </div>

                <div class="margin-top-lg text-xs">
                    <p class="text-center font-bold margin-y-md text-md">BY BODIES CORPORATE</p>
                    <p class="line-height-md">
                    <p>
                        Received the sum of <strong>_____________________________</strong> <br>
                        In discharge of the within-written security. In witness whereof we have hereunto affixed our
                        common seal this<strong>___________</strong> of <strong>_____________</strong> 20
                        <strong>____________</strong> at <strong>_______________</strong> <br>
                        The Common Seal of the <strong>________________________</strong> <br>
                        Was affixed in the presence of * <br>
                        <strong>____________________________</strong>
                    </p>
                </div>
                <p class="text-sm margin-top-lg">*Signature and description of witness, i.e., Director, Secretary. Etc. (As the case may be)</p>
            </div>
        </div>
    </div>

</x-print>
