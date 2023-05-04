<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LoginController;

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

Route::get('/', IndexController::class)->name('home');

Route::get('/login', [LoginController::class, 'loginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile', [UserController::class, 'updateProfile'])->name('updateProfile');


Route::get('/contact', function () {
    return view('web::pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('web::pages.about');
})->name('about');