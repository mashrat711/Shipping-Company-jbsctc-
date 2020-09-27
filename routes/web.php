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

Route::get('/w', function () {
    return view('welcome');
});Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('demos.Frontend.home');
});Route::get('/clients', function () {
    return view('demos.Frontend.clients');
});Route::get('/contact', function () {
    return view('demos.Frontend.contact');
});Route::get('/services', function () {
    return view('demos.Frontend.service-1');
});Route::get('/services2', function () {
    return view('demos.Frontend.service-2');
});Route::get('/services3', function () {
    return view('demos.Frontend.service-3');
});
Route::get('/achievements', function () {
    return view('demos.Frontend.achievments');
});Route::get('/quality', function () {
    return view('demos.Frontend.Quality');
});Route::get('/attribute', function () {
    return view('demos.Frontend.attribute');
});
