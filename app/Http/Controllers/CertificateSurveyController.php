<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\CertificateSurvey;

class CertificateSurveyController extends Controller
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
        return view('survey.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificateSurvey = new CertificateSurvey();
        $data = $this->doValidation($request, $certificateSurvey);
        $certificateSurvey->fill($data);
        $certificateSurvey->save();
        session()->flash('success', 'Certificate added successfully.');
        return redirect()->route('certificateSurvey');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificateSurvey  $certificateSurvey
     * @return \Illuminate\Http\Response
     */
    public function show(CertificateSurvey $certificateSurvey)
    {
        return view('survey.show', compact('certificateSurvey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificateSurvey  $certificateSurvey
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificateSurvey $certificateSurvey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CertificateSurvey  $certificateSurvey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificateSurvey $certificateSurvey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificateSurvey  $certificateSurvey
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificateSurvey $certificateSurvey)
    {
        //
    }

    public function doValidation($request, CertificateSurvey $certificateSurvey)
    {
        return $request->validate(
            [
                'imo_number' =>  [($certificateSurvey->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($certificateSurvey->id)],
                'signal_letter' =>  [($certificateSurvey->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($certificateSurvey->id)],
                'official_number' =>  [($certificateSurvey->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($certificateSurvey->id)],
                'ship_name' => [($certificateSurvey->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($certificateSurvey->id)],
                'ship_port' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'where_built' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'when_built' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'name_address_builder' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'decks' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'masts' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'rigged' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'stem' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'stern' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'build' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'vessel_desc' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'bulkheads' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'length' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'breadth' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'depth' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'engine_length' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'no_engines' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'no_shafts' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'desc_engine' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'engine_make' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'name_address_maker_engine' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'cylinder_set' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'cylinder_diameter' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'cylinder_no' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'stroke_length' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'nhp' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'bhp' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'ihp' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'ship_speed' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'gross_ton' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'register_ton' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'gross_cubic_ton' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'register_cubic_ton' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'number_seafarers' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'location' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'boiler_desc' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'boiler_no' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'boiler_make' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'boiler_maker_address' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'load_pressure' => [($certificateSurvey->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($certificateSurvey->id) ? "sometimes" : "required", "date"],
            ],
        );
    }
}
