<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comment";

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
