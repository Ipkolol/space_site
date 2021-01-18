<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('uploadAvatar', [ProfileController::class, 'uploadAvatar']);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('profile', ProfileController::class);
    Route::get('profile/{profile}/delete', [ProfileController::class, 'destroy'])->name('profile.delete');
    Route::get('posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.delete');
    Route::get('comment/{comment}/delete', [CommentController::class, 'destroy'])->name('comment.delete');
});

Route::resource('posts', PostController::class);
Route::resource('user', UserController::class);
Route::resource('comment', CommentController::class);
