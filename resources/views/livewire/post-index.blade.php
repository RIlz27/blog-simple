<div>
    <div class="w-full overflow-x-auto">
        <div class="flex gap-4 w-max pb-4">
            @if($posts->isEmpty())
                <div class="text-center">
                    <p class="text-base font-bold text-black">Belum ada postingan,
                        <a href="{{ route('posts.create') }}" class="text-blue-600">Tambah Postingan?</a>
                    </p>
                </div>
            @else
                @foreach ($posts as $post)
                    <div class="min-w-[300px] max-w-[300px] bg-white rounded shadow group flex-shrink-0">
                        <div class="w-full p-4 text-left">
                            @if ($post->published_at)
                                <p class="text-xs text-gray-500 uppercase mb-2">
                                    {{ \Carbon\Carbon::parse($post->published_at)->translatedFormat('F d, Y') }}
                                </p>
                            @endif

                            @if ($post->category)
                                <p class="text-xs text-blue-600 font-semibold mb-1">
                                    {{ $post->category?->name }}
                                </p>
                            @endif

                            <a href="{{ route('posts.show', $post->id) }}" class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition">
                                {{ Str::limit($post->title, 60) }}
                            </a>

                            <p class="text-sm text-gray-600 mt-2">
                                {{ Str::limit($post->content, 100) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    {{-- News tetap di bawah, gak ikutan scroll --}}
    <div class="mt-8">
        <livewire:post-news />
    </div>
</div>
