<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use Hash ;
use PDF ;
use App\Http\Requests;
use App\Models\Cap\Cv ;
use App\Http\Requests\Cap\StoreCvRequest ;
use App\Http\Controllers\Controller;


class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCvRequest $request)
    {
        $diploma = [] ;
        for ($i=0; $i < count ($request->diploma['start'] ); $i++) {            
           $a = [] ;
           array_push($diploma, [
            'institution'=>$request->diploma['institution'][$i] ,
            'start'=>$request->diploma['start'][$i] ,
            'end'=>$request->diploma['end'][$i]  ,
            'content'=>$request->diploma['content'][$i] 
            ]) ;
        }

        $lang = [] ;
        for ($i=0; $i < count ($request->lang['lang'] ); $i++) {            
           $a = [] ;
           array_push($lang, [
            'lang'=>$request->lang['lang'][$i] ,
            'read'=>$request->lang['r'][$i] ,
            'speak'=>$request->lang['s'][$i],
            'write'=>$request->lang['w'][$i] ]) ;
        }

         $expirience = [] ;
        for ($i=0; $i < count ($request->expirience['start'] ); $i++) {            
           $a = [] ;
           array_push($expirience, [
                   'start'=>$request->expirience['start'][$i] ,
                   'end'=>$request->expirience['end'][$i] ,
                   'location'=>$request->expirience['location'][$i]  ,
                   'company'=>$request->expirience['company'][$i],
                   'position'=>$request->expirience['position'][$i],
                   'denscription'=>$request->expirience['denscription'][$i] ]
            ) ;
        }

        $matrix = [] ;
        for ($i=0; $i < count ($request->matrix['domaine'] ); $i++) {            
           $a = [] ;
           array_push($matrix, [
                   'domaine'=>$request->matrix['domaine'][$i] ,
                   'cadre'=>$request->matrix['cadre'][$i] ,
                   'periode'=>$request->matrix['periode'][$i]  ,
                   'reference'=>$request->matrix['reference'][$i],
                   'apui'=>$request->matrix['apui'][$i],
                   'filieres'=>$request->matrix['filieres'][$i] ,
                   'client'=>$request->matrix['client'][$i] ,
                    ]
            ) ;
        }

      $cv = new Cv ;
      $cv->name = $request->name;
      $cv->pername = $request->pername;
      $cv->birthday = $request->birthday;
      $cv->phone = $request->phone;
      $cv->adress = $request->adress;
      $cv->diploma = $diploma;
      $cv->lang = $lang;
      $cv->affilation = $request->affilation;
      $cv->otheskills = $request->otheskills;
      $cv->currentsituation = $request->currentsituation;
      $cv->anciente = $request->anciente;
      $cv->qualification = $request->qualification;
      $cv->expirience = $expirience;
      $cv->otherinformation = $request->otherinformation;
      $cv->matrix = $matrix;                
      $cv->save();
      $this->writePdf($cv->id) ;
      return redirect()->route('home')->withFlashSuccess("Votre Cv à bien été sauvgardé ");
       
    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function writePdf($id)
    {        
        $hachPdf = md5($id).'.pdf' ;
        $cv = Cv::find($id) ;
         PDF::loadView('frontend.cv.cv' , compact('cv'))->save(public_path().'/cv/'.$hachPdf);   
    }


    public function downloadPdf($hash)
    {      
        $hachPdf =$hash.'.pdf' ;
        return response()->download(public_path().'/cv/'.$hachPdf);
    }
}
