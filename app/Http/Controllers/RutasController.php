<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{

    public function NuestroEq()
    {
        return view("CamposNav.NuestroEqm");
    }
    public function Vision()
    {
        return view("CamposNav.Vision");
    }
    public function Responsabilidad()
    {
        return view("CamposNav.rsc");
    }

    //Servicios 
    public function Materiales() {
        return view("Servicios.materiales");
    }

    public function Hotel() {
        return view("Servicios.hotel");
    }

    public function ComplejoDeportivo() {
        return view("Servicios.complejo");
    }

    public function Ferreteria() {
        return view("Servicios.ferreteria");
    }

    public function Servicentro() {
        return view("Servicios.servicentro");
    }

    public function Contacto() {
        return view("Servicios.contacto");
    }
    public function Registro(Request $request) {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string|max:255'
        ]);
        
        return view("Servicios.contacto");
    }

}
