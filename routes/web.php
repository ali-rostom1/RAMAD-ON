<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Media;
use App\Models\Post;


Route::middleware("guest")->group(function(){
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'create'])->name("login");
    Route::post('/login', [LoginController::class, 'store'])->name("login.store");
});
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/recipes',[RecipeController::class,'create'])->name('recipes');
    Route::get('/recipes/category/{category}',[RecipeController::class,'create',])->name('recipes');
    Route::get('/debug-posts', function () {
        $posts = Post::all();
        return response()->json($posts);
    });
    Route::get('/debug-recipes', function () {
        $recipes = Recipe::with('medias')->get();
        return response()->json($recipes);
    });
    Route::get('/posts', function () {
        return view('posts');
    });
    Route::get('/logout', LogoutController::class)->name("logout");
});


