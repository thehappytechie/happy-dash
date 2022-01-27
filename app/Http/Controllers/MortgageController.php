<?php

namespace App\Http\Controllers;

use App\Models\Mortgage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MortgageController extends Controller
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
        return view('mortgage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mortgage = new Mortgage();
        $data = $this->doValidation($request, $mortgage);
        $mortgage->fill($data);
        $mortgage->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('mortgage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function show(Mortgage $mortgage)
    {
     return view('mortgage.show',compact('mortgage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function edit(Mortgage $mortgage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mortgage $mortgage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mortgage  $mortgage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mortgage $mortgage)
    {
        //
    }

    public function doValidation($request, Mortgage $mortgage)
    {
        return $request->validate(
            [
                'imo_number' =>  [($mortgage->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($mortgage->id)],
                'signal_letter' =>  [($mortgage->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($mortgage->id)],
                'official_number' =>  [($mortgage->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($mortgage->id)],
                'ship_name' => [($mortgage->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($mortgage->id)],
                'registry_port' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'steam_motor_ship' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'horse_power_engine' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'length_forepart' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'breadth' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'depth' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'gross_ton' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'register_ton' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'common_seal' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'amount_considered' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'company' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'company_pronoun' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'company_rate' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'rate_date' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'rate_issue_date' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'rate_final_date' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'shares' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'incumberance' => [($mortgage->id) ? "sometimes" : "required", "string"],
                'seal_date' => [($mortgage->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
