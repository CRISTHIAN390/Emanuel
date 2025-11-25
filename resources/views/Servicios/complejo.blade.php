@extends('layouts.plantilla')
@section('Navs', 'Complejo')
@section('contenido')
    <!-- Contenido del servicio de alquiler de complejo deportivo -->
    <div class="relative      min-h-screen flex   flex-col animate__animated animate__zoomIn">
        <div class="relative mt-4 py-10 bg-white">
            <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-6xl">
                <div class="col-12 animate__animated animate__fadeIn">
                    <h2 class="text-center text-3xl font-bold text-gray-800 mb-6" style="font-family: Cooper Black">COMPLEJO
                        DEPORTIVO TRIPLE G</h2>
                    <p class="text-center text-gray-700 mb-8">
                        En nuestro complejo deportivo, brindamos una experiencia única y accesible para deportistas de todas
                        las edades. Ofrecemos instalaciones modernas y seguras, equipadas con la mejor tecnología y
                        diseñadas para crear un ambiente donde los jóvenes y aficionados puedan disfrutar plenamente de sus
                        actividades deportivas favoritas.
                    </p>

                    <!-- Primera fila -->
                    <div class="grid   lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp">
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex p-4">
                            <div
                                class=" my-4 flex p-8 bg-white rounded-xl text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500  lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg text-gray-800  font-bold  lg:text-left">Nuestro complejo deportivo</p>
                                    <ul class="list-disc list-inside text-gray-700 text-justify ">
                                        <li>Cancha de fútbol profesional con césped sintético</li>
                                        <li>Zona de entrenamiento con equipos modernos</li>
                                        <li>Espacios para eventos y actividades grupales</li>
                                        <li>Vestuarios y duchas higiénicas</li>
                                        <li>Seguridad constante</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Características de nuestro
                                    complejo deportivo</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Cancha de fútbol profesional con césped sintético</li>
                                    <li>Zona de entrenamiento con equipos modernos</li>
                                    <li>Espacios para eventos y actividades grupales</li>
                                    <li>Vestuarios y duchas higiénicas</li>
                                    <li>Seguridad constante</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex items-center justify-center w-full h-full">
                            <img src="/img/Publicidad/complejo1.jpg" alt="Complejo deportivo"
                                class="w-auto h-56 rounded-xl transition-transform duration-500 transform  ">
                        </div>
                    </div>

                    <!-- Segunda fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Imagen -->
                        <div class="order-1 lg:order-1 flex items-center justify-center w-full h-full">
                            <img src="/img/Publicidad/Comple1.jpg" alt="Complejo deportivo"
                                class="w-auto h-56 rounded-xl  transition-transform duration-500 transform ">
                        </div>
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-2 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl  text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500 lg:block hidden">
                                <p class="text-center">
                                    Ofrecemos horarios flexibles y paquetes especiales para eventos y entrenamientos
                                    personalizados. Nuestro complejo se adapta a tus necesidades, brindando la mejor
                                    experiencia para la práctica deportiva.
                                </p>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <p class="text-center text-gray-700 px-4 lg:hidden">
                                Ofrecemos horarios flexibles y paquetes especiales para eventos y entrenamientos
                                personalizados. Nuestro complejo se adapta a tus necesidades, brindando la mejor experiencia
                                para la práctica deportiva.
                            </p>
                        </div>

                    </div>

                    <!-- Tercera fila -->
                    <div class="grid gap-6 lg:grid-cols-2 lg:space-x-6 animate__animated animate__fadeInUp mt-6">
                        <!-- Texto en tarjeta solo en pantallas grandes -->
                        <div class="order-2 lg:order-1 flex items-center justify-center mt-6">
                            <div
                                class="flex items-center justify-center p-6 bg-white rounded-xl  text-gray-700 w-full lg:h-[300px] lg:transform lg:transition lg:duration-500  lg:block hidden">
                                <div class="text-center">
                                    <p class="text-lg font-semibold text-gray-800 mb-4">Beneficios de nuestro complejo
                                        deportivo</p>
                                    <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                        <li>Amplio estacionamiento gratuito</li>
                                        <li>Personal capacitado en primeros auxilios</li>
                                        <li>Accesibilidad para personas con movilidad reducida</li>
                                        <li>Áreas verdes y recreativas</li>
                                        <li>Programas de entrenamiento personalizados</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Texto sin tarjeta en pantallas pequeñas -->
                            <div class="lg:hidden text-gray-700 px-4">
                                <p class="text-center text-lg font-semibold text-gray-800">Beneficios de nuestro complejo
                                    deportivo</p>
                                <ul class="list-disc list-inside text-justify text-gray-700 mt-4">
                                    <li>Amplio estacionamiento gratuito</li>
                                    <li>Personal capacitado en primeros auxilios</li>
                                    <li>Accesibilidad para personas con movilidad reducida</li>
                                    <li>Áreas verdes y recreativas</li>
                                    <li>Programas de entrenamiento personalizados</li>
                                </ul>
                            </div>

                        </div>

                        <!-- Imagen -->
                        <div class="order-1 lg:order-2 flex items-center justify-center w-full h-full">
                            <img src="/img/Publicidad/imagencomplejo3.jpeg" alt="Ventajas del complejo deportivo"
                                class="w-auto h-56 rounded-xl  transition-transform duration-500 transform ">
                        </div>
                    </div>
                </div>



                <div
                    class="flex flex-col bg-gradient-to-br from-black via-blue-700 to-blue-500
    p-6 lg:p-10 rounded-xl shadow-2xl border border-white/10 mt-8">

                    <!-- Contenedor principal -->
                    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-8">

                        <!-- Información del complejo -->
                        <div class="flex-1 space-y-3">
                            <h3 class="text-2xl font-bold text-white">Datos del Complejo Deportivo Triple G</h3>
                            <p class="text-base text-white">Teléfono: +51 949 931 907</p>
                            <p class="text-base text-white">📍 Estamos ubicados en Av. Camino Real Mz32 Lt 2, Urb. La
                                Rinconada, Trujillo</p>
                            <p class="text-base text-white">
                                Opiniones:
                                <a href="https://www.google.com/maps/place/?q=place_id:ChIJbe3fGdQXrZERTSaX2GuwWc8"
                                    class="text-blue-300 underline hover:text-white transition-colors duration-200">
                                    <b>(Leer las Opiniones)</b>
                                </a>
                            </p>
                        </div>

                        <!-- Imagen botón de Google Maps -->
                        <div class="flex justify-center lg:justify-end">
                            <a href="https://www.google.com/maps/place/?q=place_id:ChIJbe3fGdQXrZERTSaX2GuwWc8"
                                target="_blank" rel="nofollow noopener">
                                <img decoding="async" loading="lazy"
                                    class="w-48 sm:w-56 lg:w-64 xl:w-72 h-auto rounded-xl shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-xl hover:rotate-1 hover:translate-y-1"
                                    src="/img/maps.png" alt="Google Maps Button">
                            </a>
                        </div>
                    </div>

                    <!-- Horarios -->
                    <div class="mt-10">
                        <h4
                            class="text-lg lg:text-xl font-extrabold text-white tracking-wider mb-4 flex items-center gap-2">
                            🕒 <span class="uppercase">Horarios de Atención</span>
                        </h4>

                        <div
                            class="bg-gradient-to-br from-green-600 to-emerald-500 rounded-xl shadow-xl px-6 py-5 
                border-[3px] border-white/20 hover:border-yellow-400 transition-all duration-300 
                hover:scale-[1.03] text-center text-white">

                            <p class="font-extrabold text-base sm:text-lg tracking-wide drop-shadow-md">
                                Lunes - Domingo
                            </p>
                            <p class="text-sm sm:text-base font-medium mt-1 opacity-90">
                                8:00 AM – 11:00 PM
                            </p>

                            <div class="mt-3 text-xs sm:text-sm font-bold text-yellow-300 tracking-widest">
                                ⚽ ¡Cancha disponible!
                            </div>
                        </div>
                    </div>

                </div>


                <!--
                        <div class="flex flex-col bg-gradient-to-br from-blue-50 to-blue-100 p-6 lg:p-10 rounded-lg shadow-lg mt-8 border-2 border-yellow-300">
                            <p class="text-center text-2xl font-bold mb-4 text-blue-800">DESCUENTO EXCLUSIVO SOLO PARA CLIENTES VIP</p>
                        
                            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                                <div class="relative group">
                                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 rounded-lg blur opacity-70 group-hover:opacity-100 transition duration-300"></div>
                                    <div class="relative flex items-center justify-center">
                                        <div id="contenedorNumero" class="bg-white p-2 rounded-lg shadow-lg flex items-center justify-center">
                                            <div id="numeroAleatorio" class="text-6xl font-extrabold text-yellow-600 px-8 py-6">
                                                --
                                            </div>

                                            <span class="text-4xl font-bold text-yellow-600 pb-1">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <button id="btnDescuento"
                                        class="relative overflow-hidden bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 text-white font-bold py-4 px-10 rounded-lg transition-all duration-300 ease-in-out transform hover:scale-105 shadow-md hover:shadow-xl">
                                        <span class="relative z-10 flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-5-4h10" />
                                            </svg>
                                            Obtener Descuento
                                        </span>
                                        <span class="absolute top-0 left-0 w-full h-full bg-white opacity-20 transform -skew-x-12 translate-x-full transition-transform duration-700 ease-in-out group-hover:translate-x-0"></span>
                                    </button>
                                    <p class="text-sm text-gray-600 italic">¡Haz clic y descubre tu descuento!</p>
                                </div>
                            </div>
                            <div id="mensajeDescuento" class="mt-4 text-center hidden">
                                <p id="textoDescuento" class="text-lg font-semibold text-green-600">¡Felicidades! Usa este descuento en tu próxima compra</p>
                                <p id="validezDescuento" class="text-sm text-gray-600">Válido por 24 horas</p>
                            </div>
                        </div>
                    -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let botonPulsado = false;
                        const btnDescuento = document.getElementById('btnDescuento');
                        const numeroAleatorio = document.getElementById('numeroAleatorio');
                        const contenedorNumero = document.getElementById('contenedorNumero');
                        const mensajeDescuento = document.getElementById('mensajeDescuento');
                        const textoDescuento = document.getElementById('textoDescuento');
                        const validezDescuento = document.getElementById('validezDescuento');

                        // Valores posibles (solo para la animación visual)
                        const valoresPosibles = [5, 10, 15, 20, 25, 30, 35, 40];
                        let intervalo;

                        btnDescuento.addEventListener('click', function() {
                            if (botonPulsado) return;
                            botonPulsado = true;
                            mensajeDescuento.classList.add('hidden');
                            contenedorNumero.classList.add('animate-pulse');
                            const textoOriginal = btnDescuento.innerHTML;
                            btnDescuento.innerHTML = '<span class="relative z-10">Generando...</span>';
                            btnDescuento.disabled = true;
                            btnDescuento.classList.add('cursor-not-allowed', 'opacity-80');
                            let contador = 0;
                            const duracionTotal = 40;
                            intervalo = setInterval(() => {
                                // Durante la animación, mostrar valores aleatorios del array
                                const indiceAleatorio = Math.floor(Math.random() * valoresPosibles.length);
                                numeroAleatorio.innerText = valoresPosibles[indiceAleatorio];
                                contador++;
                                const intervaloActual = contador < duracionTotal * 0.7 ? 100 :
                                    contador < duracionTotal * 0.9 ? 150 : 250;
                                if (contador >= duracionTotal) {
                                    clearInterval(intervalo);
                                    fetch('{{ route('generar.descuento') }}', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                'X-Requested-With': 'XMLHttpRequest'
                                            },
                                            body: JSON.stringify({})
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            // Mostrar el resultado del servidor
                                            numeroAleatorio.innerText = data.descuento;
                                            textoDescuento.innerText = data.mensaje;
                                            validezDescuento.innerText = data.validez;

                                            // Quitar animación de pulso
                                            contenedorNumero.classList.remove('animate-pulse');

                                            // Añadir animación de resultado final
                                            numeroAleatorio.classList.add('scale-110');
                                            setTimeout(() => {
                                                numeroAleatorio.classList.remove('scale-110');
                                            }, 500);

                                            // Mostrar mensaje de descuento
                                            mensajeDescuento.classList.remove('hidden');

                                            // Restaurar botón
                                            setTimeout(() => {
                                                btnDescuento.innerHTML = textoOriginal;
                                                btnDescuento.disabled = false;
                                                btnDescuento.classList.remove('cursor-not-allowed',
                                                    'opacity-80');
                                                botonPulsado = false;
                                            }, 2000);
                                        })
                                        .catch(error => {
                                            console.error('Error:', error);
                                            // Restaurar en caso de error
                                            numeroAleatorio.innerText = '--';
                                            contenedorNumero.classList.remove('animate-pulse');
                                            btnDescuento.innerHTML = textoOriginal;
                                            btnDescuento.disabled = false;
                                            btnDescuento.classList.remove('cursor-not-allowed',
                                                'opacity-80');
                                            botonPulsado = false;
                                        });
                                }
                            }, 100);
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    </div>
@endsection
