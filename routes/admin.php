<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\NewsController;
use App\Http\Controllers\Back\LoginController;
use App\Http\Controllers\Back\ShareController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\GalleryController;
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
    Route::resource('gallery', GalleryController::class);

    // GENERRAL URLS
    Route::post('filter', [ShareController::class, 'filterIndex'])->name('filter.index');
    Route::put('changeStatus', [ShareController::class, 'changeStatus'])->name('changeStatus');
    // GENERRAL URLS


});
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

// import fron inident all the news
Route::get('/import_data', function () {
    // $records = DB::table('gallery')
    //     // ->whereBetween('id', [1, 20])
    //     ->skip(320)
    //     ->limit(20)
    //     ->get();
    // dd($records);
    // // foreach ($records as $record) {
    // //     // dd($records);
    // //     $gall = [
    // //         'title' => [
    // //             'ka' => $record->title_ge ? $record->title_ge : ' ',
    // //             'en' => $record->title_en ? $record->title_en : ' ',
    // //         ],

    // //         'description' => [
    // //             'ka' => $record->title_ge ? $record->title_ge : ' ',
    // //             'en' => $record->title_en ? $record->title_en : ' ',
    // //         ],
    // //         'sort' => $record->position,
    // //         'status' => 1,
    // //         'user_id' => 1,
    // //     ];
    // //     $gallery = App\Models\Gallery::create($gall);
    // //     $images = explode(",", $record->photo);
    // //     foreach ($images as $image) {
    // //         $url = "http://d.unident.ge/photos/gallery/" . $image;
    // //         $gallery->addMediaFromUrl($url)->toMediaCollection('gallery');
    // //     }
    // // }

    // die('asds');








    // map fields here
    // Unident              GDAPA
    // title_ge             content_ge
    // content_ge           content_ge
    // $records = DB::table('records')
    //     ->whereNotNull('content_ge')
    //     ->get();
    // foreach ($records as $record) {
    //     $news = [
    //         'title' => [
    //             'ka' => $record->title_ge ? $record->title_ge : ' ',
    //             'en' => $record->title_en ? $record->title_en : ' ',
    //         ],
    //         'short_description' => [
    //             'ka' => $record->content_ge,
    //             'en' => $record->content_ge,
    //         ],
    //         'description' => [
    //             'ka' => $record->content_ge,
    //             'en' => $record->content_ge,
    //         ],
    //         'sort' => $record->position,
    //         'status' => $record->visible,
    //         'date' => $record->date != '0000-00-00' ? $record->date : date('Y-m-d H:i:s'),
    //         'user_id' => 1,
    //     ];
    //     // dd($news);
    //     App\Models\News::create($news);
    // }
    // die('asd');




});
// import fron inident all the news
