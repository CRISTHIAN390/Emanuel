<?php

namespace App\Http\Controllers;
use App\Mail\ConsultaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function Contacto() { 
        // Muestra la vista del formulario de contacto
        return view("Servicios.contacto");
    }
    
    public function Registro(Request $request) {   
        // Validación de los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255'
        ]);
        // Verificar mensajes duplicados
        $lastMessage = session('last_message');
        if ($lastMessage && $lastMessage === $request->message) {
            return redirect()->route('consultas')->with('error', 'Ya has enviado un mensaje igual recientemente.');
        }
        session(['last_message' => $request->message]);

        // Preparar los datos del mensaje
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        //Servicio de https://mailtrap.io/inboxes/3266738/messages
    
        //Enviar el correo usando el Mailable
        //Configurar correo destinatatio de la empresa  ,   opcional :to(env('MAIL_TO_ADDRESS'))
        Mail::to('xcrissx12345@gmail.com')->send(new ConsultaMail($details));

        // Redireccionar a la vista con mensaje de éxito
        return redirect()->route('consultas')->with('success', 'El mensaje ha sido enviado con éxito.');
    }
    
    
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
}
