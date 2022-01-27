<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\ShipFishingVessel;

class ShipFishingVesselController extends Controller
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
        return view('ship-fishing-vessel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipFishingVessel = new ShipFishingVessel();
        $data = $this->doValidation($request, $shipFishingVessel);
        $shipFishingVessel->fill($data);
        $shipFishingVessel->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('shipFishingVessel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipFishingVessel  $shipFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shipFishingVessel = ShipFishingVessel::findOrFail($id);
        return view('ship-fishing-vessel.show', compact('shipFishingVessel'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipFishingVessel  $shipFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipFishingVessel $shipFishingVessel)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShipFishingVessel  $shipFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipFishingVessel $shipFishingVessel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipFishingVessel  $shipFishingVessel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipFishingVessel $shipFishingVessel)
    {
        //
    }

    public function doValidation($request, ShipFishingVessel $shipFishingVessel)
    {
        return $request->validate(
            [
                'imo_number' =>  [($shipFishingVessel->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($shipFishingVessel->id)],
                'signal_letter' =>  [($shipFishingVessel->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($shipFishingVessel->id)],
                'official_number' =>  [($shipFishingVessel->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($shipFishingVessel->id)],
                'ship_name' => [($shipFishingVessel->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($shipFishingVessel->id)],
                'registry_port' => [($shipFishingVessel->id) ? "sometimes" : "required", "string"],
                'register_tonnage' => [($shipFishingVessel->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($shipFishingVessel->id) ? "sometimes" : "required", "date"],
                'registrar_date' => [($shipFishingVessel->id) ? "sometimes" : "required", "date"],
                'location' => [($shipFishingVessel->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
