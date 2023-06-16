<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\RegisterController;
use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\NewsController;

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

Route::get('/register', [RegisterController::class, 'registerForm'])->name('register-form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::post('/profile', [UserController::class, 'updateProfile'])->name('updateProfile');

Route::post('/send_email', [ContactUsController::class, 'sendEmail'])->name('sendEmail');

Route::get('/news', [NewsController::class, 'index'])->name('news-index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news-show');


Route::get('/contact', function () {
    return view('web::pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('web::pages.about');
})->name('about');
