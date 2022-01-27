<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\ShipMarkingCarving;

class ShipMarkingCarvingController extends Controller
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
        return view('ship-marking-carving.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipMarkingCarving = new ShipMarkingCarving();
        $data = $this->doValidation($request, $shipMarkingCarving);
        $shipMarkingCarving->fill($data);
        $shipMarkingCarving->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('shipMarkingCarving');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShipMarkingCarving  $shipMarkingCarving
     * @return \Illuminate\Http\Response
     */
    public function show(ShipMarkingCarving $shipMarkingCarving)
    {
        return view('ship-marking-carving.show',compact('shipMarkingCarving'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShipMarkingCarving  $shipMarkingCarving
     * @return \Illuminate\Http\Response
     */
    public function edit(ShipMarkingCarving $shipMarkingCarving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShipMarkingCarving  $shipMarkingCarving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShipMarkingCarving $shipMarkingCarving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShipMarkingCarving  $shipMarkingCarving
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShipMarkingCarving $shipMarkingCarving)
    {
        //
    }

    public function doValidation($request, ShipMarkingCarving $shipMarkingCarving)
    {
        return $request->validate(
            [
                'imo_number' =>  [($shipMarkingCarving->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($shipMarkingCarving->id)],
                'signal_letter' =>  [($shipMarkingCarving->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($shipMarkingCarving->id)],
                'official_number' =>  [($shipMarkingCarving->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($shipMarkingCarving->id)],
                'ship_name' => [($shipMarkingCarving->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($shipMarkingCarving->id)],
                'registry_port' => [($shipMarkingCarving->id) ? "sometimes" : "required", "string"],
                'register_tonnage' => [($shipMarkingCarving->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($shipMarkingCarving->id) ? "sometimes" : "required", "date"],
                'registrar_date' => [($shipMarkingCarving->id) ? "sometimes" : "required", "date"],
                'location' => [($shipMarkingCarving->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
