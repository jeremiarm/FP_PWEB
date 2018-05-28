<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = ['id', 'soal', 'creator_username','choice1','choice1','choice2','choice3','choice4','correct_answer','explanation',];
    protected $hidden = [
        'explanation','correct_answer',
    ];
    //public $incrementing=true;
}

