@extends('layouts.layout')

@section('title')
    Reports Page
@endsection


@section('mainTitle')
    Reportes
@endsection

@section('content')
    <!-- main widget row containers -->
    <div class=" border-red-500 mt-2 p-2">
        <div class="flex flex-row m-2 py-2  border-blue-500">

            <div class="bg-white  rounded-[20px] m-2">
                <img id="ventas_totales" src="images/flter.svg" alt="" class="mt-5  w-full">
            </div>
            <div class="bg-white  rounded-[20px] m-2">
                <img id="ultima_semana" src="images/calendar.svg" alt="" class="mt-5  w-full">
            </div>
            <div class="bg-white border-double rounded-[20px] m-2">
                <img id="ultimo_mes" src="images/promedioVentas.svg" alt="" class="mt-5  w-full">
            </div>

        </div>

        <div class="flex flex-row m-2 py-2  border-blue-500">
            <div class="bg-[#F5F7FA]  rounded-[20px] m-2">
                <h2 class="pl-2 text-lg text-[#343C6A] font-inter">Listado de Ventas</h2>
                <img id="listado_ventas" src="images/transaccionesRecientes.svg" alt="">
            </div>
        </div>

    </div>
@endsection
