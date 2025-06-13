<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;

    public $image;
    public $path;

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:2048',
        ]);

        $this->path = $this->image->store('posts', 'public');
        $this->emit('imageUploaded', $this->path);
        $this->dispatch('imageUploaded', path: $this->path);
        session()->flash('success', 'Gambar berhasil diupload');
    }

    public function render()
    {
        return view('livewire.upload-image');
    }
}

