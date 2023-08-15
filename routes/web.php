<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/articles', function(Request $request) {

   	$url =  route('articles.index');
	$showUrl =  route('articles.show', ['id' => 2, 'nom' => 's17']);

    return $showUrl;
})->name('articles.index');

Route::get('/articles/{id}', function(Request $request, int $id) {
    // return redirect()->route('articles.index');
    return to_route('articles.index');
})->name('articles.show');
