<?php

namespace App\Http\Controllers;

use App\Models\BillSale;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BillSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bill-sale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $billSale = new BillSale();
        $data = $this->doValidation($request, $billSale);
        $billSale->fill($data);
        $billSale->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('billSale');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BillSale  $billSale
     * @return \Illuminate\Http\Response
     */
    public function show(BillSale $billSale)
    {
        return view('bill-sale.show',compact('billSale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BillSale  $billSale
     * @return \Illuminate\Http\Response
     */
    public function edit(BillSale $billSale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BillSale  $billSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BillSale $billSale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BillSale  $billSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillSale $billSale)
    {
        //
    }

    public function doValidation($request, BillSale $billSale)
    {
        return $request->validate(
            [
                'imo_number' =>  [($billSale->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($billSale->id)],
                'signal_letter' =>  [($billSale->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($billSale->id)],
                'official_number' =>  [($billSale->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($billSale->id)],
                'ship_name' => [($billSale->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($billSale->id)],
                'year_port_of_registry' => [($billSale->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($billSale->id) ? "sometimes" : "required", "string"],
                'power_engine' => [($billSale->id) ? "sometimes" : "required", "string"],
                'length' => [($billSale->id) ? "sometimes" : "required", "string"],
                'depth' => [($billSale->id) ? "sometimes" : "required", "string"],
                'breadth' => [($billSale->id) ? "sometimes" : "required", "string"],
                'gross_ton' => [($billSale->id) ? "sometimes" : "required", "string"],
                'register_ton' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_name_main' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_location' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_amount' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_payee_main' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_shares' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_payee_other' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_name_other' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_payee_last' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_name_secondary' => [($billSale->id) ? "sometimes" : "required", "string"],
                'company_assigns' => [($billSale->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($billSale->id) ? "sometimes" : "required", "date"],
                'company_transferer' => [($billSale->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
