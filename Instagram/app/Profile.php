<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $table = "profile";

    public function user(){
        return $this->belongsTo(User::class);
    }
}
