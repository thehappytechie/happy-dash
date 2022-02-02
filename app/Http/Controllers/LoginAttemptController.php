<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LoginAttemptController extends Controller
{
    public function loginAttempt(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();
            return DataTables::of($users)
                ->editColumn('lastLoginIp', function (User $user) {
                    return $user->lastLoginIp();
                })
                ->editColumn('lastSuccessfulLoginAt', function (User $user) {
                    return Carbon::parse($user->lastSuccessfulLoginAt())->format('j M, Y h:iA');

                })
                ->editColumn('lastSuccessfulLoginIp', function (User $user) {
                    return ($user->loginSuccessful());
                })
                ->make(true);
        }
        return view('pages.login-attempt');
    }
}
