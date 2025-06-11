<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Post;
// use App\Http\Requests\StorePostRequest;

// class PostController extends Controller
// {
//     public function index()
//     {
//         $post = Post::latest()->get();
//         return view('posts.index', compact('post'));
//     }

//     public function create()
//     {
//         return view('posts.create');
//     }

//    public function store(StorePostRequest $request)
//    {
//          $validate = $request->validated();

//          if ($request->hasFile('image')){
//             $validate['image'] = $request->file('image')->store('post', 'public');
//          }

//          Post::create($validate);

//          return redirect()->route('posts .index')->with('sukses', 'Postingan berhasil diunggah');
//    }


    // public function show(Post $post)
    // {
    //     return view('posts.show', compact('post'));
    // }

//     public function edit(Post $post)
//     {
//         return view('posts.edit', compact('post'));
//     }
//     public function update(Request $request, Post $post)
//     {
//         $request->validate([
//             'title' => 'required|max:255',
//             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//             'content' => 'required',
//         ]);

//         $data = [
//             'title' => $request->title,
//             'image' => $request->image,
//             'content' => $request->content,
//         ];

//         if ($request->hasFile('image')) {
//             $data['image'] = $request->file('image')->store('images', 'public');
//         }

//         $post->update($data);

//         return redirect()->route('posts.index')
//             ->with('success', 'Post Berhasil diperbarui.');
//     }

//     public function destroy(Post $post)
//     {
//         $post->delete();

//         return redirect()->route('posts.index')
//             ->with('success', 'Post Berhasil dihapus.');
//     }
    
// }
