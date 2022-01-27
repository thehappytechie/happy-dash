<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\BillSale;
use App\Models\Mortgage;
use App\Models\CoastalCraft;
use App\Models\RegisterShip;
use Illuminate\Http\Request;
use App\Models\ChangeNameShip;
use App\Models\ShipInlandWater;
use App\Models\InlandWatercraft;
use Yajra\DataTables\DataTables;
use App\Models\CertificateSurvey;
use App\Models\ShipFishingVessel;
use App\Models\OwnershipCorporate;
use App\Models\ShipMarkingCarving;
use App\Models\TranscriptRegister;
use App\Models\CertificateDeletion;
use App\Models\CertificateRegistry;
use App\Models\LicenseCoastalCraft;
use App\Models\RegistryProvisional;
use App\Models\RegistryFishingVessel;
use App\Models\InlandWatercraftLicense;
use App\Models\InternationalCodeLetter;

class DatatableController extends Controller
{
    public function certificateDeletion(Request $request)
    {
        if ($request->ajax()) {
            $certificates = CertificateDeletion::get();
            return DataTables::of($certificates)
                ->addColumn('action', function ($certificate) {
                    return '<a class="btn btn--primary btn--sm" href="certificate-deletion/' .
                        $certificate->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="certificate-deletion/' .
                        $certificate->id .
                        '" title="Print">Print<a>

                        ';
                })
                ->editColumn('ship_name', function ($certificate) {
                    return '<a href="certificate-deletion/' . $certificate->id . '/edit">' . $certificate->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('certificate-deletion.index');
    }

    public function certificateRegistry(Request $request)
    {
        if ($request->ajax()) {
            $certificates = CertificateRegistry::get();
            return DataTables::of($certificates)
                ->addColumn('action', function ($certificate) {
                    return '<a class="btn btn--primary btn--sm" href="registry/' .
                        $certificate->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="registry/' .
                        $certificate->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($certificate) {
                    return '<a href="registry/' . $certificate->id . '/edit">' . $certificate->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('registry.index');
    }

    public function registryFishingVessel(Request $request)
    {
        if ($request->ajax()) {
            $certificates = RegistryFishingVessel::get();
            return DataTables::of($certificates)
                ->addColumn('action', function ($certificate) {
                    return '<a class="btn btn--primary btn--sm" href="registry-fishing-vessel/' .
                        $certificate->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="registry-fishing-vessel/' .
                        $certificate->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($certificate) {
                    return '<a href="registry-fishing-vessel/' . $certificate->id . '/edit">' . $certificate->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('registry-fishing-vessel.index');
    }

    public function certificateRegistryProvisional(Request $request)
    {
        if ($request->ajax()) {
            $certificates = RegistryProvisional::get();
            return DataTables::of($certificates)
                ->addColumn('action', function ($certificate) {
                    return '<a class="btn btn--primary btn--sm" href="registry-provisional/' .
                        $certificate->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="registry-provisional/' .
                        $certificate->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($certificate) {
                    return '<a href="registry/' . $certificate->id . '/edit">' . $certificate->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('registry-provisional.index');
    }

    public function certificateSurvey(Request $request)
    {
        if ($request->ajax()) {
            $certificates = CertificateSurvey::get();
            return DataTables::of($certificates)
                ->addColumn('action', function ($certificate) {
                    return '<a class="btn btn--primary btn--sm" href="survey/' .
                        $certificate->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="survey/' .
                        $certificate->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($certificate) {
                    return '<a href="registry/' . $certificate->id . '/edit">' . $certificate->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('survey.index');
    }

    public function internationalCode(Request $request)
    {
        if ($request->ajax()) {
            $forms = InternationalCodeLetter::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="international-code/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="international-code/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($form) {
                    return '<a href="international-code/' . $form->id . '/edit">' . $form->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('international-code.index');
    }

    public function changeNameShip(Request $request)
    {
        if ($request->ajax()) {
            $forms = ChangeNameShip::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="change-name/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="change-name/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($form) {
                    return '<a href="change-name/' . $form->id . '/edit">' . $form->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('change-name.index');
    }

    public function registerShip(Request $request)
    {
        if ($request->ajax()) {
            $forms = RegisterShip::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="register-ship/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="register-ship/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('company', function ($form) {
                    return '<a href="register-ship/' . $form->id . '/edit">' . $form->company . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['company', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('register-ship.index');
    }

    public function ownershipCorporate(Request $request)
    {
        if ($request->ajax()) {
            $forms = OwnershipCorporate::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="ownership-corporate/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="ownership-corporate/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($form) {
                    return '<a href="ownership-corporate/' . $form->id . '/edit">' . $form->ship_name . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('ownership-corporate.index');
    }

    public function transcriptRegister(Request $request)
    {
        if ($request->ajax()) {
            $forms = TranscriptRegister::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="transcript-register/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="transcript-register/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('company', function ($form) {
                    return '<a href="transcript-register/' . $form->id . '/edit">' . $form->company . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['company', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('transcript-register.index');
    }

    public function billSale(Request $request)
    {
        if ($request->ajax()) {
            $forms = BillSale::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="bill-sale/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="bill-sale/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($form) {
                    return '<a href="bill-sale/' . $form->id . '/edit">' . $form->ship_name . '</a>';
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('bill-sale.index');
    }

    public function mortgage(Request $request)
    {
        if ($request->ajax()) {
            $forms = Mortgage::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="mortgage/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="mortgage/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($form) {
                    return '<a href="mortgage/' . $form->id . '/edit">' . $form->ship_name . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('mortgage.index');
    }

    public function coastalWatercraft(Request $request)
    {
        if ($request->ajax()) {
            $forms = CoastalCraft::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="coastal-watercraft/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="coastal-watercraft/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('craft_name', function ($form) {
                    return '<a href="coastal-watercraft/' . $form->id . '/edit">' . $form->craft_name . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['craft_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('coastal-watercraft.index');
    }

    public function inlandWatercraft(Request $request)
    {
        if ($request->ajax()) {
            $forms = InlandWatercraft::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="inland-watercraft/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="inland-watercraft/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('craft_name', function ($form) {
                    return '<a href="inland-watercraft/' . $form->id . '/edit">' . $form->craft_name . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['craft_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('inland-watercraft.index');
    }

    public function shipFishingVessel(Request $request)
    {
        if ($request->ajax()) {
            $forms = ShipFishingVessel::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="ship-fishing-vessel/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="ship-fishing-vessel/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($form) {
                    return '<a href="ship-fishing-vessel/' . $form->id . '/edit">' . $form->ship_name . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('ship-fishing-vessel.index');
    }

    public function shipInlandWater(Request $request)
    {
        if ($request->ajax()) {
            $forms = ShipInlandWater::get();
            return DataTables::of($forms)
            ->addColumn('action', function ($form) {
                return '<a class="btn btn--primary btn--sm" href="ship-inland-water/' .
                    $form->id .
                    '/edit" title="Edit">Edit<a>
                    <a class="btn btn--subtle btn--sm" href="ship-inland-water/' .
                    $form->id .
                    '" title="Print">Print<a>';
            })
            ->editColumn('ship_name', function ($form) {
                return '<a href="ship-inland-water/' . $form->id . '/edit">' . $form->ship_name . '</a>';
            })
            ->editColumn('issue_date', function ($form) {
                return Carbon::parse($form->issue_date)->toFormattedDateString();
            })
            ->rawColumns(['ship_name', 'action'])
            ->editColumn('id', 'ID: {{ $id }}')
            ->make(true);
        }
        return view('ship-inland-water.index');
    }

    public function shipMarkingCarving(Request $request)
    {
        if ($request->ajax()) {
            $forms = ShipMarkingCarving::get();
            return DataTables::of($forms)
                ->addColumn('action', function ($form) {
                    return '<a class="btn btn--primary btn--sm" href="ship-marking-carving/' .
                        $form->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="ship-marking-carving/' .
                        $form->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('ship_name', function ($form) {
                    return '<a href="ship-marking-carving/' . $form->id . '/edit">' . $form->ship_name . '</a>';
                })
                ->editColumn('issue_date', function ($form) {
                    return Carbon::parse($form->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['ship_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('ship-marking-carving.index');
    }

    public function inlandWatercraftLicense(Request $request)
    {
        if ($request->ajax()) {
            $licenses = InlandWatercraftLicense::get();
            return DataTables::of($licenses)
                ->addColumn('action', function ($license) {
                    return '<a class="btn btn--primary btn--sm" href="inland-watercraft-license/' .
                        $license->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="inland-watercraft-license/' .
                        $license->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('craft_name', function ($license) {
                    return '<a href="inland-watercraft-license/' . $license->id . '/edit">' . $license->craft_name . '</a>';
                })
                ->editColumn('issue_date', function ($license) {
                    return Carbon::parse($license->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['craft_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('inland-watercraft-license.index');
    }


    public function  licenseCoastalCraft(Request $request)
    {
        if ($request->ajax()) {
            $licenses = LicenseCoastalCraft::get();
            return DataTables::of($licenses)
                ->addColumn('action', function ($license) {
                    return '<a class="btn btn--primary btn--sm" href="inland-coastal-watercraft/' .
                        $license->id .
                        '/edit" title="Edit">Edit<a>
                        <a class="btn btn--subtle btn--sm" href="inland-coastal-watercraft/' .
                        $license->id .
                        '" title="Print">Print<a>';
                })
                ->editColumn('craft_name', function ($license) {
                    return '<a href="inland-coastal-watercraft/' . $license->id . '/edit">' . $license->craft_name . '</a>';
                })
                ->editColumn('issue_date', function ($license) {
                    return Carbon::parse($license->issue_date)->toFormattedDateString();
                })
                ->rawColumns(['craft_name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('inland-coastal-watercraft.index');
    }

}
