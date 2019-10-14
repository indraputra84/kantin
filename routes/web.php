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
    return view('welcome');
});

Route::get('/net', function(){
    echo "Belajar dan semangat senam lima jari bersama adikmu, Bintang tersayang";
});

Route::get('contact', function(){
    return view('kontak');
});

Auth::routes();

Route::get('/dashboard', function (){
    return view('desain.app');
});

Route::get('/home', 'HomeController@index')->name('home');
