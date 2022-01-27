<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\InlandWatercraftLicense;

class InlandWatercraftLicenseController extends Controller
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
        return view('inland-watercraft-license.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inlandWatercraftLicense = new InlandWatercraftLicense();
        $data = $this->doValidation($request, $inlandWatercraftLicense);
        $inlandWatercraftLicense->fill($data);
        $inlandWatercraftLicense->save();
        session()->flash('success', 'License added successfully.');
        return redirect()->route('inlandWatercraftLicense');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InlandWatercraftLicense  $inlandWatercraftLicense
     * @return \Illuminate\Http\Response
     */
    public function show(InlandWatercraftLicense $inlandWatercraftLicense)
    {
        return view('inland-watercraft-license.show', compact('inlandWatercraftLicense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InlandWatercraftLicense  $inlandWatercraftLicense
     * @return \Illuminate\Http\Response
     */
    public function edit(InlandWatercraftLicense $inlandWatercraftLicense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InlandWatercraftLicense  $inlandWatercraftLicense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InlandWatercraftLicense $inlandWatercraftLicense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InlandWatercraftLicense  $inlandWatercraftLicense
     * @return \Illuminate\Http\Response
     */
    public function destroy(InlandWatercraftLicense $inlandWatercraftLicense)
    {
        //
    }

    public function doValidation($request, InlandWatercraftLicense $inlandWatercraftLicense)
    {
        return $request->validate(
            [
                'imo_number' =>  [($inlandWatercraftLicense->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'imo_number')->ignore($inlandWatercraftLicense->id)],
                'signal_letter' =>  [($inlandWatercraftLicense->id) ? "sometimes" : "nullable", Rule::unique('certificate_registries', 'signal_letter')->ignore($inlandWatercraftLicense->id)],
                'official_number' =>  [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'official_number')->ignore($inlandWatercraftLicense->id)],
                'craft_name' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string", Rule::unique('certificate_registries', 'ship_name')->ignore($inlandWatercraftLicense->id)],
                'craft_owner' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'location' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'operation_type' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'start_date' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "date"],
                'end_date' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "date"],
                'license_condition' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'issue_date' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "date"],
                'operational_area' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
                'issue_location' => [($inlandWatercraftLicense->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
