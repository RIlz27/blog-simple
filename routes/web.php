<?php

use App\Livewire\Edit;
use App\Livewire\PostIndex;
use App\Livewire\PostForm;
use App\Livewire\Show;
use Illuminate\Support\Facades\Route;
Route::get('/', PostIndex::class);
Route::get('/posts/create', PostForm::class)->name('posts.create');
Route::get('/posts/{post}/edit', Edit::class)->name('posts.edit');
Route::get('/posts/{id}', Show::class)->name('posts.show');
Route::get('/posts', PostIndex::class)->name('posts.index');


