<!-- menu container -->
<div class="menu_container space-y-6">

{{--    <div id="dashboard" class="flex items-center cursor-pointer" onclick="location.href='/dashboard/dashboard.html'">--}}
{{--        <img src="images/home_icon.svg" alt="">--}}
{{--        <x-nav-links href="/" :active="request()->is('/')">Dashboard</x-nav-links>--}}
{{--    </div>--}}

{{--    <div id="sales" class="flex items-center cursor-pointer">--}}
{{--        <img src="images/ventas_icon.svg" alt="">--}}
{{--        <x-nav-links href="/sales" :active="request()->is('sales')">Venta</x-nav-links>--}}
{{--    </div>--}}

{{--    <div id="inventory" class="flex items-center cursor-pointer" onclick="location.href='/inventory/inventory.html'">--}}
{{--        <img src="images/economic_icon.svg" alt="">--}}
{{--        <x-nav-links href="/stock" :active="request()->is('stock')">Inventario</x-nav-links>--}}
{{--    </div>--}}

{{--    <div id="reports" class="flex items-center cursor-pointer" onclick="location.href='/reports/reports.html'">--}}
{{--        <img src="images/reportes_icon.svg" alt="">--}}
{{--        <x-nav-links href="/reports" :active="request()->is('reports')">Reportes</x-nav-links>--}}
{{--    </div>--}}

{{--    <div  id="users" class="flex items-center cursor-pointer" onclick="location.href='/users/users.html'">--}}
{{--        <img src="images/client_icon.svg" alt="">--}}
{{--        <x-nav-links href="/customers" :active="request()->is('customers')">Clientes</x-nav-links>--}}
{{--    </div>--}}


    <div class="block px-2 py-2 border">
        <a href="/" class="{{request()->is('/') ? 'text-blue-800 font font-semibold':'text-black hover:underline'}}" >
            <img src="images/home_icon.svg" alt="">
            Dashboard</a>
    </div>

    <div class="block px-2 py-2 border">
        <a href="/sales" class="{{request()->is('sales') ? 'text-blue-800 font font-semibold':'text-black hover:underline'}}" >
            <img src="images/home_icon.svg" alt="">
            Ventas</a>
    </div>

    <div class="block px-2 py-2 border">

        <a href="{{route('products.index')}}" class="{{request()->is('clients') ? 'text-blue-800 font font-semibold':'text-black hover:underline'}}" >
            <img src="images/home_icon.svg" alt="">
            Stock</a>
    </div>

    <div class="block px-2 py-2 border">

        <a href="/reports" class="{{request()->is('reports') ? 'text-blue-800 font font-semibold':'text-black hover:underline'}}" >
            <img src="images/home_icon.svg" alt="">
            Reportes</a>
    </div>

    <div class="block px-2 py-2 border">

        <a href="/customers" class="{{request()->is('clients') ? 'text-blue-800 font font-semibold':'text-black hover:underline'}}" >
            <img src="images/home_icon.svg" alt="">
            Clientes</a>
    </div>


</div>
