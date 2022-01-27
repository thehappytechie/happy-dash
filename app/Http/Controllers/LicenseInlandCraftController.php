<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\LicenseInlandCraft;

class LicenseInlandCraftController extends Controller
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
        return view('inland-watercraft-license.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenseInlandCraft  $licenseInlandCraft
     * @return \Illuminate\Http\Response
     */
    public function show(LicenseInlandCraft $licenseInlandCraft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenseInlandCraft  $licenseInlandCraft
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenseInlandCraft $licenseInlandCraft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LicenseInlandCraft  $licenseInlandCraft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LicenseInlandCraft $licenseInlandCraft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenseInlandCraft  $licenseInlandCraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenseInlandCraft $licenseInlandCraft)
    {
        //
    }

    public function doValidation($request, LicenseInlandCraft $licenseInlandCraft)
    {

        return $request->validate(
            [
                'imo_number' =>  [($licenseInlandCraft->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($licenseInlandCraft->id)],
                'signal_letter' =>  [($licenseInlandCraft->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($licenseInlandCraft->id)],
                'official_number' =>  [($licenseInlandCraft->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($licenseInlandCraft->id)],
                'craft_name' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($licenseInlandCraft->id)],
                'port_registry' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'craft_type' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'no_persons' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'engine_speed' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'maker_address_name' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'engine_total' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'where_built' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'maker_builder_name' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'year_built' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'power' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'length' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'breadth' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'depth' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'net_tonnage' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'gross_tonnage' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'operator_name' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'certificate_no' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
                'address_owner_name' => [($licenseInlandCraft->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
