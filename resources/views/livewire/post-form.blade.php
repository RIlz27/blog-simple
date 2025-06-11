
<div class="max-w-xl mx-auto p-6 bg-white shadow-md rounded">
    @if (session()->has('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label class="block font-bold mb-1">Judul</label>
            <input type="text" wire:model="title" class="w-full border px-3 py-2 rounded" />
            @error('title')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-1">Konten</label>
            <textarea wire:model="content" class="w-full border px-3 py-2 rounded"></textarea>
            @error('content')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block font-bold mb-1">Gambar</label>
            <input type="file" wire:model="image" class="w-full" />
            @error('image')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan Post
        </button>
    </form>
</div>
        