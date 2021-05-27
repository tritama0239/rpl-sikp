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

Route::get('/mahasiswa/pengajuan_sk/tambah', 'App\Http\Controllers\MahasiswaController@tambah')->name('tambah');
Route::post('/mahasiswa/pengajuan_sk/simpan', 'App\Http\Controllers\MahasiswaController@simpan')->name('simpan');
Route::get('/mahasiswa/pengajuan_prakp/tambah1', 'App\Http\Controllers\MahasiswaController@tambah1')->name('tambah1');
Route::post('/mahasiswa/pengajuan_prakp/simpan1', 'App\Http\Controllers\MahasiswaController@simpan1')->name('simpan1');
Route::get('/mahasiswa/pengajuan_kp/tambah2', 'App\Http\Controllers\MahasiswaController@tambah2')->name('tambah2');
Route::post('/mahasiswa/pengajuan_kp/simpan2', 'App\Http\Controllers\MahasiswaController@simpan2')->name('simpan2');

//============================================================================================================================================//

Route::get('/koordinator/pengajuan_sk/lihatsk', 'App\Http\Controllers\KoordinatorController@lihatsk')->name('lihatsk');
Route::get('/koordinator/pengajuan_sk/editsk/{id}', 'App\Http\Controllers\KoordinatorController@editsk')->name('editsk');
Route::put('/koordinator/pengajuan_sk/updatesk/{id}', 'App\Http\Controllers\KoordinatorController@updatesk')->name('updatesk');
Route::post('/koordinator/pengajuan_sk/searchsk', 'App\Http\Controllers\KoordinatorController@searchsk')->name('searchsk');

Route::get('/koordinator/pengajuan_prakp/lihatprakp', 'App\Http\Controllers\KoordinatorController@lihatprakp')->name('lihatprakp');
Route::get('/koordinator/pengajuan_prakp/editprakp/{id}', 'App\Http\Controllers\KoordinatorController@editprakp')->name('editprakp');
Route::put('/koordinator/pengajuan_prakp/updateprakp/{id}', 'App\Http\Controllers\KoordinatorController@updateprakp')->name('updateprakp');
Route::post('/koordinator/pengajuan_prakp/searchprakp', 'App\Http\Controllers\KoordinatorController@searchprakp')->name('searchprakp');

Route::get('/koordinator/pengajuan_kp/lihatkp', 'App\Http\Controllers\KoordinatorController@lihatkp')->name('lihatkp');
Route::get('/koordinator/pengajuan_kp/editkp/{id}', 'App\Http\Controllers\KoordinatorController@editkp')->name('editkp');
Route::put('/koordinator/pengajuan_kp/updatekp/{id}', 'App\Http\Controllers\KoordinatorController@updatekp')->name('updatekp');
Route::post('/koordinator/pengajuan_kp/searchkp', 'App\Http\Controllers\KoordinatorController@searchkp')->name('searchkp');

//============================================================================================================================================//

