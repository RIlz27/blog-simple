<?php

namespace App\Livewire;

use App\Http\Requests\StorePostRequest;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use App\Models\Image;

#[Layout('layouts.app')]
class PostForm extends Component
{
    protected $listeners = ['imageUploaded'];
    use WithFileUploads;

    public $title;
    public $image;
    public $content;

    public function save()
    {
        $data = [
            'image' => $this->image,
            'title' => $this->title,
            'content' => $this->content,
        ];

        $validator = Validator::make($data, (new StorePostRequest())->rules());

        if ($validator->fails()) {
            foreach ($validator->errors()->messages() as $key => $messages) {
                foreach ($messages as $message) {
                    $this->addError($key, $message);
                }
            }
            return;
        }

        $validated = $validator->validate();

        $post = Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'published_at' => now(),
        ]);

        if ($this->image) {
            $imagePath = $this->image->store('posts', 'public');

            $post->image()->create([
                'path' => $imagePath
            ]);
        }

        session()->flash('success', 'Postingan telah diunggah');
        $this->reset(['title', 'content', 'image']);

        return redirect()->route('posts.index');
    }

    public function imageUploaded($path)
    {
        $this->image = $path;
    }


    public function render()
    {
        return view('livewire.post-form');
    }
}
