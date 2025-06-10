@extends('layouts.app')
@section('content')
    <div class="max-w-2x1 mx-auto py-10 px-6 bg-white rounded shadow">
        <h1 class="text-2x1 font-bold mb-6 text-center">Postingan baru</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="title" class=" block text-sm font-medium text-gray-700 mb-1">Judul</label>
               <input type="text" name="title" id="title" placeholder="Judul" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label for="title" class=" block text-sm font-medium text-gray-700 mb-1">Konten</label>
                <textarea name="content" id="content" placeholder="Tulis konten di sini..." rows="5" class="w-full px-4 py-2 border rounded resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            <div>
                <label for="title" class=" block text-sm font-medium text-gray-700 mb-1">Gambar</label>
                 <input type="file" name="image" id="image" accept="image/*" class="w-full">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-200">Simpan Postingan</button>
            </div>
        </form>
    </div>
@endsection
