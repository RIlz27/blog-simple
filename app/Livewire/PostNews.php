<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostNews extends Component
{
    public function render()
    {
        return view('livewire.post-news', [
            'posts' => Post::latest()->get()
        ]);
    }
}
