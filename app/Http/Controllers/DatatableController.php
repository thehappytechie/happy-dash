<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class DatatableController extends Controller
{
    public function roleDatatable(Request $request)
    {
        if ($request->ajax()) {
            $roles = Role::selectRaw('distinct roles.*');
            return DataTables::of($roles)
                ->editColumn('name', function (Role $role) {
                    return '<a href="roles/' . $role->id . '/edit">' .ucfirst($role->name) . '</a>';
                })
                ->addColumn('action', function ($role) {
                    return '<a class="btn btn--subtle btn--sm" href="role/' .
                        $role->id .
                        '/edit" title="Edit">Edit<a> ';
                })
                ->rawColumns(['name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('roles.index');
    }

    public function userDatatable(Request $request)
    {
        if ($request->ajax()) {
            $users = User::with('roles')->selectRaw('distinct users.*');
            return DataTables::of($users)
                ->addColumn('action', function ($user) {
                    return '<a class="btn btn--subtle btn--sm" href="users/' .
                        $user->id .
                        '/edit" title="Edit">Edit<a> ';
                })
                ->addColumn('role', function (User $user) {
                    return $user->roles
                        ->map(function ($role) {
                            return ucfirst($role->name);
                        })
                        ->implode(', ');
                })
                ->editColumn('name', function (User $user) {
                    return '<a href="users/' . $user->id . '/edit">' . $user->name . '</a>';
                })
                ->editColumn('last_login_at', function (User $user) {
                    return Carbon::parse($user->last_login_at)->diffForHumans();
                })
                ->editColumn('last_login_at', function (User $user) {
                    return Carbon::parse($user->last_login_at)->diffForHumans();
                })
                ->rawColumns(['name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('users.index');
    }
}
