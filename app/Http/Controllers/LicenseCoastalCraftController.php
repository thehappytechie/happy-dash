<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\LicenseCoastalCraft;

class LicenseCoastalCraftController extends Controller
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
        return view('inland-coastal-watercraft.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $licenseCoastalCraft = new LicenseCoastalCraft();
        $data = $this->doValidation($request, $licenseCoastalCraft);
        $licenseCoastalCraft->fill($data);
        $licenseCoastalCraft->save();
        session()->flash('success', 'License added successfully.');
        return redirect()->route('licenseCoastalCraft');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenseCoastalCraft  $licenseCoastalCraft
     * @return \Illuminate\Http\Response
     */
    public function show(LicenseCoastalCraft $licenseCoastalCraft)
    {
        return view ('inland-coastal-watercraft.show',compact('licenseCoastalCraft'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenseCoastalCraft  $licenseCoastalCraft
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenseCoastalCraft $licenseCoastalCraft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LicenseCoastalCraft  $licenseCoastalCraft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LicenseCoastalCraft $licenseCoastalCraft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenseCoastalCraft  $licenseCoastalCraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenseCoastalCraft $licenseCoastalCraft)
    {
        //
    }


    public function doValidation($request, LicenseCoastalCraft $inlandWatercraftLicense)
    {
        
        return $request->validate(
            [
                'imo_number' =>  [($inlandWatercraftLicense->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($inlandWatercraftLicense->id)],
                'signal_letter' =>  [($inlandWatercraftLicense->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($inlandWatercraftLicense->id)],
                'official_number' =>  [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($inlandWatercraftLicense->id)],
                'craft_name' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($inlandWatercraftLicense->id)],
                'port_registry' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'craft_type' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'no_persons' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'engine_speed' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'engine_desc' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'maker_address_name' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'engine_total' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'where_built' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'maker_builder_name' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'year_built' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'power' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'length' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'breadth' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'depth' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'net_tonnage' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'gross_tonnage' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'operator_name' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'certificate_no' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'address_owner_name' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
