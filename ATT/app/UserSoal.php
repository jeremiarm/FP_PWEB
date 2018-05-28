<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usersoal extends Model
{

    protected $fillable = ['id_soal','id_user',];
    protected $hidden = [
    ];
}

