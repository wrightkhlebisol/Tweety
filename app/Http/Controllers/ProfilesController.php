<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Tweet;

class ProfilesController extends Controller
{
    //
    public function show(User $user)
    {
        return view('profiles.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        // abort_if($user->isNot(current_user()), 404);

        // $this->authorize('edit', $user);

        return view('profiles.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        // dd(request('avatar'));

        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user),
            ],
            'avatar' => ['required'],
            'name' => [
                'string',
                'required',
                'max:255'
            ],
            'email' => [
                'string',
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user),
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:255',
                'confirmed',
            ],
        ]);

        $attributes['avatar'] = request('avatar')->store('avatars');

        $user->update($attributes);

        return redirect($user->profilePath());
    }
}
