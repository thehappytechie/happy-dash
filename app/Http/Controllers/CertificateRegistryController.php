<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\CertificateRegistry;

class CertificateRegistryController extends Controller
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
        return view('registry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registry = new CertificateRegistry();
        $data = $this->doValidation($request, $registry);
        $registry->fill($data);
        $registry->save();
        session()->flash('success', 'Certificate added successfully.');
        return redirect()->route('certificateRegistry');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificateRegistry  $certificateRegistry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificateRegistry = CertificateRegistry::findOrFail($id);
        return view('registry.show', compact('certificateRegistry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificateRegistry  $certificateRegistry
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificateRegistry $certificateRegistry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CertificateRegistry  $certificateRegistry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificateRegistry $certificateRegistry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificateRegistry  $certificateRegistry
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificateRegistry $certificateRegistry)
    {
        //
    }

    public function doValidation($request, CertificateRegistry $certificateRegistry)
    {
        return $request->validate(
            [
                'imo_number' =>  [($certificateRegistry->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($certificateRegistry->id)],
                'signal_letter' =>  [($certificateRegistry->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($certificateRegistry->id)],
                'official_number' =>  [($certificateRegistry->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($certificateRegistry->id)],
                'ship_name' => [($certificateRegistry->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($certificateRegistry->id)],
                'port_registry' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'prev_port_registry' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'where_built' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'when_built' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'name_address_builders' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'decks' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'masts' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'rigged' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'stem' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'stern' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'build' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'vessel_desc' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'bulkheads' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'overall_length' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'breadth_mould' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'depth_mould' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'engine_length' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'no_engines' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'no_shafts' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'desc_engine' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'engine_make' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'engine_name_address_maker' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'cylinder_set' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'cylinder_diameter' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'cylinder_no' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'stroke_length' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'nhp' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'bhp' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'ihp' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'ship_speed' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'gross_tonn' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'register_tonn' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'gross_ton_cubic' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'register_ton_cubic' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'registry_port' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'number_seafarers' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'captain' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'competency' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'name_residence_owners' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'sixty_four_shares' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'location' => [($certificateRegistry->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($certificateRegistry->id) ? "sometimes" : "required", "date"],
            ],
        );
    }
}
