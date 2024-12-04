@extends('layouts.layout')

@section('title', 'Home')



@section('mainTitle', 'Dashboard')



@section('content')

    <div >
        <div class="flex-col grid grid-cols-4 gap-5">

            <div class="bg-white rounded-lg p-4">
                <img id="mibalance" src="images/miBalanceContainer.svg" alt="" class="w-full">
            </div>

            <div class="bg-white rounded-lg p-4">
                <img id="mibalance2" src="images/IngresosContainer.svg" alt="" class="w-full">
            </div>

            <div class="bg-white rounded-lg p-4">
                <img id="mibalance3" src="images/GastosContainer.svg" alt="" class="w-full">
            </div>

            <div class="bg-white rounded-lg p-4">
                <img id="mibalance4" src="images/InventarioContainer.svg" alt="" class="w-full">
            </div>
        </div>

        <!-- middle_container -->
        <div id="middle_container" class="grid grid-cols-2 gap-5">

            <div class="bg-gray-100 rounded-lg p-4">
                <h2 class="text-xl font-bold mb-4">Ultimas Transacciones</h2>
                <img id="ultimas_transacciones_img" src="images/last-transactions-widget.svg" alt="" class="w-full">
            </div>

            <div class="bg-gray-100 rounded-lg p-4">
                <img id="calendarWidget" src="images/calendarWidget.svg" alt="" class="w-full">
            </div>
        </div>

        <!-- bottom_container -->
        <div id="bottom_container" class="grid grid-cols-2 gap-5">

            <div class="bg-gray-100 rounded-lg p-4">
                <h2 class="text-xl font-bold mb-4">Balance Semanal</h2>
                <img id="mibalance" src="images/statisticContainer.svg" alt="" class="w-full">
            </div>

            <div class="bg-gray-100 rounded-lg p-4">
                <h2 class="text-xl font-bold mb-4">Ultimos Clientes</h2>
                <img id="mibalance" src="images/last_clients_container.svg" alt="" class="w-full">
            </div>

        </div>
    </div>

@endsection



