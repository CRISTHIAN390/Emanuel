@extends('layouts.plantilla')
@section('Navs', 'Vision')
@section('contenido')

    <div class="relative mt-4 bg-white py-10">
        <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-5xl">
            <div class="col-12 animate__animated animate__fadeIn">
                <h2 class="text-center text-3xl font-bold mb-6">GRUPO EMANUEL</h2>
                <p class="text-center text-gray-600 mb-8">
                    Más de 10 años de experiencia proveyendo productos para el Sector Construcción, Industrial,
                    Minero, Logístico y Agroindustria.
                </p>
                <div class="grid gap-6 md:grid-cols-2 animate__animated animate__fadeInUp">

                    <!-- Imágenes y Brochure -->
                    <div class="relative space-y-4 flex justify-center">
                        <img src="/img/carrusel/equipo.jpg" alt="Equipo"
                            class="mx-auto w-[300px] h-[300px] rounded-xl shadow-lg transition-transform duration-500 hover:scale-105 hover:rotate-2">
                    </div>

                    <!-- Contenido de Texto -->
                    <div class="space-y-6">
                        <!-- Sobre Nosotros -->
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="text-2xl font-bold text-gray-800">Sobre Nosotros</h2>
                            <p class="text-gray-600 mt-2">
                                Emanuel R.L.G, es un grupo privado fundado en el año 2008, dedicado a la Gestión
                                ferretera, proyectos y/o formalización de actividades en curso de empresas que operan en
                                diversos sectores productivos a nivel nacional.
                            </p>
                        </div>

                        <!-- Misión -->
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="text-2xl font-bold text-gray-800">Misión</h2>
                            <p class="text-gray-600 mt-2">
                                Somos un equipo multidisciplinario de especialistas en consultoría ambiental, legal y
                                administrativa, orientados a proporcionar las mejores soluciones integrales a los
                                diversos retos de cada proyecto que emprenden nuestros clientes.
                            </p>
                        </div>

                        <!-- Visión -->
                        <div class="animate__animated animate__fadeInLeft">
                            <h2 class="text-2xl font-bold text-gray-800">Visión</h2>
                            <p class="text-gray-600 mt-2">
                                Ser una organización líder en soluciones para sectores clave, comprometida con el
                                desarrollo sostenible y la innovación constante.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-10">
                <h2 class="text-xl font-bold text-gray-800">Nuestros Valores</h2>
                
                <!-- Primera fila de valores -->
                <div class="grid gap-6 md:grid-cols-3 mt-4">
                    <!-- Valor 1 -->
                    <div class="space-y-4 bg-gray-100 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">Integridad</h3>
                        <p class="text-gray-600 mt-2">
                            Nuestro compromiso es garantizar la calidad y confidencialidad de todos nuestros clientes, logrando
                            que el trabajo realizado sea responsable y ético.
                        </p>
                    </div>
            
                    <!-- Valor 2 -->
                    <div class="space-y-4 bg-gray-100 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">Compromiso</h3>
                        <p class="text-gray-600 mt-2">
                            Nuestro compromiso es proporcionar soluciones innovadoras y efectivas para satisfacer las
                            necesidades y expectativas de nuestros clientes.
                        </p>
                    </div>
            
                    <!-- Valor 3 -->
                    <div class="space-y-4 bg-gray-100 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">Puntualidad</h3>
                        <p class="text-gray-600 mt-2">
                            Nos esforzamos por entregar soluciones a tiempo, cumpliendo con los plazos establecidos para cada
                            proyecto.
                        </p>
                    </div>
                </div>
            
                <!-- Segunda fila de valores -->
                <div class="grid gap-6 md:grid-cols-3 mt-4">
                    <!-- Valor 4 -->
                    <div class="space-y-4 bg-gray-100 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">Solidaridad</h3>
                        <p class="text-gray-600 mt-2">
                            Apoyamos a nuestras comunidades y promovemos el bienestar social en todas nuestras actividades.
                        </p>
                    </div>
            
                    <!-- Valor 5 -->
                    <div class="space-y-4 bg-gray-100 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">Innovación</h3>
                        <p class="text-gray-600 mt-2">
                            Nos esforzamos por adoptar tecnologías y métodos innovadores para mejorar la calidad de nuestros
                            servicios.
                        </p>
                    </div>
            
                    <!-- Valor 6 -->
                    <div class="space-y-4 bg-gray-100 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-bold text-gray-800">Responsabilidad</h3>
                        <p class="text-gray-600 mt-2">
                            Trabajamos con integridad y responsabilidad en cada proyecto para mantener la confianza de nuestros
                            clientes.
                        </p>
                    </div>
                </div>
            </div>
            
            
            
            


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

@endsection
