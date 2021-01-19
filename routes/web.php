<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post/{slug}', [App\Http\Controllers\PostController::class, 'show'])->where('slug', '[A-Za-z0-9_\-]+')->name('post');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
