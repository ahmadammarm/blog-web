<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Blog App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        {{-- Navbar Resposive --}}
        <nav class="bg-teal-500 p-3">
            <div class="mx-auto">
                <div class="flex justify-between items-center py-4">
                    <a href="{{ url('/') }}" class="text-white
                    font-bold text-xl">Blog App</a>
                    <button class="text-white focus:outline-none lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <ul class="hidden lg:flex space-x-8">
                        <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li><a href="{{ route('login') }}" class="text-white">Login</a></li>
                        <li><a href="{{ route('register') }}" class="text-white">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>



            @yield('content')
        <footer class="bg-teal-600 text-white py-16">
            <div class="mx-auto">
                <p class="text-lg font-bold text-white text-center">2024 Blog App. All Rights Reserved</p>
            </div>
        </footer>
    </body>
</html>
