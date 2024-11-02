@extends('layouts.plantilla')
@section('Navs', 'Inicio')
@section('contenido')
<div class="relative mt-4 bg-gray-100 py-12">
    <div class="container mx-auto px-6 lg:px-8 space-y-16">
        
        <!-- Sección 1: Servicentro Emanuel -->
        <div class="flex flex-col md:flex-row items-center mb-12">
            <div class="md:w-1/2 mb-6 md:mb-0">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Servicentro Emanuel</h2>
                <p class="text-gray-600">
                    Especializados en el mantenimiento y cuidado de vehículos, ofrecemos servicios de lavado, engrase y mantenimiento para transporte tanto liviano como pesado. Nuestro compromiso es garantizar que cada vehículo que atendemos esté en óptimas condiciones.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="/img/carrusel/equipo.jpg" alt="Servicentro Emanuel" class="max-w-sm rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Sección 2: Distribuidora Emanuel -->
        <div class="flex flex-col md:flex-row items-center mb-12">
            <div class="md:w-1/2 md:order-2 mb-6 md:mb-0">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Distribuidora Emanuel</h2>
                <p class="text-gray-600">
                    Dedicada a la venta de materiales de construcción al por mayor y menor, herramientas eléctricas, pinturas, equipos de protección personal y servicios de transporte. Nuestro equipo se esfuerza por ofrecer productos de alta calidad para la industria de la construcción.
                </p>
            </div>
            <div class="md:w-1/2 md:order-1 flex justify-center">
                <img src="/img/carrusel/equipo.jpg" alt="Distribuidora Emanuel" class="max-w-sm rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Sección 3: Servicios Sareli -->
        <div class="flex flex-col md:flex-row items-center mb-12">
            <div class="md:w-1/2 mb-6 md:mb-0">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Servicios Sareli</h2>
                <p class="text-gray-600">
                    Con una amplia experiencia en la venta de materiales de construcción y servicios de transporte, ofrecemos soluciones tanto para proyectos grandes como pequeños. Nuestro enfoque se basa en satisfacer las necesidades del sector de la construcción con productos de calidad.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="/img/carrusel/equipo.jpg" alt="Servicios Sareli" class="max-w-sm rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Sección 4: Hotel Emanuel -->
        <div class="flex flex-col md:flex-row items-center mb-12">
            <div class="md:w-1/2 md:order-2 mb-6 md:mb-0">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Hotel Emanuel</h2>
                <p class="text-gray-600">
                    Un espacio cómodo y acogedor dedicado al servicio de hospedaje, con instalaciones modernas para el descanso de nuestros huéspedes. También ofrecemos alquiler de salones para eventos, asegurando una experiencia completa y satisfactoria.
                </p>
            </div>
            <div class="md:w-1/2 md:order-1 flex justify-center">
                <img src="/img/carrusel/equipo.jpg" alt="Hotel Emanuel" class="max-w-sm rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Sección 5: Complejo Triple G -->
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-6 md:mb-0">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3">Complejo Triple G</h2>
                <p class="text-gray-600">
                    Un complejo dedicado al alquiler de espacios para eventos deportivos, ideal para quienes buscan un lugar adecuado para desarrollar actividades físicas y competiciones. Ofrecemos un ambiente adecuado y bien equipado para cualquier tipo de evento deportivo.
                </p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="/img/carrusel/equipo.jpg" alt="Complejo Triple G" class="max-w-sm rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</div>

@endsection
