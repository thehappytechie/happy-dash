<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class UserProfileController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        if ($user->isProfileOwner()) {
            return view('profile.edit', compact('user'));
        }
        return redirect('dashboard');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $this->doValidation($request, $user);
        $user->update($data);
        session()->flash('success', 'Your profile has been updated.');


        return redirect()->back();
    }

    public function security()
    {
        return view('profile.security');
    }

    public function changePassword()
    {
        return view('profile.change-password');
    }

    public function doValidation($request, $user)
    {
        return $request->validate([
            'name' => [$user->id ? 'sometimes' : 'required', 'string'],
            'email' => [$user->id ? 'sometimes' : 'required', Rule::unique('users', 'email')->ignore($user->id)],
            'department' => [$user->id ? 'sometimes' : 'string', 'nullable'],
            'title' => [$user->id ? 'sometimes' : 'string', 'nullable'],
            'employee_no' => [$user->id ? 'sometimes' : 'string', 'nullable'],
            'title' => [$user->id ? 'sometimes' : 'string', 'nullable'],
            'location' => [$user->id ? 'sometimes' : 'string', 'nullable', Rule::in(['Accra', 'Takoradi', 'Tema'])],
        ]);
    }
}
