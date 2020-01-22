<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function saludo1(){
    	//echo "Hola!!";
    	return view ("enlaces");
    }
    
    public function nombre($nombre){
    	return view('saludo',['nombre' => $nombre]);
    }
    
}
