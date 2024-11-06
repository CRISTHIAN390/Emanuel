@extends('layouts.plantilla')
@section('Navs', 'Hotel')
@section('contenido')

     <!-- Contenido del servicio de alquiler de complejo deportivo -->

     <div class="relative mt-4 bg-white py-10">
        <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-5xl">
            <div class="col-12 animate__animated animate__fadeIn">
                <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">COMPLEJO
                    DEPORTIVO</h2>
                <p class="text-center text-gray-600 mb-8">
                    Nuestro complejo deportivo cuenta con una amplia selección de equipos y accesorios,
                    lo que lo hace una excelente opción para todos los deportistas, no obstante cuenta con una excelente
                    seguridad y confidencialidad.
                </p>
                <!-- Contenedor adaptable de imagen y texto -->
                <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                <!-- Texto centrado verticalmente -->
                <div class="order-2 lg:order-1 flex items-center justify-center">
                    <p class="text-center p-4 bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                        Nuestro complejo deportivo cuenta con una amplia selección de equipos y accesorios,
                        lo que lo hace una excelente opción para todos los deportistas, no obstante cuenta con una
                        excelente seguridad y confidencialidad.
                        
                    </p>
                </div>
                    <!-- Imagen con Efecto 3D y Brillo -->
                    <div class="order-1 lg:order-2 flex justify-center">
                        <img src="/img/Publicidad/complejo.jpg" alt="Complejo deportivo"
                            class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                    </div>
                </div>
                <!-- Segunda fila de imagen y texto -->
                <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                    <!-- Imagen con Efecto 3D y Brillo -->
                    <div class="order-1 lg:order-1 flex justify-center">
                        <img src="/img/Publicidad/complejo.jpg" alt="Complejo deportivo"
                            class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                    </div>
                <!-- Texto centrado verticalmente -->
                <div class="order-2 lg:order-2 flex items-center justify-center">
                    <p class="text-center p-4 bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                        Nuestro complejo deportivo cuenta con una amplia selección de equipos y accesorios,
                        lo que lo hace una excelente opción para todos los deportistas, no obstante cuenta con una
                        excelente seguridad y confidencialidad.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection
