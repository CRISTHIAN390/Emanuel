@extends('layouts.plantilla')
@section('Navs', 'Zareli')
@section('contenido')
    <!-- Contenido del servicio de Servicios Generales Gabriel & Zareli S.A.C. -->
    <!--
    Breve descripción: Servicios Generales Gabriel & Zareli S.A.C. se dedica a la venta de materiales de construcción al por mayor y menor.
    También ofrece servicios de transporte y construcción, abarcando una amplia variedad de productos y soluciones para construcción, mantenimiento y más.
    -->
    <div class="relative mt-4 py-10 bg-white">
        <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-6xl">
            <div class="col-12 animate__animated animate__fadeIn">
                <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">SERVICIOS DE GABRIEL Y ZARELI</h2>
                <p class="text-center text-gray-700 mb-8 text-lg">
                    En Servicios Generales Gabriel & Zareli S.A.C., ofrecemos una amplia gama de materiales de construcción de alta calidad, además de servicios especializados en transporte y construcción. Nos enfocamos en proporcionar todo lo necesario para proyectos de construcción, mantenimiento y renovación.
                </p>

                <!-- Primer fila de imagen y texto -->
                <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                    <!-- Texto centrado verticalmente y horizontalmente en tarjeta solo en pantallas grandes -->
                    <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                        <div class="flex items-center justify-center p-6 bg-white rounded-xl shadow-md text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                            <div class="text-center">
                                <p class="text-lg font-semibold text-gray-800 mb-4">Compromiso y Calidad en Cada Proyecto</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Amplia variedad de materiales de calidad para proyectos de cualquier escala.</li>
                                    <li>Asesoría especializada para soluciones adaptadas a tus necesidades y presupuesto.</li>
                                    <li>Productos seguros y duraderos, respaldados por marcas de confianza.</li>
                                    <li>Transporte eficiente para entregas puntuales y en óptimas condiciones.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Texto sin tarjeta en pantallas pequeñas -->
                        <div class="lg:hidden text-gray-700 px-4">
                            <p class="text-center text-lg font-semibold text-gray-800">Compromiso y Calidad en Cada Proyecto</p>
                            <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                <li>Amplia variedad de materiales de calidad para proyectos de cualquier escala.</li>
                                <li>Asesoría especializada para soluciones adaptadas a tus necesidades y presupuesto.</li>
                                <li>Productos seguros y duraderos, respaldados por marcas de confianza.</li>
                                <li>Transporte eficiente para entregas puntuales y en óptimas condiciones.</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Imagen con Efecto 3D y Brillo -->
                    <div class="order-1 lg:order-2 flex justify-center">
                        <img src="/img/Publicidad/imagensarel.jpg" alt="Productos de construcción de Gabriel y Zareli"
                            class="w-full rounded-xl shadow-md transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                    </div>
                </div>

                <!-- Segunda fila de imagen y texto -->
                <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                    <!-- Imagen con Efecto 3D y Brillo -->
                    <div class="order-1 lg:order-1 flex justify-center">
                        <img src="/img/Publicidad/imagensarel.jpg" alt="Servicios adicionales"
                            class="w-full rounded-xl shadow-md transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                    </div>
                    <!-- Texto centrado verticalmente en tarjeta solo en pantallas grandes -->
                    <div class="order-2 lg:order-2 flex items-center justify-center mt-6">
                        <div class="flex items-center justify-center p-6 bg-white rounded-xl shadow-md text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                            <p class="text-center text-gray-700">
                                Además de la venta de materiales de construcción, Gabriel & Zareli ofrece servicios de transporte para el traslado seguro de tus productos hasta el sitio de construcción. Contamos con maquinaria y personal capacitado para realizar labores de carga, descarga y apoyo en la obra, asegurando que cada proyecto se ejecute de manera eficiente.
                            </p>
                        </div>
                        <!-- Texto sin tarjeta en pantallas pequeñas -->
                        <p class="text-center text-gray-700 px-4 lg:hidden">
                            Además de la venta de materiales de construcción, Gabriel & Zareli ofrece servicios de transporte para el traslado seguro de tus productos hasta el sitio de construcción. Contamos con maquinaria y personal capacitado para realizar labores de carga, descarga y apoyo en la obra, asegurando que cada proyecto se ejecute de manera eficiente.
                        </p>
                    </div>
                </div>

                <!-- Tercera fila de imagen y texto -->
                <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                    <!-- Texto centrado verticalmente en tarjeta solo en pantallas grandes -->
                    <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                        <div class="flex items-center justify-center p-6 bg-white rounded-xl shadow-md text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                            <div class="text-center">
                                <p class="text-lg font-semibold text-gray-800 mb-4">Beneficios de trabajar con nosotros</p>
                                <ul class="list-disc list-inside text-justify text-gray-700">
                                    <li>Amplio inventario de materiales de construcción de alta calidad</li>
                                    <li>Transporte seguro y puntual para todos tus pedidos</li>
                                    <li>Asesoría personalizada para seleccionar los productos adecuados</li>
                                    <li>Precios competitivos y opciones de financiamiento</li>
                                    <li>Descuentos exclusivos para clientes frecuentes y grandes volúmenes</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Texto sin tarjeta en pantallas pequeñas -->
                        <div class="lg:hidden text-gray-700 px-4">
                            <p class="text-center text-lg font-semibold text-gray-800">Beneficios de trabajar con nosotros</p>
                            <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                <li>Amplio inventario de materiales de construcción de alta calidad</li>
                                <li>Transporte seguro y puntual para todos tus pedidos</li>
                                <li>Asesoría personalizada para seleccionar los productos adecuados</li>
                                <li>Precios competitivos y opciones de financiamiento</li>
                                <li>Descuentos exclusivos para clientes frecuentes y grandes volúmenes</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Imagen con Efecto 3D y Brillo -->
                    <div class="order-1 lg:order-2 flex justify-center">
                        <img src="/img/Publicidad/imagensarel.jpg" alt="Ventajas de Gabriel y Zareli"
                            class="w-full rounded-xl shadow-md transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
