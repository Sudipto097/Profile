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
Route::get('/new-login',function (){
   return view('newLogin');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('image', [\App\Http\Controllers\ImageController::class, 'show'])->name('image');
Route::post('image-upload', [\App\Http\Controllers\ImageController::class, 'imageadd'])->name('image-upload');
Route::get('all-image', [\App\Http\Controllers\ImageController::class, 'allimage'])->name('all-image');
Route::get('status-update/{id}', [\App\Http\Controllers\ImageController::class, 'statusUpdate'])->name('status-update');
Route::get('Delete-image/{id}', [\App\Http\Controllers\ImageController::class, 'DeleteImage'])->name('Delete-image');

//======About Me =================

Route::get('Add-About', [\App\Http\Controllers\AboutmeController::class, 'about'])->name('Add-About');
Route::post('about-me', [\App\Http\Controllers\AboutmeController::class, 'aboutme'])->name('about-me');
Route::get('All-About', [\App\Http\Controllers\AboutmeController::class, 'allAbout'])->name('All-About');
Route::get('status-update-about/{id}', [\App\Http\Controllers\AboutmeController::class, 'statusUpdate'])->name('status-update-about');
Route::get('Delete-about/{id}', [\App\Http\Controllers\AboutmeController::class, 'DeleteImage'])->name('Delete-about');
//==========================================

//============My Skills=====================


