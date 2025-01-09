@extends('layouts.plantilla')
@section('Navs', 'distribuidora')
@section('contenido')

    <!-- Contenido del servicio de Distribuidora Ferretera
         DISTRIBUIDORA EMANUEL, DEDICADA A LA VENTA DE MATERIALES DE CONTRUCCION AL POR MAYOR Y MENOR, HERRAMIENTAS ELECTRICAS, PINTURAS, EPPS Y TRANSPORTE
        -->
    <div class="relative      min-h-screen flex   flex-col animate__animated animate__zoomIn">
        <div class="relative mt-4 py-10 bg-white">
            <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-6xl">
                <div class="col-12 animate__animated animate__fadeIn">
                    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">
                        Distribuidora Ferretera</h2>
                    <p class="text-center text-gray-700 mb-8">
                        En nuestra distribuidora, ofrecemos una amplia variedad de productos para construcción y
                        remodelación, enfocados en satisfacer tanto a clientes mayoristas como minoristas. Nos esforzamos en
                        brindar materiales de alta calidad y un servicio eficiente para apoyar tus proyectos.
                    </p>

                    <!-- Primera fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-lg text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-gray-800 mb-4">
                                        Materiales de Construcción
                                    </p>
                                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                        <li>Cemento, ladrillos y acero para una construcción duradera.</li>
                                        <li>Materiales de calidad para estructuras sólidas y seguras.</li>
                                        <li>Productos para interiores y exteriores, adaptados a tus necesidades.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Materiales de Construcción</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Cemento, ladrillos y acero para una construcción duradera.</li>
                                    <li>Materiales de calidad para estructuras sólidas y seguras.</li>
                                    <li>Productos para interiores y exteriores, adaptados a tus necesidades.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/Ferretera.jpg" alt="Distribuidora de materiales de construcción"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>

                    <!-- Segunda fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Imagen -->
                        <div class="order-1 lg:order-1 flex justify-center">
                            <img src="/img/Publicidad/Ferretera1.jpg" alt="Herramientas eléctricas"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-2 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl shadow-lg text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:hover:scale-105 lg:hover:shadow-2xl lg:block hidden">
                                <p class="text-center">
                                    Contamos con una amplia selección de herramientas eléctricas, ideales para todo tipo de
                                    trabajo, desde proyectos de construcción hasta reparaciones en el hogar. Nuestras
                                    herramientas están diseñadas para ofrecer eficiencia y precisión en cada tarea.
                                </p>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <p class="text-center text-gray-700 px-4 lg:hidden">
                                Contamos con una amplia selección de herramientas eléctricas, ideales para todo tipo de
                                trabajo, desde proyectos de construcción hasta reparaciones en el hogar. Nuestras
                                herramientas están diseñadas para ofrecer eficiencia y precisión en cada tarea.
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
                                    <p class="text-lg font-semibold text-gray-800 mb-4">Servicios Adicionales</p>
                                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                        <li>Entrega a domicilio para mayor comodidad y rapidez.</li>
                                        <li>Asesoría técnica especializada en materiales y herramientas.</li>
                                        <li>Descuentos en compras al por mayor y paquetes promocionales.</li>
                                        <li>Acceso a productos de protección personal (EPP) y pinturas.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Servicios Adicionales</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Entrega a domicilio para mayor comodidad y rapidez.</li>
                                    <li>Asesoría técnica especializada en materiales y herramientas.</li>
                                    <li>Descuentos en compras al por mayor y paquetes promocionales.</li>
                                    <li>Acceso a productos de protección personal (EPP) y pinturas.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex justify-center">
                            <img src="/img/Publicidad/Ferretera2.jpg" alt="Servicios adicionales de la distribuidora"
                                class="w-full rounded-xl shadow-lg transition-transform duration-500 transform group-hover:scale-105 hover:shadow-2xl hover:brightness-110 hover:shadow-[#FFD700]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
