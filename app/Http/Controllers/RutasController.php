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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255'
        ]);
        $lastMessage = session('last_message');
        if ($lastMessage && $lastMessage === $request->message) {
            return redirect()->route('consultas')->with('error', 'Ya has enviado un mensaje igual recientemente.');
        }
        session(['last_message' => $request->message]);

        // Enviar al correo electrónico
        



        // Redireccionar a la vista consultas con un mensaje de éxito
        return redirect()->route('consultas')->with('success', 'El mensaje ha sido enviado con éxito');
    }
    

}
