<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\InlandWatercraft;

class InlandWatercraftController extends Controller
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
        return view('inland-watercraft.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inlandWatercraft = new InlandWatercraft();
        $data = $this->doValidation($request, $inlandWatercraft);
        $inlandWatercraft->fill($data);
        $inlandWatercraft->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('inlandWatercraft');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InlandWatercraft  $inlandWatercraft
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inlandWatercraft = InlandWatercraft::findOrFail($id);
        return view('inland-watercraft.show', compact('inlandWatercraft'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InlandWatercraft  $inlandWatercraft
     * @return \Illuminate\Http\Response
     */
    public function edit(InlandWatercraft $inlandWatercraft)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InlandWatercraft  $inlandWatercraft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InlandWatercraft $inlandWatercraft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InlandWatercraft  $inlandWatercraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(InlandWatercraft $inlandWatercraft)
    {
        //
    }

    public function doValidation($request, InlandWatercraft $inlandWatercraft)
    {
        return $request->validate(
            [
                'imo_number' =>  [($inlandWatercraft->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($inlandWatercraft->id)],
                'signal_letter' =>  [($inlandWatercraft->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($inlandWatercraft->id)],
                'official_number' =>  [($inlandWatercraft->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($inlandWatercraft->id)],
                'craft_name' => [($inlandWatercraft->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($inlandWatercraft->id)],
                'registry_port' => [($inlandWatercraft->id) ? "sometimes" : "required", "string"],
                'register_tonnage' => [($inlandWatercraft->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($inlandWatercraft->id) ? "sometimes" : "required", "string"],
                'port_name' => [($inlandWatercraft->id) ? "sometimes" : "required", "string"],
                'owner' => [($inlandWatercraft->id) ? "sometimes" : "required", "string"],
                'owner_address' => [($inlandWatercraft->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
