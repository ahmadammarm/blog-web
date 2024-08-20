@extends('layouts.app')
@section('content')

{{-- Halaman Home --}}
<div class="bg-[url('https://sinudzi.com/assets/img/dzikir.webp')] bg-cover bg-center text-white">
    <div class="mx-auto px-4 py-24 text-center backdrop-brightness-50">
        <h1 class="text-4xl md:text-6xl font-bold">Website Doa & Dzikir Harian</h1>
        <p class="mt-4 text-lg md:text-xl">Sarana untuk mencari doa dan dzikir yang sesuai dengan kebutuhan Anda. Platform ini dirancang untuk membantu Anda menemukan doa dan dzikir yang tepat untuk berbagai situasi dan kebutuhan, baik itu untuk ketenangan hati, perlindungan, kesehatan, atau kelancaran rezeki.</p>
        <button class="mt-6 bg-teal-600 text-white py-3 px-6 rounded-lg">Cari Doa Harian</button>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div class="bg-gray-100 p-8 rounded-lg">
            <h2 class="text-xl font-semibold">Rekaman Dzikir</h2>
            <p class="mt-2">Dengarkan rekaman dzikir harian untuk membantu Anda beribadah dengan lebih khusyuk.</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg">
            <h2 class="text-xl font-semibold">Rekomendasi Dzikir</h2>
            <p class="mt-2">Temukan rekomendasi dzikir sesuai dengan kebutuhan dan kondisi Anda sehari-hari.</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg">
            <h2 class="text-xl font-semibold">Materi Dzikir</h2>
            <p class="mt-2">Pelajari materi dzikir dari berbagai sumber terpercaya untuk memperdalam pengetahuan Anda.</p>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-semibold mb-8">Platform untuk Mendukung Kegiatan Doa dan Dzikir Anda</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-4">
                <img src="https://via.placeholder.com/600x400" alt="Dzikir" class="w-full h-auto rounded-lg">
            </div>
            <div class="text-left">
                <p class="text-lg">Website kami merupakan website yang menyediakan berbagai macam doa dan dzikir yang dapat Anda. Mulai dari doa harian, dzikir pagi dan petang, dan doa-doa lainnya yang dapat Anda pelajari. Website kami memiliki berbagai fitur untuk membantu Anda dalam berdzikir dan berdoa.</p>
                <ul class="list-disc ml-5 mt-4 text-lg">
                    <li>Materi doa dan dzikir harian</li>
                    <li>Rekaman doa dan dzikir</li>
                    <li>Fitur sharing pengalaman doa dan dzikir</li>
                    <li>Rekomendasi doa dan dzikir harian</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-semibold text-center mb-8">Macam-macam Doa dan Dzikir</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div>
            <img src="https://via.placeholder.com/400x300" alt="Dzikir Pagi" class="w-full h-auto rounded-lg">
            <h3 class="text-xl font-semibold mt-4">Dzikir Pagi</h3>
            <p class="mt-2">Bahasa Indonesia</p>
        </div>
        <div>
            <img src="https://via.placeholder.com/400x300" alt="Dzikir Petang" class="w-full h-auto rounded-lg">
            <h3 class="text-xl font-semibold mt-4">Dzikir Petang</h3>
            <p class="mt-2">Bahasa Indonesia</p>
        </div>
        <div>
            <img src="https://via.placeholder.com/400x300" alt="Doa Hendak Makan" class="w-full h-auto rounded-lg">
            <h3 class="text-xl font-semibold mt-4">Doa Hendak Makan</h3>
            <p class="mt-2">Bahasa Indonesia</p>
        </div>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-semibold text-center mb-8">Macam-macam Shalawat</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
        <div>
            <img src="https://via.placeholder.com/400x300" alt="Shalawat Fatih" class="w-full h-auto rounded-lg">
            <h3 class="text-xl font-semibold mt-4">Shalawat Fatih</h3>
        </div>
        <div>
            <img src="https://via.placeholder.com/400x300" alt="Shalawat Nariyah" class="w-full h-auto rounded-lg">
            <h3 class="text-xl font-semibold mt-4">Shalawat Nariyah</h3>
        </div>
        <div>
            <img src="https://via.placeholder.com/400x300" alt="Shalawat Matsurah" class="w-full h-auto rounded-lg">
            <h3 class="text-xl font-semibold mt-4">Shalawat Matsurah</h3>
        </div>
        <div>
            <img src="https://via.placeholder.com/400x300" alt="Shalawat Lainnya" class="w-full h-auto rounded-lg">
            <h3 class="text-xl font-semibold mt-4">Shalawat Lainnya</h3>
        </div>
    </div>
</div>

@endsection