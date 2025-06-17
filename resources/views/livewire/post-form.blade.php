<div class="max-w-xl mx-auto p-6 bg-white shadow-md rounded">
    @if (session()->has('success'))
        <div class="mb-4 text-green-600 font-semibold">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        {{-- Judul --}}
        <div class="mb-4">
            <label class="block font-bold mb-1 text-gray-700">Judul</label>
            <input type="text" wire:model="title"
                class="w-full border px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
            @error('title')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        {{-- Konten --}}
        <div class="mb-4">
            <label class="block font-bold mb-1 text-gray-700">Konten</label>
            <textarea wire:model="content" rows="5"
                class="w-full border px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            @error('content')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        {{-- Kategori --}}
        <div class="mb-4">
            <label for="category" class="block text-gray-700 font-semibold mb-2">Kategori</label>
            <select wire:model="category_id" id="category"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        {{-- Gambar --}}
        <div class="mb-4">
            <label class="block font-bold mb-1 text-gray-700">Gambar</label>
            <input type="file" wire:model="image"
                class="w-full border px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
            @error('image')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror

            @if ($image)
                <div class="mt-3">
                    <p class="text-sm text-gray-700">Preview:</p>
                    <img src="{{ $image->temporaryUrl() }}" class="w-64 h-auto mt-1 rounded shadow">
                </div>
            @endif
        </div>

        {{-- Tombol --}}
        <div class="mt-6">
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-200 font-semibold">
                Simpan Post
            </button>
        </div>
    </form>
</div>
