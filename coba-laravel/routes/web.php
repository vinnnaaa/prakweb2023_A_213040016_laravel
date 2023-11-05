<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
    
});

Route::get('/about', function () {
    return  view('about', [
        "title" => "About",
        "nama" => "Revina Bella Trisna",
        "email" => "bellarevina23@gmail.com",
        "image" => "vina.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('Category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
