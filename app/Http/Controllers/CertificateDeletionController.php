<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\CertificateDeletion;

class CertificateDeletionController extends Controller
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
        return view('certificate-deletion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificateDeletion = new CertificateDeletion;
        $data = $this->doValidation($request, $certificateDeletion);
        $certificateDeletion->fill($data);
        $certificateDeletion->save();
        session()->flash('success', 'Certificate added successfully.');
        return redirect()->route('certificateDeletion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificateDeletion  $certificateDeletion
     * @return \Illuminate\Http\Response
     */
    public function show(CertificateDeletion $certificateDeletion)
    {
        return view('certificate-deletion.show', compact('certificateDeletion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificateDeletion  $certificateDeletion
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificateDeletion $certificateDeletion)
    {
        return view('certificate-deletion.edit', compact('certificateDeletion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CertificateDeletion  $certificateDeletion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificateDeletion $certificateDeletion)
    {
        $data = $this->doValidation($request, $certificateDeletion);
        $certificateDeletion->update($data);
        session()->flash('success', 'Certificate added successfully.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificateDeletion  $certificateDeletion
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificateDeletion $certificateDeletion)
    {
        //
    }

    public function doValidation($request, CertificateDeletion $certificateDeletion)
    {
        return $request->validate(
            [
                'ship_name' =>  ["required", "string",   Rule::unique('certificate_deletions')->ignore($certificateDeletion->id)] ,
                'official_number' =>  [($certificateDeletion->id) ? "sometimes" : "required", "string", Rule::unique(CertificateDeletion::class)->ignore($certificateDeletion->id)],
                'signal_letter' =>  [($certificateDeletion->id) ? "sometimes" : "nullable", Rule::unique(CertificateDeletion::class)->ignore($certificateDeletion->id)],
                'imo_number' =>  [($certificateDeletion->id) ? "sometimes" : "nullable",  Rule::unique(CertificateDeletion::class)->ignore($certificateDeletion->id)],
                'type' =>  [($certificateDeletion) ? "sometimes" : "required", "string"],
                'port_registry' =>  [($certificateDeletion) ? "sometimes" : "required", "string"],
                'gross_ton' =>  [($certificateDeletion->id) ? "sometimes" : "required", "numeric"],
                'net_ton' =>  [($certificateDeletion->id) ? "sometimes" : "required", "numeric"],
                'registered_owner' =>  [($certificateDeletion->id) ? "sometimes" : "required", "string"],
                'dated_at' =>  [($certificateDeletion->id) ? "sometimes" : "required", "date"],
                'sale_transfer' =>  [($certificateDeletion->id) ? "sometimes" : "required", "string"],
                'encumberance' =>  [($certificateDeletion->id) ? "sometimes" : "required", "string"],
            ],
        );
    }
}
