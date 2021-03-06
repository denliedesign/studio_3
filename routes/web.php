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

Route::get('staff', function () {
    return view('staff');
});

Route::get('competition', function () {
    return view('competition');
});

Route::get('performances', function () {
    return view('performances');
});

Route::get('policies', function () {
    return view('policies');
});

//Route::get('summer', function () {
//    return view('summer');
//});

Route::get('tuition', function () {
    return view('tuition');
});

Route::get('attire', function () {
    return view('attire');
});

Route::get('classes', function () {
    return view('classes');
});

Route::get('newsletter', function () {
    return view('newsletter');
});

Route::get('/news/march', function () {
    return view('/news/march');
});

Route::get('/news/april', function () {
    return view('/news/april');
});

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
