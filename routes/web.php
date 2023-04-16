<?php

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\ThreadsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', IndexController::class);

Route::get('/login', [LoginController::class, 'loginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/threads', [ThreadsController::class, 'index']);
