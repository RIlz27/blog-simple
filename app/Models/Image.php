<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable =['post_id', 'patch'];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
