@extends('app')

@section('title', 'Home')

@section('content')

<div class="flex flex-col justify-center items-center min-h-[60vh] text-center">
    
    <h1 class="text-4xl font-bold text-green-600 mb-4">
        Selamat Datang di DonasiKu
    </h1>

    <p class="text-gray-600 mb-6">
        Mari berbagi kebaikan dan bantu sesama melalui donasi.
    </p>

    <a href="/campaign" class="bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600">
        Donasi Sekarang
    </a>

</div>

@endsection