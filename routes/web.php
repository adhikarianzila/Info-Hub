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
    return view('welcome');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/index', 'PagesController@index')->name('pages.index');
    // Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/service', 'PagesController@service')->name('pages.servicepage');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('admin')->middleware(['auth'])->group(function(){

//      Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index']);
// });

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');

    Route::get('testimonial', [App\Http\Controllers\Admin\TestimonialController::class,'index']);
    Route::get('add-testimonials', [App\Http\Controllers\Admin\TestimonialController::class,'create']);
    Route::post('add-testimonials', [App\Http\Controllers\Admin\TestimonialController::class,'store']);
});
