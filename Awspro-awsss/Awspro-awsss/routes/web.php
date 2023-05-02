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

Route::get('/', function () {
    return view('login');
});

 Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/ideas', function () {
    return view('admin.ideas');
})->name('ideas');

Route::get('/home', [App\Http\Controllers\IdeasController::class, 'routeideas'])->name('home');
Route::get('/homemanager', [App\Http\Controllers\IdeasController::class, 'index'])->name('homemanager');


Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/createIdeas', [App\Http\Controllers\IdeasController::class, 'createIdeas'])->name('createIdeas');
