<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>GrupoEmanuel</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
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

<body class="bg-white">

    <!-- Encabezado -->
    <header class="bg-white shadow-md fixed top-0 w-full z-20 top-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}">
                <div class="flex justify-center sm:justify-start w-full sm:w-auto items-center logo">
                    <img src="/img/logo.png" alt="Grupo Emanuel" class="h-15">
                </div>
            </a>
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
                        <a href="{{ route('cat_rutarsc') }}">Responsabilidad Social Corporativa</a>
                    </div>
                </div>
                <div class="relative nav-item">
                    <a href="#"
                        class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200"><span>Servicios</span>
                        <span class="text-gray-600">▿</span> <!-- Ícono de flecha hacia abajo -->
                    </a>
                    <div class="submenu">
                        <a href="{{ route('serv_hotel') }}">Hotel</a>
                        <a href="{{ route('serv_complejo') }}">Complejo deportivo</a>
                        <a href="{{ route('serv_ferreteria') }}">ProFerretería</a>
                        <a href="{{ route('serv_servicentro') }}">Servicentro</a>
                    </div>
                </div>

                <a href="{{ route('serv_consulta') }}"
                    class="nav-item py-4 px-6 bg-transparent text-gray-800 font-semibold rounded-lg hover:bg-yellow-400 hover:text-gray-900 transition duration-200">Contacto</a>
            </nav>

            <!-- Botón de menú móvil -->
            <button id="menu-button" class="md:hidden">
                <i class="fas fa-bars text-gray-900 text-xl"></i>
            </button>
        </div>

        <!-- Menú lateral para pantallas pequeñas -->
        <div id="mobile-menu"
            class="fixed top-0 right-0 w-64 h-full bg-gray-800 text-white transform translate-x-full transition-transform duration-300 ease-in-out z-30">
            <div class="flex justify-between items-center p-4 bg-gray-700 text-white border-b border-gray-500">
                <span class="text-lg font-semibold">Menú</span>
                <button id="close-menu-button"
                    class="text-white focus:outline-none hover:text-yellow-400 transition-colors duration-200">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
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
                        <a href="{{ route('cat_rutaEq') }}"
                            class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Equipo</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="{{ route('cat_rutaVis') }}"
                            class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Mision,Vision</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="{{ route('cat_rutarsc') }}"
                            class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Responsabilidad
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
                        <a href="{{ route('serv_hotel') }}"
                            class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Hotel</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="{{ route('serv_complejo') }}"
                            class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Complejo deportivo</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="{{ route('serv_ferreteria') }}"
                            class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Ferreteria</a>
                        <hr class="border-t border-gray-50 ">
                        <a href="{{ route('serv_servicentro') }}"
                            class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Servicentro</a>
                    </div>
                </div>
                <hr class="border-t border-gray-50 ">
                <a href="{{ route('serv_consulta') }}"
                    class="block px-4 py-2 hover:bg-yellow-400 hover:text-black">Contacto</a>
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
        <div class="relative      min-h-screen flex   flex-col ">
            @yield('contenido')
        </div>
        <a href="https://wa.me/917700319?text=Me%20gustaría%20consultar%20el%20informacion" class="whatsapp"
            target="_blank">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
    </section>
    <!-- Footer -->
    <footer>
        <div class="w-full py-8" style="background: #ef8e00;">
            <div
                class="flex flex-col md:flex-row justify-center items-center md:space-x-16 space-y-4 md:space-y-0 text-white mx-auto px-4">

                <!-- Sección de Correo -->
                <div class="flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M21 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2l9 5 9-5zm0 2.76l-9 5-9-5V18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7.24z" />
                    </svg>
                    <div>
                        <p class="text-xl font-semibold" style="color:#000823;">Correo Electrónico</p>
                        <p class="text-lg" style="color:#000823;">GEmanuel@grupoemanuelrlg.com</p>
                    </div>
                </div>

                <!-- Sección de Teléfono -->
                <div class="flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.08-.21 11.72 11.72 0 0 0 3.7.6 1 1 0 0 1 1 1v3.22a1 1 0 0 1-1 1A16 16 0 0 1 3 5a1 1 0 0 1 1-1h3.18a1 1 0 0 1 1 1 11.72 11.72 0 0 0 .6 3.7 1 1 0 0 1-.21 1.08l-2.2 2.2z" />
                    </svg>
                    <div>
                        <p class="text-xl font-semibold" style="color:#000823;">Llámanos</p>
                        <p class="text-lg" style="color:#000823;">+51 949 931 907</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="w-full py-8 bg-gray-900 text-white" style="background: #000823">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap md:flex-nowrap justify-between items-start">

                    <!-- Columna Vacía Izquierda -->
                    <div class="w-full md:w-1/12"></div>

                    <!-- Información sobre Fundación -->
                    <div class="w-full md:w-3/12">
                        <!-- Contenedor del Logo -->
                        <div class="flex justify-center mb-4">
                            <img src="/img/logo-n.png" alt="Logo Fundación Emanuel" class="w-40 object-contain">
                        </div>
                        <!-- Descripción -->
                        <p class="text-gray-400 text-sm leading-relaxed text-justify" style="padding-right: 20px;">
                            Fundación Emanuel proporciona recursos para potenciar las habilidades de sus clientes, con
                            énfasis en proyectos sostenibles, innovación y apoyo al desarrollo personal y profesional,
                            promoviendo el progreso del país.
                        </p>
                    </div>


                    <!-- Menú de Navegación -->
                    <div class="w-full md:w-2/12">
                        <h2 class="text-lg font-semibold text-gray-200 mb-4">Menú</h2>
                        <ul class="list-disc list-inside space-y-2 text-gray-400">
                            <li><a href="{{ route('home') }}" class="hover:text-red-500">Inicio</a></li>
                            <li><a href="{{ route('cat_rutaEq') }}" class="hover:text-red-500">Nuestro Equipo</a>
                            </li>
                            <li><a href="{{ route('cat_rutaVis') }}" class="hover:text-red-500">Visión, Misión y
                                    Valores</a></li>
                            <li><a href="{{ route('serv_consulta') }}" class="hover:text-red-500">Contáctanos</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Información de Contacto -->
                    <div class="w-full md:w-3/12">
                        <h2 class="text-lg font-semibold text-gray-200 mb-4">Contacto</h2>
                        <p class="text-gray-400 text-sm">Dirección: Avenida Camino Real, Mz32 Lt.2, Trujillo, Perú</p>
                        <p class="text-gray-400 text-sm mt-2">Celular: +51 949 931 907</p>
                        <p class="text-gray-400 text-sm mt-2">Correo: GEmanuel@grupoemanuelrlg.com</p>
                    </div>

                    <!-- Servicios -->
                    <div class="w-full md:w-2/12">
                        <h2 class="text-lg font-semibold text-gray-200 mb-4">Servicios</h2>
                        <ul class="list-disc list-inside space-y-2 text-gray-400">
                            <li><a href="{{ route('serv_hotel') }}" class="hover:text-red-500">Hotel</a></li>
                            <li><a href="{{ route('serv_complejo') }}" class="hover:text-red-500">Complejo
                                    Deportivo</a>
                            </li>
                            <li><a href="{{ route('serv_ferreteria') }}" class="hover:text-red-500">ProFerretería</a>
                            </li>
                            <li><a href="{{ route('serv_servicentro') }}" class="hover:text-red-500">Servicentro</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Columna Vacía Derecha -->
                    <div class="w-full md:w-1/12"></div>
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
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <!-- Script para mostrar el toast de bienvenida al iniciar la sesión -->
    <script>
        // Función para mostrar el toast de bienvenida
        function showWelcomeToast() {
        if (!sessionStorage.getItem('hasVisited')) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                background: '#FFFFFF', // Color de fondo
                color: '#000000',
                iconColor: '#0ed145',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                },
            });
    
            Toast.fire({
                icon: 'success',
                title: '¡Bienvenido a Grupo Emanuel! Nos alegra tenerte con nosotros. 👋😃',
                customClass: {
                    popup: 'animate__animated animate__slideInRight', // Clases de Animate.css
                },
            });
    
            // Marcar al usuario como que ya ha visitado durante la sesión actual
            sessionStorage.setItem('hasVisited', 'true');
        }
        }
    
        // Llamada a la función al cargar la página
        document.addEventListener('DOMContentLoaded', showWelcomeToast);
    </script>

</body>

</html>
