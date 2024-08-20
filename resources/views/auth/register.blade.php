@extends('layouts.auth')
@section('title', 'Register')
@section('content')


<div class="flex justify-center items-center min-h-screen flex-col">
    <form class="mt-4 w-full max-w-lg p-5 lg:p-0" method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="text-4xl lg:text-[2.5rem] font-bold text-teal-700 mb-10 text-center">Register</h1>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <button type="submit" class="w-full bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-4 rounded-md focus
            :outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">Register</button>
        </div>
    </form>
    <div class="mt-4">
        <a href="{{ route('login') }}" class="text-teal-500 hover:text-teal-600">Already have an account? Login</a>
    </div>

    <a href="{{ url('/') }}" class="mt-4 p-3 text-white font-bold bg-teal-500 rounded-xl hover:shadow-lg">Kembali ke Home</a>
</div>
@endsection