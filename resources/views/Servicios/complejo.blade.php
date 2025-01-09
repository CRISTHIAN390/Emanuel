@extends('layouts.plantilla')
@section('Navs', 'Complejo')
@section('contenido')
    <!-- Contenido del servicio de alquiler de complejo deportivo -->
    <div class="relative      min-h-screen flex   flex-col animate__animated animate__zoomIn">
        <div class="relative mt-4 py-10 bg-white">
            <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-6xl">
                <div class="col-12 animate__animated animate__fadeIn">
                    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">COMPLEJO
                        DEPORTIVO TRIPLE G</h2>
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
                            <img src="/img/Publicidad/complejo1.jpg" alt="Complejo deportivo"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl   hover:shadow-[#FFD700]">
                        </div>
                    </div>

                    <!-- Segunda fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Imagen -->
                        <div class="order-1 lg:order-1 flex justify-center">
                            <img src="/img/Publicidad/imagencomplejo4.jpeg" alt="Complejo deportivo"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl   hover:shadow-[#FFD700]">
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
                            <img src="/img/Publicidad/imagencomplejo3.jpeg" alt="Ventajas del complejo deportivo"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:shadow-[#F00700]">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col bg-blue-700 p-6 lg:p-10 rounded-lg shadow-lg mt-8">
                    <!-- Contenedor principal -->
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-8 lg:space-y-0 lg:space-x-12">
                      <!-- Información de reserva -->
                      <div class="flex-1 space-y-4 ">
                        <h3 class="text-2xl font-bold text-yellow-200  ">Datos del Complejo Deportivo Triple G</h3>
                        <p class="text-base text-white">Teléfono: +51 949 931 907</p>
                        <p class="text-base text-white">Ubicación: Trujillo, Perú</p>
                        <p class="text-base text-white">
                          Opiniones: 
                          <a href="https://www.google.com/maps/place/?q=place_id:ChIJbe3fGdQXrZERTSaX2GuwWc8" class="text-blue-600 underline">
                            <i><b class="text-white">(Leer las Opiniones)</b></i>
                          </a>
                        </p>
                      </div>
                  
                      <!-- Botón de Google Maps con efecto 3D -->
                      <div class="flex items-center justify-center lg:justify-center lg:flex-shrink-0">
                        <a 
                          href="https://www.google.com/maps/place/?q=place_id:ChIJbe3fGdQXrZERTSaX2GuwWc8" 
                          target="_blank" 
                          rel="nofollow noopener">
                          <img 
                            decoding="async" 
                            loading="lazy" 
                            class="w-48 sm:w-56 lg:w-72 h-auto rounded-xl shadow-md transition-transform duration-300 hover:scale-110 hover:shadow-xl transform hover:rotate-2 hover:translate-y-1" 
                            style="perspective: 1000px; transform-origin: center;" 
                            src="https://portaltrujillo.com/wp-content/uploads/2025/01/google-maps-2961754.webp" 
                            alt="Google Maps Button">
                        </a>
                      </div>
                      
                    </div>
                     
                  
                    <!-- Tabla de horarios -->
                    <div class="mt-6">
                      <h4 class="text-lg lg:text-xl font-bold text-yellow-200   mb-4">Horarios de Atención</h4>
                      <div class="overflow-x-auto">
                        <table class="table-auto w-full border border-gray-300 rounded-lg shadow-sm text-left text-sm lg:text-base">
                          <thead class="bg-gray-200">
                            <tr>
                              <th class="px-4 py-2 text-gray-700 font-semibold">Lunes</th>
                              <th class="px-4 py-2 text-gray-700 font-semibold">Martes</th>
                              <th class="px-4 py-2 text-gray-700 font-semibold">Miércoles</th>
                              <th class="px-4 py-2 text-gray-700 font-semibold">Jueves</th>
                              <th class="px-4 py-2 text-gray-700 font-semibold">Viernes</th>
                              <th class="px-4 py-2 text-gray-700 font-semibold">Sábado</th>
                              <th class="px-4 py-2 text-gray-700 font-semibold">Domingo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="border-t border-gray-300 bg-white">
                              <td class="px-4 py-2 xl:text-md">4:00 pm – 11:00 pm</td>
                              <td class="px-4 py-2 xl:text-md">4:00 pm – 11:00 pm</td>
                              <td class="px-4 py-2 xl:text-md">4:00 pm – 11:00 pm</td>
                              <td class="px-4 py-2 xl:text-md">4:00 pm – 11:00 pm</td>
                              <td class="px-4 py-2 xl:text-md">4:00 pm – 11:00 pm</td>
                              <td class="px-4 py-2 xl:text-md">4:00 pm – 11:00 pm</td>
                              <td class="px-4 py-2 xl:text-md">4:00 pm – 11:00 pm</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
                  
                  
                  
                  
                  
            </div>
        </div>
    </div>
@endsection
