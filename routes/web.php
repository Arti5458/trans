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

Route::get('/' , function () {
    return view('home');
})->name('home');

Route::get('/from_moscow' , function () {
    return view('from_moscow');
})->name('fromMoscow');

Route::get('/to_moscow' , function () {
    return view('from_moscow');
})->name('toMoscow');

Route::get('/help_in_moscow' , function () {
    return view('help_in_moscow');
})->name('helpInMoscow');

Route::get('/delivery_to_minsk' , function () {
    return view('delivery_to_minsk');
})->name('deliveryToMinsk');

Route::get('/delivery_from_ikea' , function () {
    return view('delivery_from_ikea');
})->name('deliveryFromIKEA');

Route::get('/prices' , function () {
    return view('prices');
})->name('prices');

Route::get('/contacts' , function () {
    return view('contacts');
})->name('contacts');

Route::get('/services' , function () {
    return view('services');
})->name('services');