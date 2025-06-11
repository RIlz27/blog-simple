
    <div class="max-w-2xl mx-auto py-10 px-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-center">Edit Postingan</h1>
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Konten</label>
                <textarea name="content" id="content" rows="5"
                    class="w-full px-4 py-2 border rounded resize-none focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('content', $post->content) }}</textarea>
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar (opsional)</label>
                <input type="file" name="image" id="image" accept="image/*" class="w-full">
                @if ($post->image)
                    <div class="mt-3">
                        <p class="text-sm text-gray-500">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                            class="w-full h-64 object-cover rounded">
                    </div>
                @endif
            </div>
            <div class="text-center">
                <button type="submit"
                    class="bg-yellow-500 text-white px-6 py-2 rounded hover:bg-yellow-600 transition duration-200 mt-3.5">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

