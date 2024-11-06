@extends('layouts.plantilla')
@section('Navs', 'Servicentro')
@section('contenido')

     <!-- Contenido del servicio de alquiler de complejo deportivo -->

     <div class="relative mt-4 bg-white py-10">
        <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-5xl">
            <div class="col-12 animate__animated animate__fadeIn">
                <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">Servicentro RLG</h2>
                <p class="text-center text-gray-700 mb-8">
                    En nuestro complejo deportivo, brindamos una experiencia única y accesible para deportistas de todas las
                    edades. Ofrecemos instalaciones modernas y seguras, equipadas con la mejor tecnología y diseñadas para
                    crear un ambiente donde los jóvenes y aficionados puedan disfrutar plenamente de sus actividades
                    deportivas favoritas.
                </p>
                <!-- Contenedor adaptable de imagen y texto -->
                <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                    <!-- Texto centrado verticalmente -->
                    <div class="order-2 lg:order-1 flex flex-col items-center justify-center space-y-4">
                        <p class="text-center text-lg font-semibold text-gray-800">
                            Nuestro complejo cuenta con:
                        </p>
                        <ul class="list-disc list-inside text-justify text-gray-700">
                            <li>Cancha de fútbol profesional con césped sintético de alta calidad</li>
                            <li>Zona de entrenamiento con equipos de última generación</li>
                            <li>Espacios para eventos deportivos y actividades grupales</li>
                            <li>Vestuarios y duchas con altos estándares de higiene</li>
                            <li>Seguridad constante para una experiencia segura y confiable</li>
                        </ul>
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
                    <div class="order-2 lg:order-2 flex items-center justify-center mt-6">
                        <p class="text-center p-4 bg-white rounded-xl shadow-lg text-gray-700 transform transition duration-500 hover:scale-105 hover:shadow-2xl">
                            Ofrecemos horarios flexibles, con opciones para uso individual, grupos, y equipos deportivos. Nuestro personal altamente capacitado está siempre disponible para brindarte apoyo y asegurar que disfrutes de una experiencia satisfactoria en nuestras instalaciones.
                            <br><br>
                            Además, contamos con paquetes especiales para eventos, entrenamientos personalizados y descuentos para estudiantes. ¡Explora la libertad de disfrutar de un espacio deportivo de calidad a tu alcance!
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    

@endsection
