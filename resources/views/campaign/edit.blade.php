@extends('app')

@section('title', 'Edit Campaign')

@section('content')

<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold mb-6 text-green-600">
        Edit Kampanye
    </h1>

    <form action="/campaign/{{ $campaign->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Title
            </label>

            <input type="text"
                   name="title"
                   value="{{ $campaign->title }}"
                   class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Description
            </label>

            <textarea name="description"
                      class="w-full border p-2 rounded">{{ $campaign->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Target Donation
            </label>

            <input type="number"
                   name="target_donation"
                   value="{{ $campaign->target_donation }}"
                   class="w-full border p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-semibold">
                Deadline
            </label>

            <input type="date"
                   name="deadline"
                   value="{{ $campaign->deadline }}"
                   class="w-full border p-2 rounded">
        </div>

        <button type="submit"
                class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">
            Update Campaign
        </button>

    </form>

</div>

@endsection