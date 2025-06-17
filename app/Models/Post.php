<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','category_id', 'content', 'image', 'published_at'];

    public function image()
    {   
        return $this->hasOne(Image::class, 'post_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
}
