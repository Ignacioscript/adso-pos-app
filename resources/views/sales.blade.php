@extends('layouts.layout')

@section('title', 'Sales')




@section('mainTitle', 'Ventas')



@section('content')
    <!-- main widget row containers -->
    <div class="space-y-6">

        <!-- superior_container -->
        <div class="grid grid-cols-4 gap-5">

            <!-- <div class="bg-white rounded-lg p-4">
                <img id="mibalance" src="images/miBalanceContainer.svg" alt="" class="w-full">
            </div> -->
            <div class="bg-white rounded-xl p-5">
                <img id="ventas_totales" class="w-full" src="images/ventas_totales.svg " alt="">
            </div>

            <div class="bg-white rounded-xl p-5">
                <img id="ultima_semana" class="w-full" src="images/ultima_semana.svg" alt="">
            </div>
            <div class="bg-white rounded-xl p-5">
                <img id="ultimo_mes" class="w-full" src="images/ultimo_mes.svg" alt="">
            </div>
            <div class="bg-white rounded-xl p-5">
                <img id="filtrar" class="w-full" src="images/filtrar.svg" alt="">
            </div>
        </div>



        <!-- bottom_container -->
{{--        <div class="grid grid-cols-1 gap-5">--}}

{{--            <div class="bg-gray-50 rounded-xl p-5">--}}
{{--                <h2 class="text-lg font-inter">Listado de Ventas</h2>--}}
{{--                <img id="listado_ventas" class="w-full" src="images/listado_ventas.svg" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="grid grid-cols-1 gap-5">
            <div class="bg-gray-50 rounded-xl p-5">
                <h2 class="text-lg font-inter">Listado de Ventas</h2>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID Venta</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Agregar Producto</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Example row -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Producto A</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$100</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-10-01</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Agregar</button>
                        </td>
                    </tr>
                    <!-- More rows can be added here -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
