<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/portfolio3', function () {
    return view('portfolio3');
});

Route::get('/portfolio4', function () {
    return view('portfolio4');
});

Route::get('/portfolio-item', function () {
    return view('portfolio-item');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-post', function () {
    return view('blog-post');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/partners', 'PartnerController');
Route::resource('/deliveries', 'DeliveryController');
Route::resource('/cities', 'CityController');
Route::get('/new', 'NewController@index')->name('new');

Route::get('/profile', 'ProfileController@show')->middleware('auth')->name('profile');
Route::post('/profile', 'ProfileController@update')->middleware('auth')->name('profile');






