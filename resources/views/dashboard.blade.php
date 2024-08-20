@extends('layouts.app')
@section('content')

{{-- Form Logout --}}
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-teal-500 hover:text-teal-600">Logout</button>
</form>


@endsection