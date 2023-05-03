<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\LoginController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\ConferenceController;
use App\Http\Controllers\Back\NewsController;

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

Route::get('/login', [LoginController::class, 'loginForm'])->name('login-form');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

Route::group(['middleware' => 'admin.auth'], function () {

    Route::get('/', function () {
        return view("admin::app");
    });

    Route::resource('sliders', SliderController::class);
    Route::post('sliders/filter', [SliderController::class, 'index'])->name('sliders.filter');

    Route::resource('news', NewsController::class);
    Route::post('news/filter', [NewsController::class, 'index'])->name('news.filter');

    Route::resource('conference', ConferenceController::class);
    Route::post('conference/filter', [ConferenceController::class, 'index'])->name('conference.filter');


});
