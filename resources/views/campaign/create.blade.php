@extends('app')

@section('title', 'Tambah Campaign')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    Tambah Campaign
</h1>

<form action="/campaign" method="POST" class="bg-white p-6 rounded shadow w-full max-w-lg">

    @csrf

    <div class="mb-4">
        <label class="block mb-2">Title</label>
        <input type="text" name="title"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Description</label>
        <textarea name="description"
                  class="w-full border p-2 rounded"></textarea>
    </div>

    <div class="mb-4">
        <label class="block mb-2">Target Donation</label>
        <input type="text" name="target_donation"
               class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="block mb-2">Deadline</label>
        <input type="date" name="deadline"
               class="w-full border p-2 rounded">
    </div>

    <button type="submit"
            class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        Simpan
    </button>

</form>

@endsection