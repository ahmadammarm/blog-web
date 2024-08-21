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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const dropdownButton = document.getElementById('dropdownButton');
                const dropdownMenu = document.getElementById('dropdownMenu');
                
                dropdownButton.addEventListener('click', function () {
                    dropdownMenu.classList.toggle('hidden');
                });

                document.addEventListener('click', function (event) {
                    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            });
        </script>
    </head>
    <body class="font-sans antialiased">
        {{-- Navbar Responsive --}}
        <nav class="bg-teal-500 p-3">
            <div class="mx-auto">
                <div class="flex justify-between items-center py-4">
                    <a href="{{ url('/') }}" class="text-white font-bold text-xl ml-10">Blog App</a>
                    <button class="text-white focus:outline-none lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                    <ul class="hidden lg:flex space-x-16 mr-20">
                        <li><a href="{{ url('/') }}" class="text-white text-lg font-bold mt-5">Home</a></li>
                        <li><a href="{{ url('blog') }}" class="text-white text-lg font-bold">Blog</a></li>
                        @auth
                            <li class="relative">
                                <button id="dropdownButton" class="text-teal-500 bg-white p-2 text-base font-bold rounded-lg">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul id="dropdownMenu" class="hidden absolute right-0 bg-white text-teal-500 mt-2 rounded-lg shadow-lg z-10">
                                    <li><a href="{{ url('my-blog') }}" class="block px-4 py-2 hover:bg-teal-500 hover:text-white">My Blog</a></li>
                                    <li><a href="{{ url('profile') }}" class="block px-4 py-2 hover:bg-teal-500 hover:text-white">Edit Profile</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full text-left block px-4 py-2 hover:bg-teal-500 hover:text-white">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ url('login') }}" class="text-teal-500 bg-white p-3 text-lg font-bold rounded-lg">Login</a></li>
                        @endauth
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
