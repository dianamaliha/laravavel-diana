@extends('app')

@section('title', 'Campaign')

@section('content')

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

        <td class="border p-2">
            <a href="/campaign/{{ $campaign->id }}/edit"
               class="bg-yellow-500 text-white px-3 py-1 rounded">
                Edit
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection