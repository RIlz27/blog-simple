<div class="py-6">
    @if ($posts->isEmpty())
        <div class="text-center">
            <p class="text-gray-500">
                Belum ada Postingan nih
                <a href="{{ route('posts.create') }}" class="text-blue-600 hover:underline">Buat Postingan?</a>.
            </p>
        </div>
    @else
        <h1 class="text-3xl font-bold mb-4">My Blog</h1>
        <div class="mt-6 space-y-6">
            @foreach ($posts as $post)
                <div class="bg-white p-4 rounded shadow">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                            class="w-full h-64 object-cover rounded mb-3">
                    @endif
                    <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                    <p class="text-gray-700">{{ Str::limit($post->content, 100) }}</p>

                    <div class="mt-2 space-x-2">
                        <a href="{{ route('posts.show', $post->id) }}" class="text-sm text-blue-600 hover:underline">Lihat Semua</a>
                        <a href="{{ route('posts.edit', $post) }}"
                            class="text-sm text-yellow-600 hover:underline">Edit</a>
                        <button class="text-sm text-red-600 hover:underline" wire:click="delete({{ $post->id }})"
                            onclick="return confirm('Yakin mau hapus postingan ini?')"
                            class="text-sm text-red-600 hover:underline">
                            Delete
                        </button>

                    </div>

                    @if ($post->published_at)
                        <p class="text-gray-500 text-sm mt-2">
                            Diposting pada {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}
                        </p>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
