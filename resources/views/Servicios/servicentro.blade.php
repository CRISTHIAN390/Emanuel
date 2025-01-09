@extends('layouts.plantilla')
@section('Navs', 'servicentro')
@section('contenido')

    <!-- Contenido del servicio de Servicentro
        SERVICENTRO EMANUEL SE DEDICA AL LAVADO, ENGRASE, MANTENIMIENTO DE VEHICULOS DE TRANSPORTE LIVIANOS Y PESADOS.
        -->
    <div class="relative      min-h-screen flex   flex-col animate__animated animate__zoomIn">
        <div class="relative mt-4 py-10 bg-white">
            <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-6xl">
                <div class="col-12 animate__animated animate__fadeIn">
                    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">
                        Servicentro Emanuel</h2>
                    <p class="text-center text-gray-700 mb-8">
                        En Servicentro Emanuel, nos especializamos en el cuidado y mantenimiento de vehículos de transporte,
                        tanto livianos como pesados. Ofrecemos una gama completa de servicios para garantizar que tu
                        vehículo esté siempre en óptimas condiciones.
                    </p>

                    <!-- Primera fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-lg text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-gray-800 mb-4">
                                        Servicios de Lavado
                                    </p>
                                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                        <li>Lavado profundo para vehículos de todos los tamaños.</li>
                                        <li>Eliminación de manchas difíciles y residuos de carretera.</li>
                                        <li>Uso de productos especializados que protegen la pintura y el acabado.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Servicios de Lavado</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Lavado profundo para vehículos de todos los tamaños.</li>
                                    <li>Eliminación de manchas difíciles y residuos de carretera.</li>
                                    <li>Uso de productos especializados que protegen la pintura y el acabado.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/reparacionx.jpg" alt="Servicios de lavado de vehículos"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>

                    <!-- Segunda fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Imagen -->
                        <div class="order-1 lg:order-1 flex justify-center">
                            <img src="/img/Publicidad/reparacionx.jpg" alt="Servicios de engrase"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-2 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-lg text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <p class="text-center">
                                    Servicio de engrase para mantener las piezas móviles de tu vehículo funcionando
                                    suavemente. Utilizamos aceites y lubricantes de alta calidad, específicos para cada tipo
                                    de vehículo, y realizamos una revisión exhaustiva para asegurar que cada componente esté
                                    debidamente engrasado y protegido.
                                </p>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <p class="text-center text-gray-700 px-4 lg:hidden">
                                Servicio de engrase para mantener las piezas móviles de tu vehículo funcionando suavemente.
                                Utilizamos aceites y lubricantes de alta calidad, específicos para cada tipo de vehículo, y
                                realizamos una revisión exhaustiva para asegurar que cada componente esté debidamente
                                engrasado y protegido.
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
                                    <p class="text-lg font-semibold text-gray-800 mb-4">Mantenimiento Preventivo</p>
                                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                        <li>Inspección general de sistemas y componentes clave.</li>
                                        <li>Cambio de aceite y filtros para optimizar el rendimiento.</li>
                                        <li>Revisión de frenos, suspensión y sistema de dirección.</li>
                                        <li>Asesoramiento personalizado para mantener tu vehículo en óptimas condiciones.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Mantenimiento Preventivo</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Inspección general de sistemas y componentes clave.</li>
                                    <li>Cambio de aceite y filtros para optimizar el rendimiento.</li>
                                    <li>Revisión de frenos, suspensión y sistema de dirección.</li>
                                    <li>Asesoramiento personalizado para mantener tu vehículo en óptimas condiciones.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/reparacionx.jpg" alt="Servicios adicionales del servicentro"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
