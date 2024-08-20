@extends('layouts.app')
@section('content')
<div class="flex justify-center items-center min-h-screen flex-col">
    <form class="mt-4 w-full max-w-lg p-5 lg:p-0" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="text-4xl lg:text-[2.5rem] font-bold text-teal-700 mb-10 text-center">Login</h1>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <button type="submit" class="w-full bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">Login</button>
        </div>
    </form>
    <div class="mt-4">
        <a href="{{ route('register') }}" class="text-teal-500 hover:text-teal-600">Create an account</a>
    </div>
</div>
@endsection