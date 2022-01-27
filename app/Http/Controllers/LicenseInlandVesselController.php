<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\LicenseInlandVessel;

class LicenseInlandVesselController extends Controller
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
        return view('inland-watervessel-license.create');
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
     * @param  \App\Models\LicenseInlandVessel  $licenseInlandVessel
     * @return \Illuminate\Http\Response
     */
    public function show(LicenseInlandVessel $licenseInlandVessel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenseInlandVessel  $licenseInlandVessel
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenseInlandVessel $licenseInlandVessel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LicenseInlandVessel  $licenseInlandVessel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LicenseInlandVessel $licenseInlandVessel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenseInlandVessel  $licenseInlandVessel
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenseInlandVessel $licenseInlandVessel)
    {
        //
    }

    public function doValidation($request, LicenseInlandVessel $licenseInlandVessel)
    {
        return $request->validate(
            [
                'imo_number' =>  [($licenseInlandVessel->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($licenseInlandVessel->id)],
                'signal_letter' =>  [($licenseInlandVessel->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($licenseInlandVessel->id)],
                'official_number' =>  [($licenseInlandVessel->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($licenseInlandVessel->id)],
                'ship_name' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($licenseInlandVessel->id)],
                'port_registry' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'prev_port_registry' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'where_built' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'when_built' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'name_address_builders' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'decks' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'masts' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'rigged' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'stern' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'build' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'vessel_desc' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'bulkheads' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'overall_length' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'breadth_mould' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'depth_mould' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'engine_length' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'no_engines' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'no_shafts' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'desc_engine' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'engine_make' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'engine_name_address_maker' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'cylinder_set' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'cylinder_diameter' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'cylinder_no' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'stroke_length' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'nhp' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'bhp' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'ihp' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'ship_speed' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'gross_tonn' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'register_tonn' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'gross_ton_cubic' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'register_ton_cubic' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'registry_port' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'number_seafarers' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'captain' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'competency' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'name_residence_owners' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'sixty_four_shares' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'location' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($licenseInlandVessel->id) ? "sometimes" : "required", "date"],
                'number_passengers' => [($licenseInlandVessel->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
