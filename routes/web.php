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

    //FEATURES
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/featured', function () {
    return view('featured');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/modal', function () {
    return view('layouts/login-modal');
});
//supplier
Route::get('/supplier-registration', function () {
    return view('supplier-registration');
});
Route::get('/itsMeCJ/I-will-create', function () {
    return view('supplier/services-profile');
});
Route::get('/itsMeCJ', function () {
    return view('supplier/supplier-profile');
});
//blog
Route::get('/blog/index', function () {
    return view('blog/index');
});
Route::get('/blog/index/portfolio', function () {
    return view('blog/portfolio');
});


Route::get('/user/index', function () {
    return view('user/index');
});



Route::get('/sample', function () {
    return view('sample');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
