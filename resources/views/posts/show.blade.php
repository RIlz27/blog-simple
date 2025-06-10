@extends('layouts.app')

@section('content')
    <div class="py-6 flex justify-center">
        <div class="max-w-2x1 w-full">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                    class="w-78 h-78 object-cover flex justify-center rounded mb-3">
            @endif
            <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
            <p class="text-gray-700">{{ $post->content }}</p>
            <p class="text-gray-500 text-sm mb-1">Diposting pada
                {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}
            <p class="text-gray-500 text-center mt-10 ">copyright @RilzyBlogs</p>
        </div>
    </div>
@endsection
