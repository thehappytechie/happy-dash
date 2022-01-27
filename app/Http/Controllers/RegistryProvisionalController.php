<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\RegistryProvisional;

class RegistryProvisionalController extends Controller
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
        return view('registry-provisional.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registryProvisional = new RegistryProvisional();
        $data = $this->doValidation($request, $registryProvisional);
        $registryProvisional->fill($data);
        $registryProvisional->save();
        session()->flash('success', 'Certificate added successfully.');
        return redirect()->route('certificateRegistryProvisional');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistryProvisional  $registryProvisional
     * @return \Illuminate\Http\Response
     */
    public function show(RegistryProvisional $registryProvisional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistryProvisional  $registryProvisional
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistryProvisional $registryProvisional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistryProvisional  $registryProvisional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistryProvisional $registryProvisional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistryProvisional  $registryProvisional
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistryProvisional $registryProvisional)
    {
        //
    }

    public function doValidation($request, RegistryProvisional $registryProvisional)
    {
        return $request->validate(
            [
                'imo_number' =>  [($registryProvisional->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($registryProvisional->id)],
                'signal_letter' =>  [($registryProvisional->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($registryProvisional->id)],
                'official_number' =>  [($registryProvisional->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($registryProvisional->id)],
                'ship_name' => [($registryProvisional->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($registryProvisional->id)],
                'port_registry' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'prev_port_registry' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'where_built' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'when_built' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'name_address_builders' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'decks' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'masts' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'rigged' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'stem' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'stern' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'build' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'vessel_desc' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'bulkheads' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'overall_length' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'breadth_mould' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'depth_mould' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'engine_length' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'no_engines' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'no_shafts' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'desc_engine' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'engine_make' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'engine_name_address_maker' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'cylinder_set' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'cylinder_diameter' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'cylinder_no' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'stroke_length' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'nhp' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'bhp' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'ihp' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'ship_speed' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'gross_tonn' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'register_tonn' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'gross_ton_cubic' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'register_ton_cubic' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'registry_port' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'number_seafarers' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'captain' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'competency' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'name_residence_owners' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'sixty_four_shares' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'location' => [($registryProvisional->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($registryProvisional->id) ? "sometimes" : "required", "date"],
            ],
        );
    }
}
