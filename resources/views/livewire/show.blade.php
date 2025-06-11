<div class="py-6 flex justify-center">
    <div class="max-w-2xl w-full bg-white p-6 rounded shadow">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                class="w-full h-64 object-cover rounded mb-4">
        @endif

        <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
        <p class="text-gray-700 mb-4">{{ $post->content }}</p>

        <p class="text-gray-500 text-sm mb-1">
            Diposting pada {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}
        </p>

        <p class="text-gray-500 text-center mt-10">copyright @RilzyBlogs</p>
    </div>
</div>
