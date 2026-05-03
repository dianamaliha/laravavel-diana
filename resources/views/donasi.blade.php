@extends('app')

@section('title', 'Donasi')

@section('content')

<div class="flex flex-col justify-center items-center min-h-[60vh] text-center">

    <h1 class="text-3xl font-bold text-green-600 mb-4">
        Halaman Donasi
    </h1>

    <p class="text-gray-600 mb-6">
        Silakan pilih jumlah donasi yang ingin kamu berikan 💚
    </p>

    <button class="bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600">
        Donasi Sekarang
    </button>

</div>

@endsection