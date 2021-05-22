<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nurmansyahController;

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
    return "Nurmansyah Putra Bachtyar";
});

// Route::get('/hello', [HelloController::class, 'index']);

// Route::get('/page2', [HelloController::class, 'page2']);

Route::get('/home', [nurmansyahController::class, 'home']);
Route::get('/artikel', [nurmansyahController::class, 'artikel']);
Route::get('/profil', [nurmansyahController::class, 'profil']);

Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');



