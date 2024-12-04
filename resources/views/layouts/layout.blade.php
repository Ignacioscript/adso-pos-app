
<!DOCTYPE html>

<html lang="en" class="h-full bg-gray-100" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{--    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col bg-gray-100 h-full">
<!-- superior navigation bar-->
<header class="w-full">
    @include('components.sup-nav-bar')
</header>

<div class="flex flex-1">
    <!-- Left navigation bar container -->
    <nav class="w-64">
        @include('layouts.left-nav')
    </nav>

    <!-- main content area -->
    <div class="flex-1 p-6">
        @yield('content')
    </div>
</div>
</body>

{{--<body class="flex bg-gray-100 h-full">--}}

{{--<!-- Left navigation bar container -->--}}
{{--<nav>--}}
{{--    @include('layouts.left-nav')--}}
{{--</nav>--}}

{{--<!-- superior navigation bar-->--}}
{{--<header class="w-full">--}}
{{--    @include('components.sup-nav-bar')--}}
{{--</header>--}}




{{--<!-- main widget row containers -->--}}

{{--    <main class="space-y-6 flex" >--}}
{{--        <div class="flex-col"> @yield('content')</div>--}}

{{--        <!-- superior_container -->--}}
{{--        <x-body></x-body>--}}

{{--    </main>--}}



{{--    <main class="space-y-6 flex flex-col p-6">--}}
{{--        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">--}}
{{--            <div class="bg-white p-4 rounded shadow">--}}
{{--                <h3 class="text-lg font-semibold">Card Title 1</h3>--}}
{{--                <p>Information about the business...</p>--}}
{{--            </div>--}}
{{--            <div class="bg-white p-4 rounded shadow">--}}
{{--                <h3 class="text-lg font-semibold">Card Title 2</h3>--}}
{{--                <p>Information about the business...</p>--}}
{{--            </div>--}}
{{--            <div class="bg-white p-4 rounded shadow">--}}
{{--                <h3 class="text-lg font-semibold">Card Title 3</h3>--}}
{{--                <p>Information about the business...</p>--}}
{{--            </div>--}}
{{--            <!-- Add more cards as needed -->--}}
{{--        </div>--}}
{{--    </main>--}}

{{--<footer>--}}
{{--            <p>&copy;{{date('Y')}} SooPPer</p>--}}
{{--        </footer>--}}
{{--</div>--}}


{{--</body>--}}

</html>
