<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\InternationalCodeLetter;

class InternationalCodeLetterController extends Controller
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
        return view('international-code.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $internationalCodeLetter = new InternationalCodeLetter();
        $data = $this->doValidation($request, $internationalCodeLetter);
        $internationalCodeLetter->fill($data);
        $internationalCodeLetter->save();
        session()->flash('success', 'Form added successfully.');
        return redirect()->route('internationalCode');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InternationalCodeLetter  $internationalCodeLetter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $internationalCodeLetter = InternationalCodeLetter::findOrFail($id);
        return view('international-code.show', compact('internationalCodeLetter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InternationalCodeLetter  $internationalCodeLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(InternationalCodeLetter $internationalCodeLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InternationalCodeLetter  $internationalCodeLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InternationalCodeLetter $internationalCodeLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InternationalCodeLetter  $internationalCodeLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternationalCodeLetter $internationalCodeLetter)
    {
        //
    }

    public function doValidation($request, InternationalCodeLetter $internationalCodeLetter)
    {
        return $request->validate(
            [
                'ship_name' =>  ["required", "string",   Rule::unique(InternationalCodeLetter::class)->ignore($internationalCodeLetter->id)] ,
                'official_number' =>  [($internationalCodeLetter->id) ? "sometimes" : "required", "string", Rule::unique(InternationalCodeLetter::class)->ignore($internationalCodeLetter->id)],
                'signal_letter' =>  [($internationalCodeLetter->id) ? "sometimes" : "nullable", Rule::unique(InternationalCodeLetter::class)->ignore($internationalCodeLetter->id)],
                'imo_number' =>  [($internationalCodeLetter->id) ? "sometimes" : "nullable",  Rule::unique(InternationalCodeLetter::class)->ignore($internationalCodeLetter->id)],
                'registry_port' =>  [($internationalCodeLetter) ? "sometimes" : "required", "string"],
                'net_tonnage' =>  [($internationalCodeLetter->id) ? "sometimes" : "required", "numeric"],
                'name_address_owner' =>  [($internationalCodeLetter->id) ? "sometimes" : "required", "string"],
                'registry_port_location' =>  [($internationalCodeLetter->id) ? "sometimes" : "required", "string"],
                'issue_date' =>  [($internationalCodeLetter->id) ? "sometimes" : "required", "date"],
            ],
        );
    }
}
