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
                <h2 class="text-xl font-semibold text-[#343C6A]">Productos en Inventario</h2>
                <img id="listado_ventas" class="w-full mt-4" src="images/categories.svg" alt="">
                <div class="container mx-auto px-4 sm:px-8">
                    <div class="py-8">
                        <div class="flex justify-between">
                            <h1 class="text-2xl font-semibold leading-tight">Products</h1>
                            <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Product</a>
                        </div>
                        <div class="my-4 overflow-x-auto">
                            <div class="min-w-full shadow rounded-lg overflow-hidden">
                                <table class="min-w-full leading-normal">
                                    <thead>
                                    <tr>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Stock</th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Price</th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Category</th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Supplier</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->id }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->name }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->description }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->stock }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->price }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->category->name }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $product->supplier->name }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
