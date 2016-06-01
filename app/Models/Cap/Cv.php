<?php

namespace App\Models\Cap;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = ['name' , 'pername' , 'birthday' , 'phone' , 'adress' , 'diploma' , 'lang' , 'affilation' , 'otheskills' , 'currentsituation' , 'anciente' , 'qualification' , 'expirience' , 'otherinformation' , 'matrix'] ;

    protected $casts = [
        'diploma' => 'array',
        'lang' => 'array',
        'expirience' => 'array',
        'matrix' => 'array',
    ];
}
