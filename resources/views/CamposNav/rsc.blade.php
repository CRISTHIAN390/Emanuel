@extends('layouts.plantilla')
@section('Navs', 'RSC')
@section('contenido')

 
<div class="relative min-h-screen flex py-8 flex-col animate__animated animate__zoomIn">
   
    <!-- Imagen de ancho completo como cabecera -->
    <div class="relative w-full animate__animated animate__zoomIn">
        <img src="/img/Contenido/Comunidad.jpg" alt="" class="w-full h-[300px] object-cover">
        <!-- Texto superpuesto en la parte inferior de la imagen -->
        <div class="absolute bottom-0 left-0 bg-black bg-opacity-60 text-white px-4 py-2">
            <p class="text-sm">Carretera **** – ****** - Huamachuco</p>
        </div>
    </div>

    <!-- Contenido de texto -->
    <div
        class="px-6 lg:px-16 py-10 bg-white text-gray-800 flex flex-col lg:flex-row lg:items-center lg:space-x-8 animate__animated animate__zoomIn">
        <!-- Texto de la sección -->
        <div class="lg:w-2/3">
            <h2 class="text-3xl font-semibold mb-4 border-b-4 border-indigo-500 inline-block">Gestión de Responsabilidad
                Social</h2>
            <p class="text-lg mt-4 text-justify animate__animated animate__zoomIn">
                En nuestra organización, asumimos el compromiso de contribuir a un desarrollo sostenible, reflejado en
                cada
                uno de nuestros proyectos de infraestructura. Nos dedicamos a cumplir con altos estándares de calidad en
                obras
                y servicios, mientras avanzamos hacia el cumplimiento de nuestros objetivos y métricas de
                responsabilidad
                social. Estos esfuerzos están orientados por nuestra Política de Responsabilidad Social y Desarrollo
                Sostenible,
                en sintonía con nuestra misión, visión y valores.
            </p>
            <p class="text-lg mt-4 text-justify animate__animated animate__zoomIn">
                Creemos firmemente en la importancia de incentivar y generar apoyo para las comunidades de escasos
                recursos,
                creando oportunidades y proporcionando herramientas que contribuyan a mejorar sus condiciones de vida. A
                través de nuestras iniciativas, buscamos fortalecer el tejido social, promover el crecimiento económico
                inclusivo y generar un impacto positivo y duradero en las comunidades donde operamos. Nuestro enfoque se
                basa en la colaboración con líderes comunitarios, ONG, y gobiernos locales, promoviendo la participación
                activa de todos los actores.
            </p>
            <p class="text-lg mt-4 text-justify animate__animated animate__zoomIn">
                Nuestro programa de responsabilidad social también incluye actividades de capacitación y educación para
                los
                miembros de estas comunidades, brindándoles habilidades que puedan ser aplicadas en su día a día y, a su
                vez, ayudándoles a integrarse mejor en el ámbito laboral. De esta manera, nos aseguramos de contribuir
                al
                desarrollo integral de las personas, generando valor compartido y construyendo un futuro más próspero
                para
                todos.
            </p>
        </div>

        <!-- Imagen adicional al lado derecho -->
        <div class="lg:w-1/3 mt-6 lg:mt-0 flex flex-col items-center space-y-4">
            <!-- Imagen -->
            <img src="/img/Contenido/Comunidad33.jpg" alt="Responsabilidad Social"
                class="w-full h-auto rounded-lg shadow-md">
            <!-- Pie de texto -->
            <p class="text-sm text-center mt-2 text-gray-600 italic">***** - *****, Huamachuco</p>
        </div>
    </div>
</div>

 
@endsection
