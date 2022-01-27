<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\RegistryFishingVessel;

class RegistryFishingVesselController extends Controller
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
        return view('registry-fishing-vessel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registryFishingVessel = new RegistryFishingVessel();
        $data = $this->doValidation($request, $registryFishingVessel);
        $registryFishingVessel->fill($data);
        $registryFishingVessel->save();
        session()->flash('success', 'Certificate added successfully.');
        return redirect()->route('certificateRegistryFishingVessel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistryFishingVessel  $registryFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registryFishingVessel = RegistryFishingVessel::findOrFail($id);
        return view('registry-fishing-vessel.show', compact('registryFishingVessel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistryFishingVessel  $registryFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistryFishingVessel $registryFishingVessel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistryFishingVessel  $registryFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistryFishingVessel $registryFishingVessel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistryFishingVessel  $registryFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistryFishingVessel $registryFishingVessel)
    {
        //
    }

    public function doValidation($request, RegistryFishingVessel $registryFishingVessel)
    {
        return $request->validate(
            [
                'imo_number' =>  [($registryFishingVessel->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($registryFishingVessel->id)],
                'signal_letter' =>  [($registryFishingVessel->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($registryFishingVessel->id)],
                'official_number' =>  [($registryFishingVessel->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($registryFishingVessel->id)],
                'ship_name' => [($registryFishingVessel->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($registryFishingVessel->id)],
                'port_registry' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'prev_port_registry' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'where_built' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'when_built' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'name_address_builders' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'decks' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'masts' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'rigged' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'stem' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'stern' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'build' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'vessel_desc' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'bulkheads' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'overall_length' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'breadth_mould' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'depth_mould' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'engine_length' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'no_engines' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'no_shafts' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'desc_engine' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'engine_make' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'engine_name_address_maker' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'cylinder_set' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'cylinder_diameter' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'cylinder_no' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'stroke_length' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'nhp' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'bhp' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'ihp' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'ship_speed' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'gross_tonn' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'register_tonn' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'gross_ton_cubic' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'register_ton_cubic' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'registry_port' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'number_seafarers' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'captain' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'competency' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'name_residence_owners' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'sixty_four_shares' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'location' => [($registryFishingVessel->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($registryFishingVessel->id) ? "sometimes" : "required", "date"],
            ],
        );
    }

}
