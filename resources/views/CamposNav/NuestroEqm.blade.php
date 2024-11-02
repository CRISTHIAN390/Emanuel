@extends('layouts.plantilla')
@section('Navs', 'Vision')
@section('contenido')

    <div class="relative mt-4 bg-gradient-to-b from-yellow-300 to-white py-10">
        <div class="container mx-auto px-6 lg:px-8 space-y-10 lg:max-w-5xl">

            <!-- Tarjeta de Operaciones -->
            <div
                class="bg-white rounded-2xl shadow-2xl overflow-hidden p-10 transition-transform transform hover:scale-105 duration-300 flex flex-col lg:flex-row items-center justify-center text-center lg:text-left animate__animated animate__zoomIn">
                <div class="lg:w-1/2 mb-6 lg:mb-0 lg:pr-6 ">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3" style="font-family: Cooper Black">Operaciones</h2>
                    <p class="text-gray-900" style="font-family: Calibri;text-align: justify;">
                        Nuestro equipo de Operaciones está compuesto por especialistas dedicados al tratamiento y manejo de
                        nuestros productos. Ellos se encargan de la supervisión de calidad, el procesamiento eficiente y el
                        cumplimiento de altos estándares en cada etapa de producción, asegurando que cada tarea se realice
                        con precisión y compromiso.
                    </p>
                </div>
                <div class="lg:w-1/2 flex justify-center ">
                    <img src="/img/carrusel/equipo2.jpg" alt="Operaciones"
                        class="w-1/2 rounded-xl shadow-lg transition-transform duration-500 hover:scale-110">
                </div>
            </div>

            <!-- Tarjeta de Logística -->
            <div
                class="bg-white rounded-2xl shadow-2xl overflow-hidden p-10 transition-transform transform hover:scale-105 duration-300 flex flex-col lg:flex-row items-center justify-center text-center lg:text-left animate__animated animate__zoomIn">

                <div class="lg:w-1/2 mb-6 lg:mb-0 lg:pr-6">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3" style="font-family: Cooper Black">Logística</h2>
                    <p class="text-gray-600" style="font-family: Calibri;text-align: justify;">
                        Nuestro equipo de Logística cuenta con una flota moderna y personal capacitado para la entrega
                        puntual y segura de materiales de construcción y productos de distribución ferretera. Nos aseguramos
                        de que cada pedido llegue en tiempo y forma, con una planificación precisa que optimiza cada envío y
                        mantiene altos niveles de eficiencia.
                    </p>
                </div>

                <div class="lg:w-1/2 flex justify-center order-last lg:order-first">
                    <img src="/img/carrusel/equipo2.jpg" alt="Logística"
                        class="w-1/2 max-w-xs lg:max-w-sm rounded-xl shadow-lg transition-transform duration-500 hover:scale-110">
                </div>
            </div>

            <!-- Tarjeta de Comercial -->
            <div
                class="bg-white rounded-2xl shadow-2xl overflow-hidden p-10 transition-transform transform hover:scale-105 duration-300 flex flex-col lg:flex-row items-center justify-center text-center lg:text-left animate__animated animate__zoomIn">

                <div class="lg:w-1/2 mb-6 lg:mb-0 lg:pr-6">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3" style="font-family: Cooper Black">Comercial</h2>
                    <p class="text-gray-600" style="font-family: Calibri;text-align: justify;">
                        El equipo de Comercial está conformado por profesionales expertos en ventas y relaciones
                        comerciales. Trabajan de la mano con nuestros clientes para entender sus necesidades y ofrecerles
                        soluciones personalizadas, manteniendo un enfoque en la satisfacción y fidelización a largo plazo.
                    </p>
                </div>

                <div class="lg:w-1/2 flex justify-center order-last lg:order-first">
                    <img src="/img/carrusel/equipo2.jpg" alt="Comercial"
                        class="w-1/2 max-w-xs lg:max-w-sm rounded-xl shadow-lg transition-transform duration-500 hover:scale-110">
                </div>
            </div>

            <!-- Tarjeta de Gerencia -->
            <div
                class="bg-white rounded-2xl shadow-2xl overflow-hidden p-8 transition-transform transform hover:scale-105 duration-300 flex flex-col lg:flex-row items-center justify-center text-center lg:text-left animate__animated animate__zoomIn relative group">
                <div class="lg:w-1/2 mb-6 lg:mb-0 lg:pr-6">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-3" style="font-family: Cooper Black">Gerencia</h2>
                    <p class="text-gray-600" style="font-family: Calibri; text-align: justify;">
                        Nuestro equipo de Gerencia lidera con una visión estratégica y compromiso constante con la
                        excelencia. La gerencia se encarga de guiar cada área de la empresa, estableciendo objetivos claros
                        y promoviendo un ambiente de innovación y desarrollo profesional para todo nuestro equipo.
                    </p>
                </div>
                <div class="lg:w-1/2 flex justify-center">
                    <img src="/img/carrusel/equipo2.jpg" alt="Gerencia"
                        class="w-1/2 max-w-xs lg:max-w-sm rounded-xl shadow-lg transition-transform duration-500 hover:scale-110">
                </div>

                <!-- Efecto de brillo al pasar el mouse -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-300 pointer-events-none rounded-2xl">
                </div>
            </div>


        </div>
    </div>

@endsection
