@extends('layouts.plantilla')
@section('Principal', 'Inicio')
@section('contenido')
<div class="relative mt-4 bg-white">
    
    <!-- Carrusel    h-[50vh] sm:h-[60vh] lg:h-[70vh] en el primer div-->
    <div
        class="relative  w-full  aspect-[16/9] border-b-4 border-[#ffd900d4]  animate__animated animate__fadeIn">
        <div class="overflow-hidden border-b-4 h-full w-full relative">
            <div class="flex transition-transform duration-300 h-full w-full" id="carousel">
                <!-- Imagen 1 -->
                <div class="flex-none w-full h-full relative">
                    <!-- Imagen con oscurecimiento sutil -->
                    <div class="absolute inset-0 bg-black/30"></div>
                    <img src="/img/carrusel/imagen11.jpg" alt="Imagen 1" class="object-cover w-full h-full"
                        style="filter: brightness(0.8);">
                    <!-- Contenido de texto -->
                    <div class="absolute inset-0 flex items-center justify-start">
                        <div class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10 max-w-[90%] md:max-w-[60%]"
                            style="margin-right: 20%;margin-left: 5%;">
                            <h4 class="text-white font-bold  " style="
                                font-size: 2.5vw; /* Tamaño dinámico responsivo */
                                font-family: 'Montserrat', sans-serif;
                                border-radius: 20px; 
                                padding: 12px 20px;
                                text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8); /* Sombra para las letras */
                                font-weight: bold;
                                max-width: 90%; /* Asegura que no se desborde en pantallas pequeñas */
                                margin-left: auto;
                                margin-right: auto;
                                text-align: left; 
                                ">
                                DESCANSA Y RELÁJATE EN NUESTRO HOTEL, DONDE CADA DETALLE ESTÁ PENSADO PARA TU
                                COMODIDAD
                            </h4>
                            <div style="margin-left: 25%">
                                <a href="{{ route('serv_hotel') }}"
                                    class="bg-yellow-500 text-gray-800 font-semibold py-2 px-3 rounded inline-block hover:bg-black hover:text-white transition-all duration-300 text-xs md:text-sm lg:text-xl transform scale-90 sm:scale-100">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Imagen 2 -->
                <div class="flex-none w-full h-full relative">
                    <img src="/img/carrusel/imagen22.jpg" alt="Imagen 2"
                        class="object-cover w-full h-full brightness-50" style="filter: brightness(0.8);">
                    <!-- Contenido de texto -->
                    <div class="absolute inset-0 flex items-center justify-start">
                        <div class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10 max-w-[90%] md:max-w-[60%]"
                            style="margin-right: 20%;margin-left: 5%;">
                            <h4 class="text-white font-bold" style="
                                    font-size: 2.5vw; /* Tamaño dinámico responsivo */
                                    font-family: 'Montserrat', sans-serif;
                                    border-radius: 20px; 
                                    padding: 12px 20px;
                                     text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8); /* Sombra para las letras */
                                    font-weight: bold;
                                    max-width: 90%; /* Asegura que no se desborde en pantallas pequeñas */
                                    margin-left: auto;
                                    margin-right: auto;
                                    text-align: left; 
                                ">
                                CONSTRUIMOS TUS SUEÑOS CON LOS MEJORES MATERIALES DEL MERCADO, SIEMPRE A TU ALCANCE
                            </h4>
                            <div style="margin-left: 25%">
                                <a href="{{ route('serv_ferreteria') }}"
                                    class="bg-yellow-500 text-gray-800 font-semibold py-2 px-3 rounded inline-block hover:bg-black hover:text-white transition-all duration-300 text-xs md:text-sm lg:text-xl transform scale-90 sm:scale-100">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen 3 -->
                <div class="flex-none w-full h-full relative">
                    <img src="/img/carrusel/imagen33.jpg" alt="Imagen 3"
                        class="object-cover w-full h-full brightness-50" style="filter: brightness(0.8);">

                    <!-- Contenido de texto -->
                    <div class="absolute inset-0 flex items-center justify-start">
                        <div class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10 max-w-[90%] md:max-w-[60%]"
                            style="margin-right: 20%;margin-left: 5%;">
                            <h4 class="text-white font-bold" style="
                                    font-size: 2.5vw; /* Tamaño dinámico responsivo */
                                    font-family: 'Montserrat', sans-serif;
                                    border-radius: 20px; 
                                    padding: 12px 20px;
                                    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8); /* Sombra para las letras */
                                    font-weight: bold;
                                    max-width: 90%; /* Asegura que no se desborde en pantallas pequeñas */
                                    margin-left: auto;
                                    margin-right: auto;
                                    text-align: left; 
                                ">
                                VIVE LA PASIÓN POR EL DEPORTE EN NUESTRO COMPLEJO DEPORTIVO, DISEÑADO PARA CAMPEONES
                            </h4>
                            <div style="margin-left: 25%">
                                <a href="{{ route('serv_complejo') }}"
                                    class="bg-yellow-500 text-gray-800 font-semibold py-2 px-3 rounded inline-block hover:bg-black hover:text-white transition-all duration-300 text-xs md:text-sm lg:text-xl transform scale-90 sm:scale-100">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imagen 4 -->
                <div class="flex-none w-full h-full relative">
                    <img src="/img/carrusel/imagen44.jpg" alt="Imagen 4"
                        class="object-cover w-full h-full brightness-50" style="filter: brightness(0.7);">

                    <!-- Contenido de texto -->
                    <div class="absolute inset-0 flex items-center justify-start">
                        <div class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10 max-w-[90%] md:max-w-[60%]"
                            style="margin-right: 20%;margin-left: 5%;">

                            <!--rounded-full p-4 md:p-6 lg:p-10" style="
                                    margin-left: 40px; /* Espaciado desde el lado izquierdo */
                                    max-width: 60%; /* Ancho máximo del contenedor */
                                "  -->
                            <h4 class="text-white font-bold" style="
                                    font-size: 2.5vw; /* Tamaño dinámico responsivo */
                                    font-family: 'Montserrat', sans-serif;
                                    border-radius: 20px; 
                                    padding: 12px 20px;
                                    text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.8); /* Sombra para las letras */
                                    font-weight: bold;
                                    max-width: 90%; /* Asegura que no se desborde en pantallas pequeñas */
                                    margin-left: auto;
                                    margin-right: auto;
                                    text-align: left; 
                                ">
                                MATERIALES DE CALIDAD PARA TUS PROYECTOS, ENTREGADOS CON CONFIANZA Y PUNTUALIDAD
                            </h4>
                            <div style="margin-left: 25%">
                                <a href="{{ route('serv_servicentro') }}"
                                    class="bg-yellow-500 text-gray-800 font-semibold py-2 px-3 rounded inline-block hover:bg-black hover:text-white transition-all duration-300 text-xs md:text-sm lg:text-xl transform scale-90 sm:scale-100">
                                    Ver más
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button id="prev"
            class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white bg-opacity-30 hover:bg-opacity-30 text-black p-2 md:p-4 rounded-full shadow-lg border border-gray-300 z-10 transition duration-300 ease-in-out hover:scale-110">
            ❮
        </button>
        <button id="next"
            class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white bg-opacity-30 hover:bg-opacity-30 text-black p-2 md:p-4 rounded-full shadow-lg border border-gray-300 z-10 transition duration-300 ease-in-out hover:scale-110">
            ❯
        </button>
    </div>

    <!-- Contenido de información de la empresa -->
    <div class="container mx-auto max-w-6xl px-4 py-8 animate__animated animate__fadeInUp">
        <div
            class="bg-white border border-gray-200 shadow-lg rounded-2xl overflow-hidden flex flex-col md:flex-row items-center md:items-stretch text-center md:text-left p-4 sm:p-6 lg:p-8 hover:shadow-xl transition-shadow duration-500">
            <div class="w-full md:w-1/2 lg:w-4/12 flex justify-center items-center p-4">
                <div class="w-48 sm:w-48 md:w-60 lg:w-full aspect-[4/3] overflow-hidden rounded-lg shadow-md">
                    <img src="/img/carrusel/equipo.jpg" alt="Equipo de Grupo Emanuel"
                        class="w-full h-full object-contain object-center">
                </div>
            </div>
            <!-- Texto de descripción -->
            <div class="w-full md:w-1/2 lg:w-8/12 p-4 flex flex-col justify-center">
                <!-- Logo -->
                <div class="flex justify-center md:justify-start mb-4 md:mb-6">
                    <img src="/img/logo.png" alt="Logo de Grupo Emanuel" class="h-12 md:h-16">
                </div>
                <!-- Descripción -->
                <p class="text-gray-700 mb-4 md:mb-6 leading-relaxed text-justify text-sm md:text-base">
                    En Grupo Emanuel RLG, nos dedicamos a brindar servicios generales
                    con un firme compromiso de excelencia. Somos un equipo de profesionales
                    con más de 17 años de sólida experiencia en el sector, impulsados por la
                    misión de identificar y satisfacer las necesidades del mercado, transformándonos
                    en agentes de cambio.
                </p>
                <!-- Estadísticas -->
                <div
                    class="bg-[#f8c740] text-[#001c77] rounded-lg py-4 px-2 flex flex-wrap justify-around gap-4 md:gap-0">
                    <div class="flex flex-col items-center animate__animated animate__pulse">
                        <span class="text-2xl font-bold">+17</span>
                        <span class="text-xs md:text-sm text-center">Años de experiencia</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-2xl font-bold">+350</span>
                        <span class="text-xs md:text-sm text-center">Clientes Satisfechos</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-2xl font-bold">+400</span>
                        <span class="text-xs md:text-sm text-center">Proyectos ejecutados</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <span class="text-2xl font-bold">+15</span>
                        <span class="text-xs md:text-sm text-center">Profesionales Calificados</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    <!-- Contenido sobre los servicios -->
    <div class="w-full text-white py-8 md:py-16 lg:py-24 bg-cover bg-center relative"
    style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.692),
         rgba(0, 0, 0, 0.349) 30px), url('/img/Publicidad/contacto.jpg');">

 

        <div class="container mx-auto px-4 relative z-10">
            <!-- Título -->
            <div class="text-center mb-8 md:mb-12">
                <h2
                    class="text-2xl md:text-3xl font-bold inline-block bg-white text-gray-900 px-4 md:px-6 py-2 rounded-lg shadow-lg border-2 border-gray-200">
                    NUESTROS SERVICIOS
                </h2>
            </div>

            <!-- Grid de tarjetas -->
            <div class="grid gap-4 md:gap-6 lg:gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 px-2 md:px-4">
                <!-- Tarjeta (reutilizable) -->
                @php
                $servicios = [
                ['img' => 'hotel.jpg', 'alt' => 'Hotel', 'titulo' => 'Hotel', 'ruta' => 'serv_hotel'],
                ['img' => 'tripleg.jpg', 'alt' => 'Complejo deportivo', 'titulo' => 'Complejo deportivo', 'ruta' =>
                'serv_complejo'],
                ['img' => 'ferreteria.jpg', 'alt' => 'Distribuidora Ferretería', 'titulo' => 'ProFerretería', 'ruta' =>
                'serv_ferreteria'],
                ['img' => 'servicentro1.jpg', 'alt' => 'Servicentro', 'titulo' => 'Servicentro', 'ruta' =>
                'serv_servicentro'],
                ];
                @endphp

                @foreach($servicios as $servicio)
                <div
                    class="relative group overflow-hidden border-4 border-yellow-500 rounded-lg shadow-lg mx-auto transform transition-transform duration-300 hover:scale-105 bg-white h-48 sm:h-40 md:h-56 lg:h-64 w-full max-w-xs">
                    <div class="w-full h-full">
                        <img src="/img/servicios/{{ $servicio['img'] }}" alt="{{ $servicio['alt'] }}"
                            class="w-full h-full object-contain transition-opacity duration-300 group-hover:opacity-75">
                    </div>
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-opacity duration-300">
                        <h3
                            class="font-bold text-base md:text-lg uppercase mb-2 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 px-2">
                            {{ $servicio['titulo'] }}</h3>
                        <a href="{{ route($servicio['ruta']) }}"
                            class="bg-yellow-500 text-black font-semibold py-1 px-4 md:py-2 md:px-6 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-sm md:text-base">
                            Ver más
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>


<script>
    const carousel = document.getElementById('carousel');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const totalImages = 4;
    let currentIndex = 0;
    const updateCarousel = () => {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    };
    // Función para avanzar al siguiente slide
    const nextSlide = () => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    };
    // Avance automático cada 4 segundos
    setInterval(nextSlide, 6000);
    nextButton.addEventListener('click', () => {
        nextSlide();
    });
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateCarousel();
    });
    // Código para el menú móvil
    const menuButton = document.getElementById('menu-button');
    const closeButton = document.getElementById('close-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('translate-x-full');
    });
    closeButton.addEventListener('click', () => {
        mobileMenu.classList.add('translate-x-full');
    });
</script>


@endsection