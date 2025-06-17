<div class="py-6 flex justify-center">
    <div class="max-w-2xl w-full bg-white p-6 rounded shadow">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                class="w-full h-64 object-cover rounded mb-4">
        @else
            <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                Gambar Error
            </div>
        @endif

        <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
        <p class="text-gray-700 mb-4">{{ $post->content }}</p>

        <p class="text-gray-500 text-sm mb-1">
            Diposting pada {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}
        </p>
        <div class="gap-x-20">
            <a href="{{ route('posts.edit', $post) }}" class="text-yellow-600 hover:underline">Edit</a>
            <button onclick="return confirm('Yakin mau hapus postingan ini?')" wire:click="delete({{ $post->id }})"
                class="text-red-600 hover:underline">Delete</button>
        </div>
        <p class="text-gray-500 text-center mt-10">copyright @RilzyBlogs</p>
    </div>
</div>
