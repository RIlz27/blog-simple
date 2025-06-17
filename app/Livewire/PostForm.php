<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;
use App\Models\Category;
class PostForm extends Component
{
    use WithFileUploads;

    public $title, $content, $image, $category_id;

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = $this->image->store('posts', 'public');

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $imagePath,
            'category_id' => $this->category_id,
            'published_at' => now(),
        ]);

        session()->flash('success', 'Postingan berhasil dibuat!');
        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.post-form', [
            'categories' => Category::all(),
            ])->layout('layouts.app');
        }
    }
