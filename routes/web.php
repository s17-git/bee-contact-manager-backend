<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserIsSylla;

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
    return view('welcome');
})->name('home');


Route::name('posts.')->group(function() {
    Route::get('/posts', function(Request $request) {
        return "Page d'posts";
    })->name('index');
    
    Route::get('/posts/{post:title}', function(Request $request, Post $post) {
        return $post->title;
    })->name('show');
});

Route::prefix('admin')
->name('admin.')
->group(function() {

    Route::get('/posts', function(Request $request) {
        return "Admin Page d'posts";
    })->name('posts.index');
    
    Route::get('/posts/{id}', function(Request $request, int $id) {
        return Post::find($id)->title;
    })->name('posts.show');

});

