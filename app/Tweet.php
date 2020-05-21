<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Tweet extends Model
{
    //
    public $fillable = ['user_id', 'body'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
