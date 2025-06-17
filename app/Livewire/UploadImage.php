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

        [$width, $height] = getimagesize($this->image->getRealPath());
        $ratio = round($width / $height, 2);

        if ($ratio !== round(3 / 2, 2)) {
            $this->reset('image');
            session()->flash('error', 'Gambar harus memiliki rasio 3:2.');
            return;
        }

        $this->path = $this->image->store('posts', 'public');

       
        $this->dispatch('imageUploaded', path: $this->path);

        session()->flash('success', 'Gambar berhasil diunggah!');
    }

    public function render()
    {
        return view('livewire.upload-image');
    }
}
