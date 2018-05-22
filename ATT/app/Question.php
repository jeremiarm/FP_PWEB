<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['id', 'soal', 'creator_username','explanation',];
    protected $hidden = [
        'explanation',
    ];
    //public $incrementing=true;
}

