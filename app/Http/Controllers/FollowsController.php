<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowsController extends Controller
{
    //
    public function store(Request $request, User $user){
        if( auth()->user() !== $user){
            auth()->user()->follow($user);
        }

        return back();
    }

}
