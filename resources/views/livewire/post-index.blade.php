<div class="py-6 max-w-7xl mx-auto px-4">
    @if ($posts->isEmpty())
        <div class="text-center">
            <p class="text-gray-500">
                Belum ada Postingan nih
                <a href="{{ route('posts.create') }}" class="text-blue-600 hover:underline">Buat Postingan?</a>.
            </p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Konten Utama -->
            <div class="md:col-span-2 space-y-6">
                <h1 class="text-3xl font-bold mb-4">My Blog</h1>

                @foreach ($posts as $post)
                    <div class="bg-white rounded shadow overflow-hidden">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                class="w-full h-64 object-cover">
                        @endif

                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-1">{{ $post->title }}</h2>
                            <p class="text-gray-700 mb-3">{{ Str::limit($post->content, 100) }}</p>

                            <div class="text-sm space-x-3">
                                <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 hover:underline">Lihat Semua</a>
                                <a href="{{ route('posts.edit', $post) }}" class="text-yellow-600 hover:underline">Edit</a>
                                <button onclick="return confirm('Yakin mau hapus postingan ini?')"
                                    wire:click="delete({{ $post->id }})"
                                    class="text-red-600 hover:underline">Delete</button>
                            </div>

                            @if ($post->published_at)
                                <p class="text-gray-500 text-xs mt-2">
                                    Diposting pada {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('d F Y') }}
                                </p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Sidebar -->
            <aside class="space-y-6">
                <div class="bg-white rounded shadow p-4">
                    <h3 class="text-lg font-semibold mb-2">Recent Post</h3>
                    <ul class="space-y-2">
                        @foreach ($posts->take(5) as $recent)
                            <li>
                                <a href="{{ route('posts.show', $recent->id) }}" class="text-blue-600 hover:underline">
                                    {{ Str::limit($recent->title, 40) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-white rounded shadow p-4">
                    <h3 class="text-lg font-semibold mb-2">Kategori</h3>
                    <ul>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600">Teknologi</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600">Gaya Hidup</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-blue-600">Travel</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    @endif
</div>
