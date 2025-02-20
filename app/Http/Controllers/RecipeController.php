<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function create($catId = NULL)
    {
        $categories = Category::all();
        $recipes = $catId ? Recipe::with('category')->where("id_category","=",$catId)->paginate(3) : Recipe::with('category')->paginate(3);
        return view('recipes',['recipes'=>$recipes,'categories'=>$categories,'catId']);
    }
}
