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

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laporan', 'PengaduanController@show')->name('pengaduan.show');
Route::get('/laporan/status/{id}', 'PengaduanController@status')->name('pengaduan.status');
Route::get('/laporan/delete/{id}', 'PengaduanController@delete')->name('pengaduan.delete');
Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan.index');
Route::post('/pengaduan', 'PengaduanController@store')->name('pengaduan.store');
