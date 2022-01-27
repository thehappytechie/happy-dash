<?php

namespace App\Http\Controllers;

use App\Models\RegisterShip;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterShipController extends Controller
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
        return view('register-ship.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registerShip = new RegisterShip();
        $data = $this->doValidation($request, $registerShip);
        $registerShip->fill($data);
        $registerShip->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('registerShip');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterShip  $registerShip
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterShip $registerShip)
    {
        return view('register-ship.show', compact('registerShip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterShip  $registerShip
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterShip $registerShip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterShip  $registerShip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterShip $registerShip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterShip  $registerShip
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterShip $registerShip)
    {
        //
    }

    public function doValidation($request, registerShip $registerShip)
    {
        return $request->validate(
            [
                'imo_number' =>  [($registerShip->id) ? "sometimes" : "nullable", Rule::unique(RegisterShip::class)->ignore($registerShip->id)],
                'signal_letter' =>  ["sometimes"],
                'ship_name' =>  [($registerShip->id) ? "sometimes" : "required", "string"],
                'official_number' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'port_registry_date' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'steam_motor' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'engine_power' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'forepart_stem_length' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'main_breadth' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'depth' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'engine_room_length' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'gross_ton' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'register_ton' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'rep_name' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'rep_location' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'main_breadth' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'depth' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'engine_room_length' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'gross_ton' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'register_ton' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'rep_name' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'rep_location' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'company_name' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'registered_location' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'business_location' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'skipper' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'competency' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'owner_shares' => [($registerShip->id) ? "sometimes" : "required", "string"],
                'subscriber_date' => [($registerShip->id) ? "sometimes" : "required", "date"],
                'subscriber_name' => [($registerShip->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
