<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class PageController extends Controller
{
    public function myActivity()
    {
        $activity = Activity::where('causer_id', Auth::user()->id)->get();
        return view('pages.my-activity', compact('activity'));
    }
}
