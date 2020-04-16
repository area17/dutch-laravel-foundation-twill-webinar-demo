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

Route::name('home')->get('/', function () {
    return view('site.welcome');
});

Route::name('about')->get('/about-us', function () {
    return view('site.about');
});

Route::name('members')->get('/our-members', function () {
    return view('site.members');
});

Route::name('calendar')->get('/calendar', function () {
    return view('site.calendar');
});

Route::name('event')->get('/event', function () {
    return view('site.event');
});
