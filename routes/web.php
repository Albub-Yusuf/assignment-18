<?php

use App\Http\Controllers\PostController;
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


Route::get('/posts',[PostController::class,'getPosts']);
Route::get('/posts/category/{id}',[PostController::class,'getTotalPostsByCategory']);
Route::get('/posts/{id}/delete',[PostController::class,'deletePost']);
Route::get('/deletedPosts',[PostController::class,'getDeletedPosts']);
Route::get('displayPosts',[PostController::class,'displayPosts']);
Route::get('/categories/{id}/posts',[PostController::class,'getPostsByCategory']);
Route::get('/latestPost/category/{id}',[PostController::class,'latestPostByCategory']);
Route::get('/postByCategory',[PostController::class,'groupByLatestPost']);