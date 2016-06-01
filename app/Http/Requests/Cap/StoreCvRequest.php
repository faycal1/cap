<?php

namespace App\Http\Requests\Cap;

use App\Http\Requests\Request;

class StoreCvRequest extends Request
{
    // protected $dontFlash = ['diploma'] ;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
           // "name" =>'required',
           // "pername" =>'required',
           // "birthday" =>'required',
           // "phone" =>'required',
           // "adress" =>'required',
           // "affilation" =>'required',
           // "otheskills" =>'required',
           // "currentsituation" =>'required',
           // "anciente" =>'required',
           // "affilation" =>'required',           
           // "otherinformation" =>'required',
        ];

            //'diploma[start]' =>'required',
           //"matrix.*" =>'required'
           //// "expirience.*" =>'required',
           // "lang.s" =>'required',
           

        $diploma = $this->request->get('diploma') ;
        foreach($diploma['start'] as $key => $val)
        {
            $rules['diploma.start.'.$key] = 'required';
        }


          return $rules ;
    }
}
