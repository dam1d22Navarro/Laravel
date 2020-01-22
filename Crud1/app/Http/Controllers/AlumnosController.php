<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function nota($nota){
    	if($nota >= 5){
    		$nota="Apto";
    		
    	}else{
    		$nota="No Apto";
    	}
    	return view('VistaNota',['nota' => $nota]);
    }
}
