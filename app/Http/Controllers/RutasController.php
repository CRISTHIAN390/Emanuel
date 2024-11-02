<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    
    public function NuestroEq(){
        return view("CamposNav.NuestroEqm");
    }
    public function Vision(){
        return view("CamposNav.Vision");
    }

    
}
