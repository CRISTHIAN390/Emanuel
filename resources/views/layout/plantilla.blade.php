<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrupoEmanuel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    .social-icon:hover {
        opacity: 0.7;
        background-color: #F0F0F0;
    }

    .social-icon {
        display: inline-block;
        text-decoration: none;
        padding: 5px;
        border-radius: 15px;
        transition: background-color 0.3s;
    }

    .top-border {
        border-top: 4px solid #FBBF24;
        border-bottom: 2px solid #ffd900;
        border-left: 1px solid #ffd900;
        border-right: 1px solid #ffd900;
    }


    .logo img {
        max-height: 4rem;
        /* Altura máxima del logo */
        /* Ancho máximo del logo */
        object-fit: contain;

    }

    .carousel-container {
        max-height: 100%;
    }

    .carousel-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .nav-item {
        padding: 2px 15px;
        margin-top: 10px;
        margin-bottom: 24px;
        border: 2px solid transparent;
        border-radius: 5px;
        transition: all 0.3s ease;
        color: #4a5568;
        text-align: center;
    }

    .nav-item:hover,
    .nav-item.active {
        background-color: #FBBF24;
        color: white border: 2px solid #FBBF24;
        transition: all 0.3s ease;
        //MEJORA DE LETRA
        letter-spacing: 1px;
        letter-spacing: 0.5px;
        font-weight: bold;
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        border-radius: 8px;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        min-width: 200px;
        z-index: 10;
    }

    .submenu a {
        display: block;
        padding: 10px 15px;
        color: #4a5568;
        text-decoration: none;
        transition: all 0.3s ease;
        border-bottom: 1px solid #ddd;
    }

    .submenu a:last-child {
        border-bottom: none;
    }

    .submenu a:hover {
        background-color: #FBBF24;


    }

    .nav-item:hover .submenu {
        display: block;
    }
</style>

