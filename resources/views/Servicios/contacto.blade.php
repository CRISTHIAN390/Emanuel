@extends('layouts.plantilla')

@section('Navs', 'Contacto')

@section('contenido')
    <!-- Contenido del servicio de Servicios Generales Gabriel & Zareli S.A.C. -->
    <div class="container mx-auto px-4 py-10">
        <!-- Sección de fondo y borde para "Contáctenos" -->
        <div class="bg-gray-100 p-10 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold mb-6 text-[#7b5e2a] text-center">CONTÁCTENOS</h2>
            <p class="text-gray-600 mb-8 text-lg text-center">
                Ubíquenos en nuestras oficinas, escríbanos por WhatsApp, llámenos por teléfono o desde la web.
                Déjenos un mensaje en nuestro formulario y nos pondremos en contacto con Ud.
            </p>

            <!-- Información de contacto -->
            <div class="text-gray-700 text-center mb-6">
                <h3 class="text-2xl font-semibold mb-2 text-[#7b5e2a]">TRUJILLO</h3>
                <p class="mb-1">Avenida Camino Real, Mz32 Lt.2 Trujillo - Perú</p>
                <p class="mb-1">Teléfono: <span class="font-semibold">(+51) --- --- ---</span></p>
                <p>Email: 
                    <a href="mailto:********@grupoemanuelrlg.com" class="text-blue-500 hover:underline">
                        ********@grupoemanuelrlg.com
                    </a>
                </p>
            </div>
        </div>

        <!-- Mapa de Google -->
        <div class="mt-10 mx-auto max-w-4xl rounded-lg overflow-hidden shadow-lg border border-gray-300">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d987.5178488201921!2d-79.00079007153715!3d-8.0942019994938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDUnMzkuMSJTIDc5wrAwMCcwMC41Ilc!5e0!3m2!1ses!2spe!4v1731191722177!5m2!1ses!2spe"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Formulario de contacto -->
        <div class="mt-10 mx-auto max-w-4xl rounded-lg overflow-hidden shadow-lg border border-gray-300" style="background: #ffc400">
            <div class="p-8">
                <h2 class="text-3xl font-bold mb-6 text-[#7b5e2a] text-center">Consultar</h2>
                <form action="{{ route('consultas') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                        <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico:</label>
                        <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Mensaje:</label>
                        <textarea id="message" name="message" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500" rows="4" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="py-3 px-8 bg-gray-800 text-white rounded-lg hover:bg-gray-700 focus:outline-none">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
