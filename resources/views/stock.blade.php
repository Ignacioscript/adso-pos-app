@extends('layouts.layout')

@section('title')
    Stock Page
@endsection


@section('mainTitle')
    Inventario
@endsection

@section('content')
    <!-- main widget row containers -->
    <div class="mt-5 p-2">

        <!-- container widgets superiores -->
        <div class="flex gap-4">

            <div class="bg-white rounded-lg w-1/4">
                <img id="ventas_totales" class="mt-4 w-full" src="images/proximo_agotarse.svg" alt="">
            </div>
            <div class="bg-white rounded-lg w-1/4">
                <img id="ultima_semana" class="mt-4 w-full" src="images/proxima_compra.svg" alt="">
            </div>
            <div class="bg-white rounded-lg w-1/4">
                <img id="ultimo_mes" class="mt-4 w-full" src="images/compra_reciente.svg" alt="">
            </div>
            <div class="bg-white rounded-lg w-1/4">
                <img id="filtrar" class="mt-4 w-full" src="images/filtrar.svg" alt="">
            </div>
        </div>

        <!-- bottom_container -->
        <div class="flex gap-4 mt-5">
            <div class="bg-gray-100 rounded-lg p-4 w-full">
                <h2 class="text-xl font-semibold text-[#343C6A]">Listado de Ventas</h2>
                <img id="listado_ventas" class="w-full mt-4" src="images/categories.svg" alt="">
            </div>
        </div>

    </div>

@endsection
