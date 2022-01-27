<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Rules\Password;

class ForcePasswordChangeController extends Controller
{
    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        if ($user->force_password_change === 1) {
            return view('password-change.edit', compact(['user', 'request']));
        } else {
            return redirect('dashboard');
        }
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'password' => ['required', 'string', new Password(), 'confirmed'],
        ]);

        $user = User::find($id);
        if ($request->password) {
            $user->force_password_change = 0;
            $user->password = $request->password;
        }
        $user->save();

        session()->flash('success', 'Password changed successfully.');
        return redirect()->route('dashboard');
    }
}
