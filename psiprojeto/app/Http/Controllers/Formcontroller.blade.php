<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function mostrarform(){
        return view('inicio');
    }
    public function processarForm(Request $request){
        
        return view('inicio'
    );
    }
    

    
}