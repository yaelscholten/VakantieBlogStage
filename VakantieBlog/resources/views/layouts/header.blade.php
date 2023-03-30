<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body>
    <header class="bg-[#274060] h-20 flex">
        <div class="w-5/6 mx-auto flex items-center justify-between">
            <div class="">
            <a href="{{ url('/blog') }}"><img class="h-16 " src="{{ asset('images/logo.webp') }}" alt="Logo"></a>
            </div>
            <div class="">
                <ul class="flex justify-between text-white text-lg ">
                    <li><a class="px-4" href="{{ url('/blog') }}">Home</a></li>
                    @guest     
                        <li><a class="px-4" href="{{ url('login') }}">Aanmelden</a></li>
                    @else
                    <li><a class="px-4" href="{{ url('account') }}">Mijn account</a></li>
                    <li><a class="px-4" href="{{ url('logout') }}">Loguit</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </header>
    <div>
    @yield('content')

    </div>
    
    </body>
</html>
