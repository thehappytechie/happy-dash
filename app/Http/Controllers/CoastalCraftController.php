<?php

namespace App\Http\Controllers;

use App\Models\CoastalCraft;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CoastalCraftController extends Controller
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
        return view('coastal-watercraft.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coastalCraft = new CoastalCraft();
        $data = $this->doValidation($request, $coastalCraft);
        $coastalCraft->fill($data);
        $coastalCraft->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('coastalWatercraft');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CoastalCraft  $coastalCraft
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coastalCraft = CoastalCraft::findOrFail($id);
        return view('coastal-watercraft.show', compact('coastalCraft'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoastalCraft  $coastalCraft
     * @return \Illuminate\Http\Response
     */
    public function edit(CoastalCraft $coastalCraft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoastalCraft  $coastalCraft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoastalCraft $coastalCraft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoastalCraft  $coastalCraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoastalCraft $coastalCraft)
    {
        //
    }
    public function doValidation($request, Coastalcraft $coastalCraft)
    {
        return $request->validate(
            [
                'imo_number' =>  [($coastalCraft->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($coastalCraft->id)],
                'signal_letter' =>  [($coastalCraft->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($coastalCraft->id)],
                'official_number' =>  [($coastalCraft->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($coastalCraft->id)],
                'craft_name' => [($coastalCraft->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($coastalCraft->id)],
                'registry_port' => [($coastalCraft->id) ? "sometimes" : "required", "string"],
                'register_tonnage' => [($coastalCraft->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($coastalCraft->id) ? "sometimes" : "required", "string"],
                'port_name' => [($coastalCraft->id) ? "sometimes" : "required", "string"],
                'owner' => [($coastalCraft->id) ? "sometimes" : "required", "string"],
                'owner_address' => [($coastalCraft->id) ? "sometimes" : "required", "string"],
            ],
        );
    }

}
