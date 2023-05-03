<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\NewsController;
use App\Http\Controllers\Back\LoginController;
use App\Http\Controllers\Back\ShareController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\ConferenceController;

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
    Route::resource('news', NewsController::class);
    Route::resource('conference', ConferenceController::class);

    // GENERRAL URLS
    Route::post('filter', [ShareController::class, 'filterIndex'])->name('filter.index');
    Route::put('changeStatus', [ShareController::class, 'changeStatus'])->name('changeStatus');
    // GENERRAL URLS


});
