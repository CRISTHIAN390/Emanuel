@extends('layouts.plantilla')
@section('Navs', 'Complejo')
@section('contenido')
    <!-- Contenido del servicio de alquiler de complejo deportivo -->
    <div class="relative      min-h-screen flex   flex-col animate__animated animate__zoomIn">
        <div class="relative mt-4 py-10 bg-white">
            <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-6xl">
                <div class="col-12 animate__animated animate__fadeIn">
                    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">COMPLEJO
                        DEPORTIVO</h2>
                    <p class="text-center text-gray-700 mb-8">
                        En nuestro complejo deportivo, brindamos una experiencia única y accesible para deportistas de todas
                        las edades. Ofrecemos instalaciones modernas y seguras, equipadas con la mejor tecnología y
                        diseñadas para crear un ambiente donde los jóvenes y aficionados puedan disfrutar plenamente de sus
                        actividades deportivas favoritas.
                    </p>

                    <!-- Primera fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-lg text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-gray-800 mb-4">Características de nuestro complejo
                                        deportivo</p>
                                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                        <li>Cancha de fútbol profesional con césped sintético</li>
                                        <li>Zona de entrenamiento con equipos modernos</li>
                                        <li>Espacios para eventos y actividades grupales</li>
                                        <li>Vestuarios y duchas higiénicas</li>
                                        <li>Seguridad constante</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Características de nuestro
                                    complejo deportivo</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Cancha de fútbol profesional con césped sintético</li>
                                    <li>Zona de entrenamiento con equipos modernos</li>
                                    <li>Espacios para eventos y actividades grupales</li>
                                    <li>Vestuarios y duchas higiénicas</li>
                                    <li>Seguridad constante</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/complejo.jpg" alt="Complejo deportivo"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>

                    <!-- Segunda fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Imagen -->
                        <div class="order-1 lg:order-1 flex justify-center">
                            <img src="/img/Publicidad/complejo.jpg" alt="Complejo deportivo"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-2 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-lg text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <p class="text-center">
                                    Ofrecemos horarios flexibles y paquetes especiales para eventos y entrenamientos
                                    personalizados.
                                </p>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <p class="text-center text-gray-700 px-4 lg:hidden">
                                Ofrecemos horarios flexibles y paquetes especiales para eventos y entrenamientos
                                personalizados.
                            </p>
                        </div>
                    </div>

                    <!-- Tercera fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-lg text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-gray-800 mb-4">Beneficios de nuestro complejo
                                        deportivo</p>
                                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                        <li>Amplio estacionamiento gratuito</li>
                                        <li>Personal capacitado en primeros auxilios</li>
                                        <li>Accesibilidad para personas con movilidad reducida</li>
                                        <li>Áreas verdes y recreativas</li>
                                        <li>Programas de entrenamiento personalizados</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Beneficios de nuestro complejo
                                    deportivo</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Amplio estacionamiento gratuito</li>
                                    <li>Personal capacitado en primeros auxilios</li>
                                    <li>Accesibilidad para personas con movilidad reducida</li>
                                    <li>Áreas verdes y recreativas</li>
                                    <li>Programas de entrenamiento personalizados</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/complejo.jpg" alt="Ventajas del complejo deportivo"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
