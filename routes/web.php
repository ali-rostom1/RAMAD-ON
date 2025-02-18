<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\Media;


Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'create'])->name("login");
Route::post('/login', [LoginController::class, 'store'])->name("login.store");

Route::middleware('auth')->group(function () {
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
    Route::get('/logout', LogoutController::class)->name("logout");
});


