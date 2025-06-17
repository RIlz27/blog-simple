<div class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-8">

    {{-- NEWS --}}
    <div class="lg:col-span-2">
        <h2 class="text-2xl font-extrabold text-gray-800 mb-6">News & Trends</h2>

        @foreach ($posts as $post)
            <div class="mb-8">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-64 object-cover rounded mb-4">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500 mb-4">
                        Gambar Error
                    </div>
                @endif

                <h2 class="text-2xl font-bold mb-2">{{ $post->title }}</h2>
                <p class="text-gray-700 mb-4"> {{ Str::limit($post->content, 100) }}</p>

                <p class="text-gray-500 text-sm mb-1">
                    Diposting pada {{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}
                </p>

                <div class="mt-2">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 hover:underline font-bold">
                        Lihat Semua
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- kategori --}}
    <div>
        <h2 class="text-2xl font-extrabold text-gray-800 mb-6">kategori</h2>
        <div class="space-y-4">
            <a href="#" class="relative block rounded-lg overflow-hidden">
                <img src="/path/to/world.jpg" class="w-full h-28 object-cover opacity-80">
                <span
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl font-bold">
                    World (8)
                </span>
            </a>
            <a href="#" class="relative block rounded-lg overflow-hidden">
                <img src="/path/to/tech.jpg" class="w-full h-28 object-cover opacity-80">
                <span
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-xl font-bold">
                    Technology (8)
                </span>
            </a>
        </div>
    </div>

</div>
