<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
});

Route::resource('posts', PostController::class);
