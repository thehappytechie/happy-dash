<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShipInlandWater;
use Illuminate\Validation\Rule;

class ShipInlandWaterController extends Controller
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
        return view('ship-inland-water.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipInlandWater = new ShipInlandWater();
        $data = $this->doValidation($request, $shipInlandWater);
        $shipInlandWater->fill($data);
        $shipInlandWater->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('shipInlandWater');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipInlandWater  $shipInlandWater
     * @return \Illuminate\Http\Response
     */
    public function show(ShipInlandWater $shipInlandWater)
    {
        return view('ship-inland-water.show',compact('shipInlandWater'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipInlandWater  $shipInlandWater
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipInlandWater $shipInlandWater)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShipInlandWater  $shipInlandWater
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipInlandWater $shipInlandWater)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipInlandWater  $shipInlandWater
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipInlandWater $shipInlandWater)
    {
        //
    }

    public function doValidation($request, ShipInlandWater $shipInlandWater)
    {
        return $request->validate(
            [
                'imo_number' =>  [($shipInlandWater->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($shipInlandWater->id)],
                'signal_letter' =>  [($shipInlandWater->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($shipInlandWater->id)],
                'official_number' =>  [($shipInlandWater->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($shipInlandWater->id)],
                'ship_name' => [($shipInlandWater->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($shipInlandWater->id)],
                'registry_port' => [($shipInlandWater->id) ? "sometimes" : "required", "string"],
                'register_tonnage' => [($shipInlandWater->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($shipInlandWater->id) ? "sometimes" : "required", "string"],
                'registrar_date' => [($shipInlandWater->id) ? "sometimes" : "required", "string"],
                'location' => [($shipInlandWater->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
