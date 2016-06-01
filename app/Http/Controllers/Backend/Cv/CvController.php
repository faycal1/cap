<?php

namespace App\Http\Controllers\Backend\Cv;

use Illuminate\Http\Request;
use File ;
use PDF ;
use App\Models\Cap\Cv;
use App\Http\Requests;
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
        $cvs = Cv::paginate(15);
        return view('backend.cv.index' , compact('cvs') );
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
    public function store(Request $request)
    {
        //
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

    public function download($id)
    {      
        $hachPdf =public_path().'/cv/'.md5($id).'.pdf';

        if (!File::exists($hachPdf))
        {
            $this->writePdf($id) ;
        }

        return response()->download($hachPdf );

        // return redirect()->route('admin.cvs')->withFlashDanger("Le Fichier n'existe plus !!! mais vous pouvez le regener");
        
    }

    public function writePdf($id)
    {        
        $hachPdf = md5($id).'.pdf' ;
        $cv = Cv::find($id) ;
         PDF::loadView('frontend.cv.cv' , compact('cv'))->save(public_path().'/cv/'.$hachPdf);   
    }

}
