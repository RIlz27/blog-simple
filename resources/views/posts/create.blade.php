@extends('layouts.app')
@section('content')
<h1>Postingan baru</h1>
<form action="{{ route('posts.store') }}" style="box-shadow: 2px #0000" method="POST" enctype="multipart/form-data">
    @csrf
    <input name="title" placeholder="Title" class="block mb-2">
    <textarea name="content" placeholder="Content" class="block mb-2"></textarea>
    <input type="file" name="image" accept="image/*" class="block mb-4">
    <button type="submit">Save</button>
</form>
@endsection
