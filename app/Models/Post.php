<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image', 'published_at'];

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
