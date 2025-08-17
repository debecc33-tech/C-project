@extends('layouts.app')

@section('title', $project['title'] . ' - TG Developments')

@section('content')
<section class="py-20">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold mb-6">{{ $project['title'] }}</h1>
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full rounded-lg">
            </div>
            <div>
                <p class="text-gray-600 mb-4">{{ $project['description'] }}</p>
                <div class="space-y-2">
                    <p><strong>Location:</strong> {{ $project['location'] }}</p>
                    <p><strong>Area:</strong> {{ $project['area'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection