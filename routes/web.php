<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


// Route::name('posts.')->group(function() {
//     Route::get('/posts', [PostController::class, 'index'])->name('index');
//     Route::get('/posts/{id}', [PostController::class, 'show'])->name('show');
// });

Route::resource('posts', PostController::class);

// Route::prefix('admin')
// ->name('admin.')
// ->group(function() {

//     Route::get('/posts', function(Request $request) {
//         return "Admin Page d'posts";
//     })->name('posts.index');
    
//     Route::get('/posts/{id}', function(Request $request, int $id) {
//         return Post::find($id)->title;
//     })->name('posts.show');

// });

