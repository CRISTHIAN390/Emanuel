<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrupoEmanuel</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<style>
    .nav-item:hover,
    .nav-item.active {
        background-color: #FBBF24;
        color: white border: 2px solid #FBBF24;
        transition: all 0.3s ease;
        letter-spacing: 1px;
        letter-spacing: 0.5px;
        font-weight: bold;
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
                <a href="{{ route('home') }}"
                    class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200">Inicio</a>
                <div class="relative nav-item">
                    <a href="#"
                        class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200"><span>Nosotros</span>
                        <span class="text-gray-600">▿</span> <!-- Ícono de flecha hacia abajo -->
                    </a>
                    <div class="submenu">
                        <a href="{{ route('cat_rutaEq') }}">Nuestro Equipo</a>
                        <a href="{{ route('cat_rutaVis') }}">Mision,Vision y valores</a>
                        <a href="#">Responsabilidad Social Corporativa</a>
                    </div>
                </div>
                <div class="relative nav-item">
                    <a href="#"
                        class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200"><span>Servicios</span>
                        <span class="text-gray-600">▿</span> <!-- Ícono de flecha hacia abajo -->
                    </a>
                    <div class="submenu">
                        <a href="#">Materiales de Construccion</a>
                        <a href="#">Hotel</a>
                        <a href="#">Complejo deportivo</a>
                        <a href="#">ProFerretería</a>
                        <a href="#">Servicentro</a>
                    </div>
                </div>
                <a href="#"
                    class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200">Servicios</a>
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
            <div class="flex justify-between items-center p-4 bg-gray-700 text-white border-b border-gray-500">
                <span class="text-lg font-semibold">Menú</span>
                <button id="close-menu-button" class="text-white focus:outline-none hover:text-yellow-400 transition-colors duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="mt-4">
               
                <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Inicio</a>
                <hr class="border-t border-gray-50 ">

                <!-- Menú desplegable para Servicios -->
                <div class="relative">
                    <button id="services-toggle"
                        class="block w-full text-left px-4 py-2 hover:bg-yellow-400 hover:text-black focus:outline-none">
                        Nosotros <span class="inline-block transform transition-transform duration-300"
                            id="arrow">▿</span>
                    </button>
                    <!-- Opciones desplegables de Nosotros -->
                    <div id="services-submenu" class="hidden pl-6">
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Equipo</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Mision,Vision</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Responsabilidad
                            Social Corporativa </a>
                        
                    </div>
                </div>
                <hr class="border-t border-gray-50 ">
                <!-- Menú desplegable para Servicios -->
                <div class="relative">
                    <button id="services-toggle2"
                        class="block w-full text-left px-4 py-2 hover:bg-yellow-400 hover:text-black focus:outline-none">
                        Servicios <span class="inline-block transform transition-transform duration-300"
                            id="arrow2">▿</span>
                    </button>
                    <!-- Opciones desplegables de Servicios -->
                    <div id="services-submenu2" class="hidden pl-6">
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Servicio1</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Servicio2</a>
                        
                    </div>
                </div>
                <hr class="border-t border-gray-50 ">
                <a href="#" class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Contacto</a>
                <hr class="border-t border-gray-50 ">
            </nav>
        </div>
    </header><br><br><br>
    <!-- Script para mostrar y ocultar el submenú -->
    <script>
        document.getElementById('services-toggle').addEventListener('click', function(event) {
            event.preventDefault();
            const submenu = document.getElementById('services-submenu');
            const arrow = document.getElementById('arrow');

            // Alterna la visibilidad del submenú
            submenu.classList.toggle('hidden');

            // Rota la flecha
            arrow.classList.toggle('rotate-180');
        });
        document.getElementById('services-toggle2').addEventListener('click', function(event) {
            event.preventDefault();
            const submenu = document.getElementById('services-submenu2');
            const arrow = document.getElementById('arrow2');

            // Alterna la visibilidad del submenú
            submenu.classList.toggle('hidden');

            // Rota la flecha
            arrow.classList.toggle('rotate-180');
        });
    </script>
    <!-- Cuerpo -->
    <section>
        @yield('contenido')
    </section>

    <!-- Footer -->
    <footer>

        <div class="bg-gray-300 w-full py-8">
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.getElementById("menu-button");
            const closeMenuButton = document.getElementById("close-menu-button");
            const mobileMenu = document.getElementById("mobile-menu");

            // Abre el menú al hacer clic en el botón de menú
            menuButton.addEventListener("click", function() {
                mobileMenu.classList.remove("translate-x-full");
                mobileMenu.classList.add("translate-x-0");
            });

            // Cierra el menú al hacer clic en el botón de cerrar
            closeMenuButton.addEventListener("click", function() {
                mobileMenu.classList.remove("translate-x-0");
                mobileMenu.classList.add("translate-x-full");
            });
        });
    </script>


</body>

</html>
