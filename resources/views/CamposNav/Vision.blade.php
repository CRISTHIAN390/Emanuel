@extends('layouts.plantilla')
@section('Navs', 'Vision')
@section('contenido')

<div class="relative mt-4 bg-white py-10">
    <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-5xl">
        <div class="col-12 animate__animated animate__fadeIn">
            <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">GRUPO EMANUEL</h2>
            <p class="text-center text-gray-600 mb-8" style="font-family: Calibri;text-align: center;">
                Más de 16 años de experiencia proveendo productos para el Sector Construcción, Industrial,
                deportivo y Logístico.
            </p>
            <div class="grid gap-6 md:grid-cols-2 items-center animate__animated animate__fadeInUp">
                <!-- Imágenes -->
                <div class="relative flex justify-center">
                    <img src="/img/carrusel/equipo.jpg" alt="Equipo"
                        class="mx-auto w-72 h-72 rounded-xl shadow-lg transition-transform duration-500 hover:scale-105 hover:rotate-2">
                </div>

                <!-- Contenido de Texto -->
                <div class="space-y-6">
                    <!-- Sobre Nosotros -->
                    <div class="animate__animated animate__fadeInLeft">
                        <h2 class="text-2xl font-bold text-gray-800" style="font-family: Cooper Black">Sobre Nosotros</h2>
                        <p class="text-gray-600 mt-2" style="font-family: Calibri;text-align: justify;">
                            Emanuel R.L.G, es un grupo privado fundado en el año 2008, dedicado a la Gestión
                            ferretera, proyectos y/o formalización de actividades en curso de empresas que operan en
                            diversos sectores productivos a nivel nacional.
                        </p>
                    </div>

                    <!-- Misión -->
                    <div class="animate__animated animate__fadeInLeft">
                        <h2 class="text-2xl font-bold text-gray-800" style="font-family: Cooper Black">Misión</h2>
                        <p class="text-gray-600 mt-2" style="font-family: Calibri;text-align: justify;">
                            Somos un equipo multidisciplinario de especialistas en consultoría ambiental, legal y
                            administrativa, orientados a proporcionar las mejores soluciones integrales a los
                            diversos retos de cada proyecto que emprenden nuestros clientes.
                        </p>
                    </div>

                    <!-- Visión -->
                    <div class="animate__animated animate__fadeInLeft">
                        <h2 class="text-2xl font-bold text-gray-800" style="font-family: Cooper Black">Visión</h2>
                        <p class="text-gray-600 mt-2" style="font-family: Calibri;text-align: justify;">
                            Ser una organización líder en soluciones para sectores clave, comprometida con el
                            desarrollo sostenible y la innovación constante.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Valores -->
    <div class="w-full bg-gradient-to-b from-yellow-500 to-white-200 text-white py-8">
        <h2 class="text-center text-3xl font-bold text-black mb-6" style="font-family: Cooper Black">Nuestros Valores</h2>
        <div class="grid gap-6 md:grid-cols-3 p-2 px-2 max-w-6xl mx-auto">
            <!-- Valor 1 -->
            <div
                class="space-y-2 bg-gray-100 p-4 rounded-lg shadow-lg transition duration-300 animate__animated animate__zoomIn max-w-xs mx-auto border border-gray-100 hover:border-gray-300 hover:shadow-2xl hover:shadow-orange-300/50 relative overflow-hidden group">
                <h3 class="text-lg font-bold text-gray-800" style="font-family: Cooper Black">Integridad</h3>
                <p class="text-gray-700 mt-2 text-justify">
                    Nuestro compromiso es garantizar la calidad y confidencialidad de todos nuestros clientes,
                    logrando que el trabajo realizado sea responsable y ético.
                </p>
                <!-- Efecto de brillo -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-transparent to-white opacity-0 group-hover:opacity-30 transition duration-300 transform translate-x-full group-hover:translate-x-0">
                </div>
            </div>


            <!-- Valor 2 -->
            <div
                class="space-y-2 bg-gray-100 p-4 rounded-lg shadow-lg transition duration-300 animate__animated animate__zoomIn max-w-xs mx-auto border border-gray-100 hover:border-gray-300 hover:shadow-2xl hover:shadow-orange-300/50 relative overflow-hidden group">
                <h3 class="text-lg font-bold text-gray-800" style="font-family: Cooper Black">Compromiso</h3>
                <p class="text-gray-700 mt-2 text-justify">
                    Nuestro compromiso es proporcionar soluciones innovadoras y efectivas para satisfacer las
                    necesidades y expectativas de nuestros clientes.
                </p>
                <!-- Efecto de brillo -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-transparent to-white opacity-0 group-hover:opacity-30 transition duration-300 transform translate-x-full group-hover:translate-x-0">
                </div>
            </div>


            <!-- Valor 3 -->
            <div
                class="space-y-2 bg-gray-100 p-4 rounded-lg shadow-lg transition duration-300 animate__animated animate__zoomIn max-w-xs mx-auto border border-gray-300 hover:border-gray-300 hover:shadow-2xl hover:shadow-orange-300/50 relative overflow-hidden group">
                <h3 class="text-lg font-bold text-gray-800" style="font-family: Cooper Black">Puntualidad</h3>
                <p class="text-gray-700 mt-2 text-justify">
                    Nos esforzamos por entregar soluciones a tiempo, cumpliendo con los plazos establecidos para
                    cada proyecto.
                </p>
                <!-- Efecto de brillo -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-transparent to-white opacity-0 group-hover:opacity-30 transition duration-300 transform translate-x-full group-hover:translate-x-0">
                </div>
            </div>

            <!-- Valor 4 -->
            <div
                class="space-y-2 bg-gray-100 p-4 rounded-lg shadow-lg transition duration-300 animate__animated animate__zoomIn max-w-xs mx-auto border border-gray-300 hover:border-gray-300  hover:shadow-2xl hover:shadow-orange-300/50 relative overflow-hidden group">
                <h3 class="text-lg font-bold text-gray-800" style="font-family: Cooper Black">Solidaridad</h3>
                <p class="text-gray-700 mt-2 text-justify">
                    Apoyamos a nuestras comunidades y promovemos el bienestar social en todas nuestras
                    actividades.
                </p>
                <!-- Efecto de brillo -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-transparent to-white opacity-0 group-hover:opacity-30 transition duration-300 transform translate-x-full group-hover:translate-x-0">
                </div>
            </div>

            <!-- Valor 5 -->
            <div
                class="space-y-2 bg-gray-100 p-4 rounded-lg shadow-lg transition duration-300 animate__animated animate__zoomIn max-w-xs mx-auto border border-gray-300 hover:border-gray-300  hover:shadow-2xl hover:shadow-orange-300/50 relative overflow-hidden group">
                 <h3 class="text-lg font-bold text-gray-800" style="font-family: Cooper Black">Innovación</h3>
                <p class="text-gray-700 mt-2 text-justify">
                    Nos esforzamos por adoptar tecnologías y métodos innovadores para mejorar la calidad de
                    nuestros servicios.
                </p>
                <!-- Efecto de brillo -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-transparent to-white opacity-0 group-hover:opacity-30 transition duration-300 transform translate-x-full group-hover:translate-x-0">
                </div>
            </div>

            <!-- Valor 6 -->
            <div
                class="space-y-2 bg-gray-100 p-4 rounded-lg shadow-lg transition duration-300 animate__animated animate__zoomIn max-w-xs mx-auto border border-gray-300 hover:border-gray-300  hover:shadow-2xl hover:shadow-orange-300/50 relative overflow-hidden group">
                 <h3 class="text-lg font-bold text-gray-800" style="font-family: Cooper Black">Responsabilidad</h3>
                <p class="text-gray-600 mt-2 text-justify">
                    Trabajamos con integridad y responsabilidad en cada proyecto para mantener la confianza de
                    nuestros clientes.
                </p>
                <!-- Efecto de brillo -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-transparent to-white opacity-0 group-hover:opacity-30 transition duration-300 transform translate-x-full group-hover:translate-x-0">
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

@endsection
