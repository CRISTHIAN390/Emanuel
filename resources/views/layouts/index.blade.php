@extends('layouts.plantilla')
@section('Principal', 'Inicio')
@section('contenido')
    <div class="relative mt-4 bg-white">
        <!-- Carrusel -->
        <div
            class="relative border-b-4 border-[#ffd900d4]  w-full h-[50vh] sm:h-[60vh] lg:h-[70vh] animate__animated animate__fadeIn">
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

        <!-- Contenido de informacion de la empresa -->
        <div class="container mx-auto max-w-6xl px-4 py-8 animate__animated animate__fadeInUp">
            <div class="bg-white border border-gray-200 shadow-lg rounded-2xl overflow-hidden flex flex-col md:flex-row items-center md:items-stretch text-center md:text-left p-6 hover:shadow-xl transition-shadow duration-500">
                
                <!-- Imagen -->
                <div class="w-full md:w-1/2 lg:w-4/12 flex justify-center items-center p-4">
                    <img 
                        src="/img/carrusel/equipo.jpg" 
                        alt="Equipo de Grupo Emanuel" 
                        class="w-full h-56 object-cover rounded-lg shadow-md"
                    >
                </div>

                <!-- Texto de descripción -->
                <div class="w-full md:w-1/2 lg:w-8/12 p-4 flex flex-col justify-center">
                    <!-- Logo -->
                    <div class="flex justify-center md:justify-start mb-6">
                        <img 
                            src="/img/logo.png" 
                            alt="Logo de Grupo Emanuel" 
                            class="h-12 md:h-16"
                        >
                    </div>

                    <!-- Descripción -->
                    <p class="text-gray-700 mb-6 leading-relaxed text-justify text-sm md:text-base">
                        En Grupo Emanuel RLG, nos dedicamos a brindar servicios generales
                        con un firme compromiso de excelencia. Somos un equipo de profesionales
                        con más de 17 años de sólida experiencia en el sector, impulsados por la
                        misión de identificar y satisfacer las necesidades del mercado, transformándonos
                        en agentes de cambio.
                    </p>

                    <!-- Estadísticas -->
                    <div class="bg-[#f8c740] text-[#001c77] rounded-lg py-4 px-2 flex flex-col md:flex-row justify-around space-y-4 md:space-y-0" style="background: #f8c740;color: #001c77;">
                        <div class="flex flex-col items-center animate__animated animate__pulse">
                            <span class="text-2xl font-bold">+17</span>
                            <span class="text-xs md:text-sm">Años de experiencia</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold">+350</span>
                            <span class="text-xs md:text-sm">Clientes Satisfechos</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold">+400</span>
                            <span class="text-xs md:text-sm">Proyectos ejecutados</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold">+15</span>
                            <span class="text-xs md:text-sm">Profesionales Calificados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenido sobre los servicios -->
        <div class="w-full text-white py-12 bg-cover bg-center" style="background-image: url('/img/Publicidad/contacto.jpg');">
            <div class="container mx-auto px-4">
                <!-- Título -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold inline-block bg-white text-gray-900 px-6 py-2 rounded-lg shadow-lg border-2 border-gray-200">
                        NUESTROS SERVICIOS
                    </h2>
                </div>

                <!-- Grid de tarjetas -->
                <div class="grid gap-8 md:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 px-4">
                    <!-- Tarjeta 1 -->
                    <div class="relative group overflow-hidden border-4 border-yellow-500  rounded-lg shadow-lg w-64 h-64 mx-auto transform transition-transform duration-300 hover:scale-105">
                        <img src="/img/servicios/hotel.jpg" alt="Hotel" 
                        class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">
                        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">Hotel</h3>
                            <a href="{{ route('serv_hotel') }}" class="bg-yellow-500 text-black font-semibold py-2 px-6 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Ver más
                            </a>
                        </div>
                        
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="relative group overflow-hidden border-4 border-yellow-500  rounded-lg shadow-lg w-64 h-64 mx-auto transform transition-transform duration-300 hover:scale-105">
                        <img src="/img/servicios/tripleg.jpg" alt="Complejo deportivo" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">
                        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">Complejo deportivo</h3>
                            <a href="{{ route('serv_complejo') }}" class="bg-yellow-500 text-black font-semibold py-2 px-6 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Ver más
                            </a>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="relative group overflow-hidden border-4 border-yellow-500  rounded-lg shadow-lg w-64 h-64 mx-auto transform transition-transform duration-300 hover:scale-105">
                        <img src="/img/servicios/ferreteria.jpg" alt="Distribuidora Ferreteria" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">
                        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">ProFerretería</h3>
                            <a href="{{ route('serv_ferreteria') }}" class="bg-yellow-500 text-black font-semibold py-2 px-6 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Ver más
                            </a>
                        </div>
                    </div>

                    <!-- Tarjeta 4 -->
                    <div class="relative group overflow-hidden border-4 border-yellow-500  rounded-lg shadow-lg w-64 h-64 mx-auto transform transition-transform duration-300 hover:scale-105">
                        <img src="/img/servicios/servicentro1.jpg" alt="Servicentro" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-75">
                        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">Servicentro</h3>
                            <a href="{{ route('serv_servicentro') }}" class="bg-yellow-500 text-black font-semibold py-2 px-6 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                Ver más
                            </a>
                        </div>
                    </div>
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
