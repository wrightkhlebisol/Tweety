<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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

    public function update(Request $request, User $user)
    {
        request()->validate(['username', 'name', 'email', 'password']);
    }
}
