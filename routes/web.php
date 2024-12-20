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

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('/news/july', function () {
    return view('/news/july');
});

Route::get('/news/june', function () {
    return view('/news/june');
});

Route::get('/news/march', function () {
    return view('/news/march');
});

Route::get('/news/april', function () {
    return view('/news/april');
});

Route::get('/news/may', function () {
    return view('/news/may');
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
Route::get('/news/january', function () {
    return view('/news/january');
});
Route::get('/news/february', function () {
    return view('/news/february');
});

Route::get('/snow-queen', function () {
    return view('/snow-queen');
});

Route::get('/dance-classes-in-plano-tx', function () {
    return view('/dance-classes-in-plano-tx');
});

Route::get('/dance-studios-in-plano-tx', function () {
    return view('/dance-studios-in-plano-tx');
});

Route::get('/dance-lessons-plano', function () {
    return view('/dance-lessons-plano');
});

Route::get('/ballet-plano', function () {
    return view('/ballet-plano');
});

Route::get('/dance-allen', function () {
    return view('/dance-allen');
});

Route::get('/dance-studios-allen', function () {
    return view('/dance-studios-allen');
});

Route::get('/dance-plano', function () {
    return view('/dance-plano');
});
Route::get('/dance-richardson', function () {
    return view('/dance-richardson');
});
Route::get('/dance-frisco', function () {
    return view('/dance-frisco');
});
Route::get('/allen-dance', function () {
    return view('/allen-dance');
});

Route::get('/preschool-dance-classes-plano', function () {
    return view('/preschool-dance-classes-plano');
});

Route::get('/toddler-dance-classes-plano', function () {
    return view('/toddler-dance-classes-plano');
});

Route::get('/dance-classes-richardson', function () {
    return view('/dance-classes-richardson');
});

Route::get('/tumble-classes-plano', function () {
    return view('/tumble-classes-plano');
});

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
