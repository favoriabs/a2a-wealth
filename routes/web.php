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
    return redirect()->route('login');
})->name('home');


Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin')->name('do_login');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('superadmin_dash');
    Route::get('create-cooperative', 'AdminController@create')->name('create_cooperative');
    Route::post('create-lecturer', 'AdminController@store')->name('create_admin');
});

Route::group(['prefix' => 'cooperative'], function () {
    Route::get('/', 'CooperativeController@index')->name('cooperative_index');
    Route::get('create', 'CooperativeController@create')->name('create_farmer');
    // Route::post('create-lecturer', 'AdminController@store')->name('create_admin');
});

// Route::get('/password', 'CooperativeController@';


