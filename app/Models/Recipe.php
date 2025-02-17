<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipe';

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function medias()
    {
        return $this->hasMany(Media::class, 'id_recipe');
    }
}
