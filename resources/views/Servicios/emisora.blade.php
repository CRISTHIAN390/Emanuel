@extends('layouts.plantilla')
@section('Emisora')
@section('contenido')
<div class="min-h-screen flex items-center justify-center animate__animated animate__zoomIn">
    <div class="w-full max-w-4xl px-4 py-8">
        <!-- Encabezado -->
        <div class="text-center bg-white shadow-md rounded-lg py-5 mb-8">
            <h5 class="text-2xl sm:text-3xl font-bold text-gray-800" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                Emisora - en vivo
            </h5>
        </div>
        
        <!-- Contenedor principal -->
        <div id="emisora" class="flex justify-center">
            <div class="radio-container bg-white shadow-lg rounded-xl p-6 flex flex-col sm:flex-row items-center gap-6 transform transition duration-300 hover:scale-[1.02] w-full">
                <!-- Imagen -->
                <div class="image-container flex-shrink-0">
                    <img src="{{ asset('/img/Contenido/envivo.jpeg') }}" alt="Logo Emisora"
                        class="w-40 h-40 sm:w-48 sm:h-48 object-cover rounded-full shadow-lg shadow-blue-500/50 border-4 border-blue-100">
                </div>
                
                <!-- Contenedor de información -->
                <div class="radio-info flex-1 text-center sm:text-left">
                    <div class="radio-header mb-3">
                        <div class="inline-flex items-center bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold mb-2">
                            <span class="relative flex h-2 w-2 mr-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600"></span>
                            </span>
                            EN VIVO
                        </div>
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-800">Radio Emanuel</h2>
                        <p class="text-gray-600 text-lg">"Un mundo mejor"</p>
                    </div>
                    
                    <div class="mb-4">
                        <p class="text-gray-700"><span class="font-semibold">Horario:</span> 07:00 - 23:00</p>
                        <p class="text-gray-700"><span class="font-semibold">Frecuencia:</span> 105.3 FM</p>
                    </div>

                    <button id="playButton" onclick="toggleAudio()"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition duration-300 w-full sm:w-auto flex items-center justify-center gap-2">
                        <svg id="playIcon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M4 4l12 6-12 6V4z"></path>
                        </svg>
                        <svg id="pauseIcon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M6 4h4v12H6V4zm4 0h4v12h-4V4z"></path>
                        </svg>
                        <span id="buttonText">Escuchar en vivo</span>
                    </button>
                    
                    <audio id="radioStream" preload="none">
                        <source src="" type="audio/mpeg">
                        Tu navegador no soporta el audio en streaming.
                    </audio>
                    
                    <!-- Indicador de carga -->
                    <div id="loadingIndicator" class="hidden mt-2 text-blue-600 flex items-center justify-center sm:justify-start gap-2">
                        <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>Cargando transmisión...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    let audio = document.getElementById('radioStream');
    let playButton = document.getElementById('playButton');
    let playIcon = document.getElementById('playIcon');
    let pauseIcon = document.getElementById('pauseIcon');
    let buttonText = document.getElementById('buttonText');
    let loadingIndicator = document.getElementById('loadingIndicator');
    
    // IMPORTANTE: Aquí debes colocar la URL de tu stream de audio
    // Puedes usar una URL directa o la codificación Base64 como en el ejemplo original
    // Ejemplo con URL directa:
    let streamUrl = "https://tudominio.com/tustream.mp3";
    
    // Ejemplo con Base64 (descomenta la siguiente línea si prefieres usar Base64)
    // let streamUrl = atob("aHR0cHM6Ly9zMTQubXlyYWRpb3N0cmVhbS5jb20vMzE1OTIvbGlzdGVuLm1wMw==");
    
    // Estado del reproductor
    let isPlaying = false;
    let isLoading = false;
    
    // Configurar eventos del audio
    audio.addEventListener('play', () => {
        isPlaying = true;
        updateButtonState();
    });
    
    audio.addEventListener('pause', () => {
        isPlaying = false;
        updateButtonState();
    });
    
    audio.addEventListener('waiting', () => {
        isLoading = true;
        loadingIndicator.classList.remove('hidden');
        updateButtonState();
    });
    
    audio.addEventListener('canplay', () => {
        isLoading = false;
        loadingIndicator.classList.add('hidden');
    });
    
    audio.addEventListener('error', () => {
        isLoading = false;
        loadingIndicator.classList.add('hidden');
        swal("Error", "No se pudo conectar con la emisora. Inténtelo más tarde.", "error");
    });
    
    function toggleAudio() {
        if (audio.src === "") {
            // Primera vez que se hace clic
            isLoading = true;
            loadingIndicator.classList.remove('hidden');
            audio.src = streamUrl;
            audio.load(); // Forzar carga del stream
            
            audio.play()
                .then(() => {
                    // Éxito, manejado por los event listeners
                })
                .catch(error => {
                    isLoading = false;
                    loadingIndicator.classList.add('hidden');
                    swal("Error", "No se pudo reproducir la emisora. Asegúrese de permitir la reproducción de audio.", "error");
                });
        } else {
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }
    }
    
    function updateButtonState() {
        if (isLoading) {
            playButton.disabled = true;
            playButton.classList.add('opacity-75');
            return;
        }
        
        playButton.disabled = false;
        playButton.classList.remove('opacity-75');
        
        if (isPlaying) {
            playButton.classList.remove("bg-blue-600", "hover:bg-blue-700");
            playButton.classList.add("bg-red-600", "hover:bg-red-700");
            buttonText.innerText = "Detener";
            playIcon.classList.add("hidden");
            pauseIcon.classList.remove("hidden");
        } else {
            playButton.classList.remove("bg-red-600", "hover:bg-red-700");
            playButton.classList.add("bg-blue-600", "hover:bg-blue-700");
            buttonText.innerText = "Escuchar en vivo";
            playIcon.classList.remove("hidden");
            pauseIcon.classList.add("hidden");
        }
    }
</script>
@endsection