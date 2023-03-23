<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($page,$type)
    {
      

        return view('welcome', ['pages' => $page,'type'=>$type]);
    }


    public function version2($page,$type,$medida)
    {
      

        return view('version2', ['pages' => $page,'type'=>$type,"medida"=>$medida]);
    }


    public function conviertepdf(){



            $pdf_content=$_REQUEST['pdf'];

            



           
            $pdf_decoded = base64_decode ($pdf_content);
            //Write data back to pdf file
            $pdf = fopen ('test.pdf','w');
            fwrite ($pdf,$pdf_decoded);
            //close output file
            fclose ($pdf);
            



    }
}
