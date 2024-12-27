@extends('layouts.plantilla')
@section('Navs', 'Hotel')
@section('contenido')
    <div class="relative      min-h-screen flex   flex-col animate__animated animate__zoomIn"
       >

        <div class="relative mt-4 py-10 bg-white">
            <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-6xl">
                <div class="col-12 animate__animated animate__fadeIn">
                    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">Hotel
                        Emanuel</h2>
                    <p class="text-center text-gray-700 mb-8 text-lg">
                        En nuestro hotel, ofrecemos un espacio acogedor y multifuncional para garantizar una estancia
                        placentera. Nos especializamos en el hospedaje cómodo y seguro, así como en la renta de
                        instalaciones para eventos.
                    </p>

                    <!-- Primer fila de imagen y texto -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                        <!-- Texto con tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-md text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-gray-800 mb-4">Servicios de Hospedaje</p>
                                    <ul class="list-disc list-inside text-justify text-gray-700">
                                        <li>Habitaciones equipadas con todas las comodidades.</li>
                                        <li>Wi-Fi gratuito en todas las áreas del hotel.</li>
                                        <li>Atención y recepción disponible las 24 horas.</li>
                                        <li>Estacionamiento privado y seguro para huéspedes.</li>
                                        <li>Servicio de limpieza diaria para un entorno impecable.</li>
                                        <li>Entre otros.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Servicios de Hospedaje</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Habitaciones equipadas con todas las comodidades.</li>
                                    <li>Wi-Fi gratuito en todas las áreas del hotel.</li>
                                    <li>Atención y recepción disponible las 24 horas.</li>
                                    <li>Estacionamiento privado y seguro para huéspedes.</li>
                                    <li>Televisión por cable y acceso a plataformas de streaming.</li>
                                    <li>Servicio de limpieza diaria para un entorno impecable.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen con Efecto 3D y Brillo -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/hotel.jpg" alt="Hotel Emanuel"
                                class="w-full rounded-xl shadow-md transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>

                    <!-- Segunda fila de imagen y texto -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Imagen con Efecto 3D y Brillo -->
                        <div class="order-1 lg:order-1 flex justify-center">
                            <img src="/img/Publicidad/hotel.jpg" alt="Servicios adicionales"
                                class="w-full rounded-xl shadow-md transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>

                        <!-- Texto con tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-2 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-md text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <p class="text-center">
                                    También contamos con instalaciones ideales para la organización de eventos como
                                    conferencias, bodas y celebraciones familiares. Nuestro equipo se encarga de cada
                                    detalle, desde la decoración hasta el servicio de alimentos, para asegurar el éxito de
                                    tu evento.
                                </p>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <p class="text-center text-gray-700 px-4 lg:hidden">
                                También contamos con instalaciones ideales para la organización de eventos como
                                conferencias, bodas y celebraciones familiares. Nuestro equipo se encarga de cada detalle,
                                desde la decoración hasta el servicio de alimentos, para asegurar el éxito de tu evento.
                            </p>
                        </div>
                    </div>

                    <!-- Tercera fila de imagen y texto -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Texto con tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-md text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-gray-800 mb-4">Beneficios de alojarte en nuestro
                                        hotel</p>
                                    <ul class="list-disc list-inside text-justify text-gray-700">
                                        <li>Ubicación estratégica cerca de los principales atractivos.</li>
                                        <li>Ambiente seguro y familiar para una estadía tranquila.</li>
                                        <li>Descuentos para estancias prolongadas y paquetes para eventos.</li>
                                        <li>Estacionamiento gratuito y acceso a servicios adicionales.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Beneficios de alojarte en nuestro
                                    hotel</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Ubicación estratégica cerca de los principales atractivos.</li>
                                    <li>Ambiente seguro y familiar para una estadía tranquila.</li>
                                    <li>Descuentos para estancias prolongadas y paquetes para eventos.</li>
                                    <li>Estacionamiento gratuito y acceso a servicios adicionales.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen con Efecto 3D y Brillo -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/hotel.jpg" alt="Ventajas del hotel"
                                class="w-full rounded-xl shadow-md transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
