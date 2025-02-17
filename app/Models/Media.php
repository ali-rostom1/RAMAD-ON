<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;


    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
