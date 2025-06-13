<div>
    @if (session()->has('success'))
        <div class="mb-2 text-green-600">{{ session('success') }}</div>
    @endif

    <input type="file" wire:model="image">

    @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

    @if ($path)
        <div class="mt-3">
            <p class="text-sm text-gray-700">Preview:</p>
            <img src="{{ asset('storage/' . $path) }}" class="w-64 h-auto mt-1 rounded shadow">
        </div>
    @endif
</div>
