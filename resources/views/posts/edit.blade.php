@extends('layouts.app')
@section('content')
    <h1>Edit Postingan</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <input name="title" placeholder="Title" class="block mb-2">
        <textarea name="content" placeholder="Content" class="block mb-2"></textarea>
        <input type="file" name="image" accept="image/*" class="block mb-4">
        <button type="submit">Save</button>
    </form>
@endsection