<body class="bg-gray-200">

    <!-- Encabezado -->
    <header class="bg-white shadow-md fixed top-0 w-full z-20 top-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex justify-center sm:justify-start w-full sm:w-auto items-center logo">
                <img src="/img/logo.png" alt="Grupo Emanuel" class="h-15">
            </div>

            <!-- Menú para pantallas grandes -->
            <nav class="hidden md:flex space-x-4 items-center">
                <a href="#"
                    class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200">Inicio</a>
                <div class="relative nav-item">
                    <a href="#"
                        class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200"><span>Nosotros</span>
                        <span class="text-gray-600">▿</span> <!-- Ícono de flecha hacia abajo -->
                    </a>
                    <div class="submenu">
                        <a href="#">Nosotros</a>
                        <a href="#">Vision y Mision</a>
                    </div>
                </div>
                <a href="#"
                    class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200">Servicios</a>
                <a href="#"
                    class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200">Blog</a>
                <a href="#"
                    class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200">Contacto</a>
            </nav>

            <!-- Botón de menú móvil -->
            <button id="menu-button" class="md:hidden">
                <i class="fas fa-bars text-gray-900 text-xl"></i>
            </button>
        </div>

        <!-- Menú lateral para pantallas pequeñas -->
        <div id="mobile-menu"
            class="fixed top-0 right-0 w-64 h-full bg-gray-600 text-white transform translate-x-full transition-transform duration-300 ease-in-out z-30">
            <div class="flex justify-between items-center p-4">
                <span class="text-lg font-semibold">Menú</span>
                <button id="close-menu-button" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="mt-4">
                <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Inicio</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Nosotros</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Servicios</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Clientes</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Blog</a>
                <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Contacto</a>
            </nav>
        </div>
    </header><br><br><br>

    <!-- Cuerpo -->
    <section class="relative mt-4 bg-white">
        <!-- Carrusel -->
        <div class="carousel-container bg-cover bg-center overflow-hidden mb-6" style="border-bottom: 5px solid #ffd900d4">
            <div class="relative  border-b-4 border-[#ffd900d4] h-[300px] lg:h-[460px]">
                <div class="overflow-hidden h-full">
                    <div class="flex transition-transform duration-300 h-full" id="carousel">
                        <div class="flex-none w-full h-full">
                            <img src="/img/carrusel/imagen1.jpg" alt="Imagen 1"
                                class="carousel-image object-cover w-full h-full">
                        </div>
                        <div class="flex-none w-full h-full">
                            <img src="/img/carrusel/imagen2.jpg" alt="Imagen 2"
                                class="carousel-image object-cover w-full h-full">
                        </div>
                        <div class="flex-none w-full h-full">
                            <img src="/img/carrusel/imagen3.jpg" alt="Imagen 3"
                                class="carousel-image object-cover w-full h-full">
                        </div>
                        <div class="flex-none w-full h-full">
                            <img src="/img/carrusel/imagen4.jpg" alt="Imagen 4"
                                class="carousel-image object-cover w-full h-full">
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
        </div>

        <!-- Añadir contenido -->
        <div class="container mx-auto max-w-6xl px-4 py-8">
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

                    <!-- Sección de estadísticas -->
                    <div
                        class="bg-yellow-400 rounded-2xl text-gray-800 py-4 px-2 flex flex-col md:flex-row justify-around space-y-4 md:space-y-0">
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-bold">+16</span>
                            <span class="text-sm">Años de experiencia</span>
                        </div>
                        <hr class="border-t border-white my-4 md:hidden">
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-bold">+350</span>
                            <span class="text-sm">Clientes Satisfechos</span>
                        </div>
                        <hr class="border-t border-white my-4 md:hidden">
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-bold">+400</span>
                            <span class="text-sm">Proyectos ejecutados</span>
                        </div>
                        <hr class="border-t border-white my-4 md:hidden">
                        <div class="flex flex-col items-center">
                            <span class="text-3xl font-bold">+15</span>
                            <span class="text-sm">Profesionales Calificados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sección Sobre servicios -->
        <div class="w-full bg-gradient-to-b from-yellow-500 to-black text-white py-8">
            <div class="container mx-auto px-4">
                <h2 class="text-center text-3xl font-bold mb-6">Nuestros Servicios</h2>
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-5 p-8">
                    <!-- Tarjeta 1 -->
                    <div class="relative group border-2 border-yellow-500 rounded-lg overflow-hidden h-[200px]">
                        <img src="/img/servicios/sareli.jpg" alt="Materiales de Construccion"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2" style="text-align: center">Materiales de
                                Construccion</h3>
                            <button class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded">Ver más</button>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="relative group border-2 border-yellow-500 rounded-lg overflow-hidden h-[200px]">
                        <img src="/img/servicios/hotel.jpg" alt="Hotel"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2">Hotel</h3>
                            <button class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded">Ver más</button>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="relative group border-2 border-yellow-500 rounded-lg overflow-hidden h-[200px]">
                        <img src="/img/servicios/tripleg.jpg" alt="Complejo deportivo"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2">Complejo deportivo</h3>
                            <button class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded">Ver más</button>
                        </div>
                    </div>

                    <!-- Tarjeta 4 -->
                    <div class="relative group border-2 border-yellow-500 rounded-lg overflow-hidden h-[200px]">
                        <img src="/img/servicios/ferreteria.jpg" alt="Distribuidora Ferreteria"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2">Materiales</h3>
                            <button class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded">Ver más</button>
                        </div>
                    </div>

                    <!-- Tarjeta 5 -->
                    <div class="relative group border-2 border-yellow-500 rounded-lg overflow-hidden h-[200px]">
                        <img src="/img/servicios/servicentro.jpg" alt="Servicentro"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:brightness-50">
                        <div
                            class="absolute inset-0 flex flex-col items-center justify-center text-white bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="font-bold text-lg uppercase mb-2">Servicentro</h3>
                            <button class="bg-yellow-500 text-black font-semibold py-1 px-3 rounded">Ver más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>

        <div class="bg-gray-200 w-full py-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap md:flex-nowrap justify-around items-start">
                    <!-- Menú de Navegación -->
                    <div class="w-full md:w-1/7">
                    </div>
                    <!-- Información sobre Fundación -->
                    <div class="w-full md:w-2/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Fundación Emanuel</h2>
                        <p class="text-gray-600 text-sm">
                            Brindamos herramientas que ayudan a los peruanos a fortalecer y desarrollar sus capacidades,
                            incentivando la generación de ideas o proyectos sostenibles y escalables, que aporten al
                            desarrollo de nuestro país.
                        </p>
                    </div>
                    <div class="w-full md:w-3/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Menú</h2>
                        <ul class="text-gray-600 space-y-1 list-disc list-inside">
                            <li><a href="#" class="hover:text-red-600">Inicio</a></li>
                            <li><a href="#" class="hover:text-red-600">Conócenos</a></li>
                            <li><a href="#" class="hover:text-red-600">Campus Emanuel</a></li>
                            <li><a href="#" class="hover:text-red-600">Portal PQS</a></li>

                            <li><a href="#" class="hover:text-red-600">Noticias</a></li>
                            <li><a href="#" class="hover:text-red-600">Contactos</a></li>
                        </ul>
                    </div>


                    <!-- Información de Contacto -->
                    <div class="w-full md:w-4/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Dirección de la oficina</h2>
                        <p class="text-gray-600 text-sm mb-2">
                            Avenida Camino Real, Mz32 Lt.2 Trujillo, Perú
                        </p>
                        <h2 class="text-gray-700 font-semibold mb-2">Contacto</h2>
                        <p class="text-gray-600 text-sm">Celular: 922457777</p>
                        <h2 class="text-gray-700 font-semibold mb-2">Correo</h2>
                        <p class="text-gray-600 text-sm">Correo:----------</p>
                    </div>

                    <!-- Redes Sociales -->
                    <div class="w-full md:w-5/7">
                        <h2 class="text-gray-700 font-semibold mb-2">Síguenos</h2>
                        <div class="grid grid-cols-2 gap-2">
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-facebook text-2xl"></i>
                                <p class="text-gray-600 text-sm">Facebook</p>
                            </a>
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-twitter text-2xl"></i>
                                <p class="text-gray-600 text-sm">Twitter</p>
                            </a>
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-tiktok text-2xl"></i>
                                <p class="text-gray-600 text-sm">TikTok</p>
                            </a>
                            <a href="#" class="social-icon text-red-600 text-center">
                                <i class="fab fa-instagram text-2xl"></i>
                                <p class="text-gray-600 text-sm">Instagram</p>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-6/7">
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white w-full py-4" style="text-align: center;background: black">
            <div class="container mx-auto px-4">
                <!-- Logo y Derechos Reservados -->
                <div class="flex flex-col items-center text-black">
                    <p class="text-sm" style="color: white">2024 <span class="font-semibold">Fundación
                            Emanuel</span>. Todos los derechos
                        reservados</p>
                    <a href="#" class="text-red-600 text-sm  ">Políticas de privacidad y protección de datos</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Carousel and Menu -->
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

</body>

</html>
