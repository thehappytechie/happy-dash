<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $data = $this->doValidation($request, $user);
        $user->fill($data);
        $user->save();
        $user->roles()->attach($request->roles);
        $request->session()->flash('success', 'User created successfully.');
        return redirect()->route('userDatatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('users.edit', compact(['user', 'roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $this->doValidation($request, $user);
        $user->update($data);
        $user->roles()->attach($request->roles);
        $request->session()->flash('success', 'User updated successfully.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        session()->flash('success', 'User deleted successfully.');
        return redirect()->route('userDatatable');
    }

    public function doValidation($request, $user)
    {
        return $request->validate(
            [
                'name' =>  [($user->id) ? "sometimes" : "required", "string"],
                'email' =>  [($user->id) ? "sometimes" : "required", Rule::unique('users', 'email')->ignore($user->id)],
                'password' =>  [($user->id) ? "sometimes" : new Password(), "confirmed", "nullable"],
                'disable_login' =>  [($user->id) ? "sometimes" :  "boolean", "nullable"],
                'force_password_change' =>  [($user->id) ? "sometimes" : "boolean", "nullable"],
            ],
        );
    }
}
