<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => "Raka",
        'email' => "rksrbbn@gmail.com"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);


// Halaman Single Post
Route::get('posts/{id}', [PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{id}', function ($id) {
    $category = Category::find($id);
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts->load('user', 'category'),
        'category' => $category->name
    ]);
});

Route::get('/authors/{id}', function ($id) {
    $user = User::find($id);
    return view('posts', [
        'title' => 'Post By : ' . $user->name,
        'posts' => $user->posts->load('category', 'user'),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
