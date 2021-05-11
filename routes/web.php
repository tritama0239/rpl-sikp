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

Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

//auth -> koordinator || dosen || mahasiswa

Route::group(['middleware' =>['auth']], function(){
    Route::group(['middleware' => ['cek_login:koordinator']], function(){
        Route::get('koordinator', 'App\Http\Controllers\KoordinatorController@index')->name('koordinator');
    });

    Route::group(['middleware' => ['cek_login:dosen']], function(){
        Route::get('dosen', 'App\Http\Controllers\DosenController@index')->name('dosen');
    });

    Route::group(['middleware' => ['cek_login:mahasiswa']], function(){
        Route::get('mahasiswa', 'App\Http\Controllers\MahasiswaController@index')->name('v_mahasiswa');
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/koordinator/pengajuan_sk/lihatsk', 'App\Http\Controllers\KoordinatorController@lihatsk')->name('lihatsk');

Route::get('/mahasiswa/pengajuan_sk/tambah', 'App\Http\Controllers\MahasiswaController@tambah')->name('tambah');
Route::post('/mahasiswa/pengajuan_sk/simpan', 'App\Http\Controllers\MahasiswaController@simpan')->name('simpan');
Route::get('/koordinator/pengajuan_sk/editsk{id}', 'App\Http\Controllers\KoordinatorController@editsk')->name('editsk');
Route::put('/koordinator/pengajuan_sk/updatesk{id}', 'App\Http\Controllers\KoordinatorController@updatesk')->name('updatesk');
Route::post('/koordinator/pengajuan_sk/searchsk', 'App\Http\Controllers\KoordinatorController@searchsk')->name('searchsk');







Route::get('/pengajuan_prakp/ajukan', 'App\Http\Controllers\MahasiswaController@pengajuanprakp')->name('pengajuanprakp');
Route::get('/pengajuan_kp/ajukan', 'App\Http\Controllers\MahasiswaController@pengajuankp]')->name('pengajuankp');
