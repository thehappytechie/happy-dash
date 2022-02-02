<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Spatie\Activitylog\Models\Activity;

class ActivityController extends Controller
{
    public function log(Request $request)
    {
        if ($request->ajax()) {
            $users = Activity::all();
            return DataTables::of($users)
                ->editColumn('description', function (Activity $activity) {
                    return '<span class="badge badge--primary-light text-xs">'. $activity->description .'</span>'
                    ;
                })
                ->editColumn('causer_id', function (Activity $activity) {
                    return $activity->subject->name;
                })
                ->editColumn('created_at', function (Activity $activity) {
                    return Carbon::parse($activity->created_at)->format('j M, Y h:iA');
                })
                ->rawColumns(['description'])
                ->make(true);
        }
        return view('pages.activity');
    }
}
