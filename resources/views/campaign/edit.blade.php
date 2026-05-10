@extends('app')

@section('title', 'Edit Campaign')

@section('content')

<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold text-yellow-500 mb-6">
        Edit Campaign
    </h1>

    <form action="{{ route('campaign.update', $campaign->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text"
                name="title"
                value="{{ $campaign->title }}"
                class="w-full border rounded-lg p-2">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Description</label>
            <textarea name="description"
                class="w-full border rounded-lg p-2">{{ $campaign->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-2">Target Donation</label>
            <input type="text"
                name="target_donation"
                value="{{ $campaign->target_donation }}"
                class="w-full border rounded-lg p-2">
        </div>

        <div class="mb-4">
            <label class="block mb-2">Deadline</label>
            <input type="date"
                name="deadline"
                value="{{ $campaign->deadline }}"
                class="w-full border rounded-lg p-2">
        </div>

        <button class="bg-yellow-500 text-white px-4 py-2 rounded-lg">
            Update
        </button>

    </form>

</div>

@endsection