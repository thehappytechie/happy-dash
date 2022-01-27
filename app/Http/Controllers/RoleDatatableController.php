<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoleDatatableController extends Controller
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
                    return '<a class="btn btn-dark btn-xs" href="role/' .
                        $role->id .
                        '/edit" title="Edit">Edit<a> ';
                })
                ->rawColumns(['name', 'action'])
                ->editColumn('id', 'ID: {{ $id }}')
                ->make(true);
        }
        return view('roles.index');
    }
}
