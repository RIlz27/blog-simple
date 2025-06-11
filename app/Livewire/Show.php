<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Show extends Component
{
    public Post $post;

    public function mount($id)
    {
        $this->post = Post::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.show');
    }
}
