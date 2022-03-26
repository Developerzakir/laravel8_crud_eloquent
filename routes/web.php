<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-post', [PostController::class, 'addPost']);
Route::post('/insert-post', [PostController::class, 'insertPost'])->name('create');

Route::get('/show-post', [PostController::class, 'getPost']);

Route::get('/show-post/{id}', [PostController::class, 'getPostId']);
Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);
Route::get('/edit-post/{id}', [PostController::class, 'editPost']);

Route::post('/update-post', [PostController::class, 'updatePost'])->name('updatePost');

