@extends('layouts.plantilla')
@section('Principal', 'Inicio')
@section('contenido')
    <div class="relative mt-4 bg-white">
        <!-- Carrusel -->
        <div class="relative border-b-4 border-[#ffd900d4] w-full h-[500px] sm:h-[600px] lg:h-[700px]">
            <div class="overflow-hidden border-b-4 h-full w-full relative">
                <div class="flex transition-transform duration-300 h-full w-full" id="carousel">
                    <!-- Imagen 1 -->
                    <div class="flex-none w-full h-full relative">
                        <!-- Imagen con desenfoque y oscurecimiento -->
                        <img src="/img/carrusel/imagen1.jpg" alt="Imagen 1"
                            class="object-cover w-full h-full brightness-50">
                <!-- Contenido de texto -->
                <div class="absolute inset-0 flex items-center justify-start">
                    <div 
                        class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10"
                        style="margin-left: 20px; /* Espaciado por defecto */
                               margin-left: 60px; /* Espaciado en pantallas más grandes */">
                        <h1 class="text-white font-bold"
                            style="font-size: 3vw; /* Tamaño dinámico responsivo */
                                   font-family: 'Comic Sans MS', cursive, sans-serif;
                                   background: #000823; 
                                   border-radius: 10px; 
                                   padding: 10px 20px;">
                            GRUPO EMANUEL RLG
                        </h1>
                    </div>
                </div>
                    </div>

                    <!-- Imagen 2 -->
                    <div class="flex-none w-full h-full relative">
                        <img src="/img/carrusel/imagen2.jpg" alt="Imagen 2"
                            class="object-cover w-full h-full brightness-50">
                <!-- Contenido de texto -->
                <div class="absolute inset-0 flex items-center justify-start">
                    <div 
                        class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10"
                        style="margin-left: 20px; /* Espaciado por defecto */
                               margin-left: 60px; /* Espaciado en pantallas más grandes */">
                        <h1 class="text-white font-bold"
                            style="font-size: 3vw; /* Tamaño dinámico responsivo */
                                   font-family: 'Comic Sans MS', cursive, sans-serif;
                                   background: #000823; 
                                   border-radius: 10px; 
                                   padding: 10px 20px;">
                            GRUPO EMANUEL RLG
                        </h1>
                    </div>
                </div>
                    </div>
                    <!-- Imagen 3 -->
                    <div class="flex-none w-full h-full relative">
                        <img src="/img/carrusel/imagen3.jpg" alt="Imagen 3"
                            class="object-cover w-full h-full brightness-50">
                <!-- Contenido de texto -->
                <div class="absolute inset-0 flex items-center justify-start">
                    <div 
                        class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10"
                        style="margin-left: 20px; /* Espaciado por defecto */
                               margin-left: 60px; /* Espaciado en pantallas más grandes */">
                        <h1 class="text-white font-bold"
                            style="font-size: 3vw; /* Tamaño dinámico responsivo */
                                   font-family: 'Comic Sans MS', cursive, sans-serif;
                                   background: #000823; 
                                   border-radius: 10px; 
                                   padding: 10px 20px;">
                            GRUPO EMANUEL RLG
                        </h1>
                    </div>
                </div>
                    </div>
                    <!-- Imagen 4 -->
                    <div class="flex-none w-full h-full relative">
                        <img src="/img/carrusel/imagen4.jpg" alt="Imagen 4"
                            class="object-cover w-full h-full brightness-50">
                <!-- Contenido de texto -->
                <div class="absolute inset-0 flex items-center justify-start">
                    <div 
                        class="bg-white/20 backdrop-blur-md rounded-full p-4 md:p-6 lg:p-10"
                        style="margin-left: 20px; /* Espaciado por defecto */
                               margin-left: 60px; /* Espaciado en pantallas más grandes */">
                        <h1 class="text-white font-bold"
                            style="font-size: 3vw; /* Tamaño dinámico responsivo */
                                   font-family: 'Comic Sans MS', cursive, sans-serif;
                                   background: #000823; 
                                   border-radius: 10px; 
                                   padding: 10px 20px;">
                            GRUPO EMANUEL RLG
                        </h1>
                    </div>
                </div>
                    </div>
                </div>
            </div>
            <button id="prev"
                class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-white bg-opacity-30 hover:bg-opacity-30 text-black p-4 rounded-full shadow-lg border border-gray-300 z-10 transition duration-300 ease-in-out hover:scale-110">
                ❮
            </button>
            <button id="next"
                class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-white bg-opacity-30 hover:bg-opacity-30 text-black p-4 rounded-full shadow-lg border border-gray-300 z-10 transition duration-300 ease-in-out hover:scale-110">
                ❯
            </button>
        </div>




        <!-- Añadir contenido -->
        <div class="container mx-auto max-w-6xl px-4 py-8 animate__animated animate__fadeInUp">
            <div
                class="bg-white border border-gray-300 shadow-lg rounded-2xl overflow-hidden flex flex-col md:flex-row items-center md:items-start text-center md:text-left p-6 hover:shadow-xl transition-shadow 
                 duration-500">

                <!-- Imagen -->
                <div class="w-full md:w-1/2 lg:w-4/12 mb-4 md:mb-0 p-8">
                    <img src="/img/carrusel/equipo.jpg" alt="Servicentro"
                        class="mx-auto md:mx-0 w-full h-[250px] object-cover rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none">
                </div>

                <!-- Texto de descripción -->
                <div class="w-full md:w-1/2 lg:w-9/12 p-6">

                    <!-- Logo -->
                    <div class="flex items-center logo">
                        <img src="/img/logo.png" alt="Grupo Emanuel" class="h-15">
                    </div>
                    <br>
                    <p class="text-gray-700 mb-6 leading-relaxed text-justify">
                        En Grupo Emanuel SRL, nos dedicamos a brindar servicios generales
                        con un firme compromiso de excelencia. Somos un equipo de profesionales
                        con más de 16 años de sólida experiencia en el sector, impulsados por la
                        misión de identificar y satisfacer las necesidades del mercado, transformándonos
                        en agentes de cambio.
                    </p>

                    <div style="background: #f8c740;color: #001c77;"
                        class="  rounded-2xl text-gray-800 py-4 px-2 flex flex-col md:flex-row justify-around space-y-4 md:space-y-0 ">
                        <div class="flex flex-col items-center animate__animated animate__pulse" style="text-align: center">
                            <span class="text-3xl font-bold" style="text-align: center">+16</span>
                            <span class="text-sm">Años de experiencia</span>
                        </div>
                        <hr class="border-t border-white my-4 md:hidden">
                        <div class="flex flex-col items-center" style="text-align: center">
                            <span class="text-3xl font-bold">+350</span>
                            <span class="text-sm">Clientes Satisfechos</span>
                        </div>
                        <hr class="border-t border-white my-4 md:hidden">
                        <div class="flex flex-col items-center" style="text-align: center">
                            <span class="text-3xl font-bold">+400</span>
                            <span class="text-sm">Proyectos ejecutados</span>
                        </div>
                        <hr class="border-t border-white my-4 md:hidden">
                        <div class="flex flex-col items-center" style="text-align: center">
                            <span class="text-3xl font-bold">+15</span>
                            <span class="text-sm">Profesionales Calificados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full  text-white py-8"
            style="background-image: url('/img/Publicidad/contacto.jpg'); background-size: cover; background-position: center;">
            <div class="container mx-auto px-4">
                <div style="text-align: center;">
                    <h2 class="text-3xl font-bold mb-6 animate__animated animate__fadeInDown"
                        style="display: inline-block; background: #ffffff; padding: 0.5rem 1.5rem; color: #000823; 
                               border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); border: 2px solid #ececec;">
                        NUESTROS SERVICIOS
                    </h2>
                </div>
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4 p-8">

                    <!-- Tarjeta 1 -->
                    <div
                        class="relative group border-4 border-yellow-500 rounded-lg overflow-hidden animate__animated animate__zoomIn w-64 h-64 mx-auto">
                        <img src="/img/servicios/hotel.jpg" alt="Hotel"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center">Hotel</h3>
                            <a href="{{ route('serv_hotel') }}"
                                class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded inline-block">
                                Ver más
                            </a>
                        </div>
                    </div>


                    <!-- Tarjeta 2 -->
                    <div
                        class="relative group border-4 border-yellow-500 rounded-lg overflow-hidden animate__animated animate__zoomIn w-64 h-64 mx-auto">
                        <img src="/img/servicios/tripleg.jpg" alt="Complejo deportivo"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center">Complejo deportivo</h3>
                            <a href="{{ route('serv_complejo') }}"
                                class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded inline-block">
                                Ver más
                            </a>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div
                        class="relative group border-4 border-yellow-500 rounded-lg overflow-hidden animate__animated animate__zoomIn w-64 h-64 mx-auto">
                        <img src="/img/servicios/ferreteria.jpg" alt="Distribuidora Ferreteria"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center">ProFerretería</h3>
                            <a href="{{ route('serv_ferreteria') }}"
                                class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded inline-block">
                                Ver más
                            </a>
                        </div>
                    </div>

                    <!-- Tarjeta 4 -->
                    <div
                        class="relative group border-4 border-yellow-500 rounded-lg overflow-hidden animate__animated animate__zoomIn w-64 h-64 mx-auto">
                        <img src="/img/servicios/servicentro.jpg" alt="Servicentro"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-80 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2 text-center">Servicentro</h3>
                            <a href="{{ route('serv_servicentro') }}"
                                class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded inline-block">
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
        setInterval(nextSlide, 4500);

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
