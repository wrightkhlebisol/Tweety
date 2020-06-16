<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Tweet;

class ProfilesController extends Controller
{
    //
    public function show(User $user){
        return view('profiles.show', ['user' => $user]);
    }
}
