<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';


    public function recipes()
    {
        return $this->hasMany(Recipe::class, 'id_category');
    }
    
}
