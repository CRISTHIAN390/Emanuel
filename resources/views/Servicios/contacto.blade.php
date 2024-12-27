@extends('layouts.plantilla')

@section('Navs', 'Contacto')

@section('contenido')

    <!-- Formulario de contacto -->
    <div class="relative min-h-screen flex items-center justify-center animate__animated animate__zoomIn"
        style="background-image: url('/img/Publicidad/contacto2.jpg'); background-size: cover; background-position: center;">
        <div
            class="bg-white rounded-xl shadow-xl w-full max-w-md md:max-w-lg lg:max-w-3xl mx-4 md:mx-auto border border-gray-200">
            <div class="p-6 md:p-8 lg:p-10">
                <!-- Título -->
                <h2 class="text-2xl md:text-3xl font-bold mb-4 text-[#7b5e2a] text-center uppercase tracking-wide">
                    Consultar
                </h2>
                <form action="{{ route('consultas') }}" method="POST">
                    @csrf
                    <!-- Campo: Nombre -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Nombre:</label>
                        <input type="text" id="name" name="name"
                            class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-200"
                            placeholder="Ingresa tu nombre" required>
                    </div>
                    <!-- Campo: Correo Electrónico -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico:</label>
                        <input type="email" id="email" name="email"
                            class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-200"
                            placeholder="correo@gmail.com" required>
                    </div>
                    <!-- Campo: Mensaje -->
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-medium mb-2">Mensaje:</label>
                        <textarea id="message" name="message"
                            class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-400 focus:ring-2 focus:ring-blue-200"
                            rows="4" placeholder="Escribe tu mensaje aquí" required></textarea>
                    </div>
                    <!-- Contenedor de botones -->
                    <div
                        class="flex flex-col md:flex-row md:justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
                        <!-- Botón de envío -->
                        <button type="submit"
                            class="w-full md:w-auto py-3 px-6 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
                            Consultar
                        </button>

                        <!-- Botón de comprobante de pago -->
                        <a href="#"
                            class="w-full md:w-auto py-3 px-6 bg-gradient-to-r from-gray-500 to-gray-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-gray-600 hover:to-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 text-center">
                            Ver Comprobante
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Notificación -->
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                swal("¡Consulta Enviada!", "{{ session('success') }}", "success");
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                swal("Error", "{{ session('error') }}", "error");
            });
        </script>
    @endif
@endsection
