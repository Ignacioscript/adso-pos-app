
@props(['active'=> false])

<div id="dashboard" class="flex items-center cursor-pointer" onclick="location.href='/dashboard/dashboard.html'">
{{--    <img src="images/home_icon.svg" alt="">--}}
    <a class="{{ $active? 'text-blue-900 transition-colors duration-300 transform dark:text-blue-900 font-extrabold':'border-b-2 border-transparent hover:text-gray-800 transition-colors duration-300 transform' }} "
    {{$attributes}}
    >
        {{$slot}}
    </a>
</div>
