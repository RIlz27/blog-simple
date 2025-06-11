
<div class="max-w-2xl mx-auto py-10 px-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Postingan</h1>

    <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data" class="space-y-4">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
            <input type="text" id="title" wire:model="title"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('title')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for ="content" class="block text-sm font-medium text-gray-700 mb-1">Konten</label>
            <textarea id="content" wire:model="content" rows="5"
                class="w-full px-4 py-2 border rounded resize-none focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Gambar (opsional)</label>
            <input type="file"id="image" wire:model="image" class="w-full">
            @error('image')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror

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

