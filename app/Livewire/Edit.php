<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use App\Models\Category;

#[Layout('layouts.app')]
class Edit extends Component
{
    use WithFileUploads;

    public Post $post;
    public $title;
    public $content;
    public $image;
    public $category_id;
    public $existingImage;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->category_id = $post->category_id;
        $this->existingImage = $post->image;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $this->post->title = $this->title;
        $this->post->content = $this->content;

        if ($this->image) {
            $path = $this->image->store('posts', 'public');
            $this->post->image = $path;
        }

        $this->post->save();

        session()->flash('success', 'Postingan berhasil diperbarui!');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.edit', [
        'categories' => Category::all(),
    ]);
    }
}
