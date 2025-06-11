{{-- <div class="py-6">
    @if ($post->isEmpty())
        <div class="text-center">
            <p class="text-gray-500">Belum ada Postingan nih 
                <a href="{{ route('posts.create') }}" class="text-blue-600 hover:underline">Buat Postingan?</a>.
            </p>
        </div>
    @else
        <h1 class="text-3xl font-bold mb-4">My Blog</h1>
        <div class="mt-6 space-y-6">
            @foreach ($post as $item)
                <div class="bg-white p-4 rounded shadow">
                    @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                            class="w-full h-64 object-cover rounded mb-3">
                    @endif
                    <h2 class="text-xl font-semibold">{{ $item->title }}</h2>
                    <p class="text-gray-700">{{ Str::limit($item->content, 100) }}</p>
                    <div class="mt-2 space-x-2">
                        <a href="{{ route('posts.show', $item) }}" class="text-sm text-blue-600 hover:underline">Read More</a>
                        <a href="{{ route('posts.edit', $item) }}" class="text-sm text-yellow-600 hover:underline">Edit</a>
                        <form action="{{ route('posts.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Yakin mau hapus postingan ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-sm text-red-600 hover:underline">Delete</button>
                        </form>
                        @if ($item->published_at)
                            <p class="text-gray-500 text-sm mb-1">
                                Diposting pada {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}
                            </p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div> --}}
