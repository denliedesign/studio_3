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

Route::get('summer', function () {
    return view('summer');
});

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

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('/news/march', function () {
    return view('/news/march');
});

Route::get('/news/april', function () {
    return view('/news/april');
});

Route::get('/news/august', function () {
    return view('/news/august');
});

Route::get('/news/september', function () {
    return view('/news/september');
});

Route::get('/news/october', function () {
    return view('/news/october');
});

Route::get('/news/november', function () {
    return view('/news/november');
});

Route::get('/news/december', function () {
    return view('/news/december');
});

Route::get('/snow-queen', function () {
    return view('/snow-queen');
});

Route::get('/dance-classes-in-plano-tx', function () {
    return view('/dance-classes-in-plano-tx');
});

Route::get('/preschool-dance-classes-plano', function () {
    return view('/preschool-dance-classes-plano');
});

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
