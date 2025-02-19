<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function create()
    {
        $recipes = Recipe::with('category')->paginate(3);
        return view('recipes',['recipes'=>$recipes]);
    }
}
