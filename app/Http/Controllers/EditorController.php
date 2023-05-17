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

     public function ok($page,$type,$medida,$lomo)
    {
      
       //return view('ok', ['pages' => $page,'type'=>$type,"medida"=>$medida]);

        return view('ok', ['pages' => $page,'type'=>$type,"medida"=>$medida,"lomo"=>$lomo]);
    }


    public function conviertepdf(){



            $pdf_content=$_REQUEST['pdf'];

            $fecha=date("Ymdhis");


            $micarpeta = "pedidos/ORDEN_12345_$fecha/";
                    if (!file_exists($micarpeta)) {
                        mkdir($micarpeta, 0777, true);
                    }

            

            

           
            $pdf_decoded = base64_decode ($pdf_content);
            //Write data back to pdf file
            $pdf = fopen ("$micarpeta/pages_album_$fecha.pdf",'w');
            fwrite ($pdf,$pdf_decoded);
            //close output file
            fclose ($pdf);
            



    }
}
