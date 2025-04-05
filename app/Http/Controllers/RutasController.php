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
        Mail::to('administracion@grupoemanuelrlg.com')->send(new ConsultaMail($details));

        // Redireccionar a la vista con mensaje de éxito
        return redirect()->route('serv_consulta')->with('success', 'El mensaje ha sido enviado con éxito.');
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



    public function Emisoravivo() { 
        return view("Servicios.emisora");
    }

    /**
     * Generar un descuento aleatorio basado en probabilidades
     */
    public function generarDescuento(Request $request)
    {
        // Validar que sea una petición Ajax
        if (!$request->ajax()) {
            abort(403, 'Acceso no permitido');
        }
        // Valores posibles de descuento (escalonados)
        $valoresPosibles = [5, 10, 15, 20, 25, 30, 35, 40];
        
        // Generar un número aleatorio entre 0 y 100 para determinar la probabilidad
        $probabilidad = mt_rand(1, 1000) / 10; // Más preciso que random_int para decimales
        // Aplicar la distribución de probabilidades
        $descuento = $this->calcularDescuentoPorProbabilidad($probabilidad);
        

        // Devolver respuesta JSON
        return response()->json([
            'descuento' => $descuento,
            'mensaje' => '¡Felicidades! Usa este descuento en tu próxima compra',
            'validez' => 'Válido Triple G'
        ]);
    }
    
    /**
     * Calcula el descuento basado en una tabla de probabilidades
     */
    private function calcularDescuentoPorProbabilidad($probabilidad)
    {
        // Distribución de probabilidades: 
        if ($probabilidad < 35) return 5;
        if ($probabilidad < 67) return 10;
        if ($probabilidad < 80) return 15;
        if ($probabilidad < 90) return 20;
        if ($probabilidad < 94) return 25;
        if ($probabilidad < 98) return 30;
        if ($probabilidad < 99.5) return 35;
        return 40; // El más raro
    }
}


