<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\TranscriptRegister;

class TranscriptRegisterController extends Controller
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
        return view('transcript-register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transcriptRegister = new TranscriptRegister();
        $data = $this->doValidation($request, $transcriptRegister);
        $transcriptRegister->fill($data);
        $transcriptRegister->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('transcriptRegister');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TranscriptRegister  $transcriptRegister
     * @return \Illuminate\Http\Response
     */
    public function show(TranscriptRegister $transcriptRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TranscriptRegister  $transcriptRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(TranscriptRegister $transcriptRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TranscriptRegister  $transcriptRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TranscriptRegister $transcriptRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TranscriptRegister  $transcriptRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(TranscriptRegister $transcriptRegister)
    {
        //
    }

    public function doValidation($request, TranscriptRegister $transcriptRegister)
    {
        return $request->validate(
            [
                'imo_number' =>  [($transcriptRegister->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($transcriptRegister->id)],
                'signal_letter' =>  [($transcriptRegister->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($transcriptRegister->id)],
                'official_number' =>  [($transcriptRegister->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($transcriptRegister->id)],
                'ship_name' => [($transcriptRegister->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($transcriptRegister->id)],
                'ship_port' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'where_built' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'when_built' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'name_address_builder' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'decks' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'masts' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'rigged' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'stem' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'stern' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'build' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'vessel_desc' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'bulkheads' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'length' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'breadth' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'depth' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'engine_length' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'no_engines' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'no_shafts' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'desc_engine' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'engine_make' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'name_address_maker_engine' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'cylinder_set' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'cylinder_diameter' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'cylinder_no' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'stroke_length' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'nhp' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'bhp' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'ihp' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'ship_speed' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'gross_ton' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'register_ton' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'gross_cubic_ton' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'register_cubic_ton' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'number_seafarers' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'location' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'boiler_desc' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'boiler_no' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'boiler_make' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'boiler_maker_address' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'load_pressure' => [($transcriptRegister->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($transcriptRegister->id) ? "sometimes" : "required", "date"],
            ],
        );
    }
}
