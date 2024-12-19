@extends('layouts.plantilla')

@section('Navs', 'Contacto')

@section('contenido')
    <!-- Formulario de contacto -->
    <div class="relative min-h-screen flex items-center justify-center animate__animated animate__zoomIn"
        style="background-image: url('/img/Publicidad/contacto.jpg'); background-size: cover; background-position: center;">
        <div class="bg-white rounded-lg shadow-lg max-w-3xl w-full mx-auto border border-gray-300">
            <div class="p-8">
                <h2 class="text-3xl font-bold mb-6 text-[#7b5e2a] text-center">Consultar</h2>
                <form action="{{ route('consultas') }}" method="POST">
                    @csrf
                    <!-- Campo: Nombre -->
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                        <input type="text" id="name" name="name"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500"
                            required>
                    </div>
                    <!-- Campo: Correo Electrónico -->
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Correo electrónico:</label>
                        <input type="email" id="email" name="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500"
                            required>
                    </div>
                    <!-- Campo: Mensaje -->
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Mensaje:</label>
                        <textarea id="message" name="message"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-500" rows="4"
                            required></textarea>
                    </div>
                    <!-- Contenedor de botones -->
                    <div
                        class="flex flex-col md:flex-row md:justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
                        <!-- Botón de envío -->
                        <button type="submit"
                            class="py-3 px-8 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none">
                            Consultar
                        </button>

                        <!-- Botón de comprobante de pago -->
                        <a href="URL_DEL_COMPROBANTE"
                            class="py-3 px-8 bg-gray-500 text-white rounded-lg hover:bg-gray-700 focus:outline-none">
                            Ver comprobante 
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
