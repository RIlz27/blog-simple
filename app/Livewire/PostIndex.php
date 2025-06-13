<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class PostIndex extends Component
{

    public function delete($id)
    {
        Post::findOrFail($id)->delete();
        session()->flash('message', 'Postingan berhasil dihapus.');
    }


    public function render()
    {
        return view('livewire.post-index', [
            'posts' => Post::latest()->get()
        ]);
    }
}
