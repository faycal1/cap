<?php

namespace App\Services;


use Request ;

class Validation
{
    protected $count  ;

    public function ArrayValidation($attribute, $type, $parameters, $validator)
    {
        dd( $parameters) ;           
        return false;
    }
}
