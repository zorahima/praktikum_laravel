<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function () { #namaurlnya
    return view('coba1'); #folder.namafile
});
Route::get('coba1', function () { #namaurlnya
    return view('coba1'); #folder.namafile
});

Route::get('coba2', function () { #namaurlnya
    return view('coba2'); #folder.namafile
});


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
