@extends('app')

@section('title', 'Campaign')

@section('content')

<a href="/campaign/create"
   class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">
    Tambah Campaign
</a>

<h1 class="text-3xl font-bold mb-6">
    Daftar Kampanye
</h1>

<table class="w-full border">

    <tr class="bg-gray-200">
        <th class="border p-2">Title</th>
        <th class="border p-2">Target</th>
        <th class="border p-2">Aksi</th>
    </tr>

    @foreach($campaigns as $campaign)
    <tr>
        <td class="border p-2">
            {{ $campaign->title }}
        </td>

        <td class="border p-2">
            Rp {{ $campaign->target_donation }}
        </td>

        <td class="border p-2 space-x-2">

    <a href="/campaign/{{ $campaign->id }}/edit"
       class="bg-yellow-500 text-white px-3 py-1 rounded">
        Edit
    </a>

    <form action="/campaign/{{ $campaign->id }}"
          method="POST"
          class="inline">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="bg-red-500 text-white px-3 py-1 rounded">
            Delete
        </button>

    </form>

</td>
    </tr>
    @endforeach

</table>

@endsection