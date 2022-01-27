<?php

namespace App\Http\Controllers;

use App\Models\ChangeNameShip;
use Illuminate\Http\Request;

class ChangeNameShipController extends Controller
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
        return view('change-name.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChangeNameShip  $changeNameShip
     * @return \Illuminate\Http\Response
     */
    public function show(ChangeNameShip $changeNameShip)
    {
        return view('change-name.show', compact('changeNameShip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChangeNameShip  $changeNameShip
     * @return \Illuminate\Http\Response
     */
    public function edit(ChangeNameShip $changeNameShip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChangeNameShip  $changeNameShip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChangeNameShip $changeNameShip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChangeNameShip  $changeNameShip
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangeNameShip $changeNameShip)
    {
        //
    }
}
