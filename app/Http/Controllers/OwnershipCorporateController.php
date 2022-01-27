<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\OwnershipCorporate;

class OwnershipCorporateController extends Controller
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
        return view('ownership-corporate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ownershipCorporate = new OwnershipCorporate();
        $data = $this->doValidation($request, $ownershipCorporate);
        $ownershipCorporate->fill($data);
        $ownershipCorporate->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('ownershipCorporate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OwnershipCorporate  $ownershipCorporate
     * @return \Illuminate\Http\Response
     */
    public function show(OwnershipCorporate $ownershipCorporate)
    {
        return view('ownership-corporate.show',compact('ownershipCorporate'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OwnershipCorporate  $ownershipCorporate
     * @return \Illuminate\Http\Response
     */
    public function edit(OwnershipCorporate $ownershipCorporate)
    {
        return view('ownership-corporate.show',compact('ownershipCorporate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OwnershipCorporate  $ownershipCorporate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OwnershipCorporate $ownershipCorporate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OwnershipCorporate  $ownershipCorporate
     * @return \Illuminate\Http\Response
     */
    public function destroy(OwnershipCorporate $ownershipCorporate)
    {
        //
    }

    public function doValidation($request, OwnershipCorporate $ownershipCorporate)
    {
        return $request->validate(
            [
                'imo_number' =>  [($ownershipCorporate->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($ownershipCorporate->id)],
                'signal_letter' =>  [($ownershipCorporate->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($ownershipCorporate->id)],
                'official_number' =>  [($ownershipCorporate->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($ownershipCorporate->id)],
                'ship_name' => [($ownershipCorporate->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($ownershipCorporate->id)],
                'port_registry_date' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'engine_power' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'length' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'breadth' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'depth' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'engine_room_length' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'gross_ton' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'register_ton' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'rep_name' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'rep_location' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'company_name' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'registered_location' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'business_location' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'skipper' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'competency' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'owner_shares' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
                'subscriber_date' => [($ownershipCorporate->id) ? "sometimes" : "required", "date"],
                'subscriber_name' => [($ownershipCorporate->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
