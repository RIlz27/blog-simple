<?php

namespace App\Livewire;

use App\Http\Requests\StorePostRequest;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

#[Layout('layouts.app')]
class PostForm extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $content;

    public function save()
    {
        $data = [
            'title' => $this->title,
            'image' => $this->image,
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

        if ($this->image) {
            $validated['image'] = $this->image->store('post', 'public');
        }

        $validated['published_at'] = now();
        Post::create($validated);

        session()->flash('success', 'Postingan telah diunggah');
        $this->reset(['title', 'content', 'image']);
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
