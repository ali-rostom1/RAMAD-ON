<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Media;

Route::get('/', function () {
    return view('home');
});
Route::get('/recipes', function () {
    return view('recipes');
});
Route::get('/debug-categories', function () {
    $categories = Category::all();
    return response()->json($categories);
});
Route::get('/debug-recipes', function () {
    $recipes = Recipe::with('medias')->get();
    return response()->json($recipes);
});
Route::get('/posts', function () {
    return view('posts');
});