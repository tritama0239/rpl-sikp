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

Route::get('/mahasiswa/jadwal_ujian/lihatjdwl', 'App\Http\Controllers\MahasiswaController@lihatjdwl')->name('lihatjdwl');
Route::get('/mahasiswa/jadwal_ujian/searchjdwl', 'App\Http\Controllers\MahasiswaController@searchjdwl')->name('searchjdwl');

//============================================================================================================================================//

Route::get('/koordinator/pengajuan_sk/lihatsk', 'App\Http\Controllers\KoordinatorController@lihatsk')->name('lihatsk');
Route::get('/koordinator/pengajuan_sk/editsk/{id}', 'App\Http\Controllers\KoordinatorController@editsk')->name('editsk');
Route::put('/koordinator/pengajuan_sk/updatesk/{id}', 'App\Http\Controllers\KoordinatorController@updatesk')->name('updatesk');
Route::get('/koordinator/pengajuan_sk/searchsk', 'App\Http\Controllers\KoordinatorController@searchsk')->name('searchsk');

Route::get('/koordinator/pengajuan_prakp/lihatprakp', 'App\Http\Controllers\KoordinatorController@lihatprakp')->name('lihatprakp');
Route::get('/koordinator/pengajuan_prakp/editprakp/{id}', 'App\Http\Controllers\KoordinatorController@editprakp')->name('editprakp');
Route::put('/koordinator/pengajuan_prakp/updateprakp/{id}', 'App\Http\Controllers\KoordinatorController@updateprakp')->name('updateprakp');
Route::get('/koordinator/pengajuan_prakp/searchprakp', 'App\Http\Controllers\KoordinatorController@searchprakp')->name('searchprakp');

Route::get('/koordinator/pengajuan_kp/lihatkp', 'App\Http\Controllers\KoordinatorController@lihatkp')->name('lihatkp');
Route::get('/koordinator/pengajuan_kp/editkp/{id}', 'App\Http\Controllers\KoordinatorController@editkp')->name('editkp');
Route::put('/koordinator/pengajuan_kp/updatekp/{id}', 'App\Http\Controllers\KoordinatorController@updatekp')->name('updatekp');
Route::get('/koordinator/pengajuan_kp/searchkp', 'App\Http\Controllers\KoordinatorController@searchkp')->name('searchkp');

Route::get('/koordinator/jadwal_ujian/tambahjdwl', 'App\Http\Controllers\KoordinatorController@tambahjdwl')->name('tambahjdwl');
Route::post('/koordinator/jadwal_ujian/simpanjdwl', 'App\Http\Controllers\KoordinatorController@simpanjdwl')->name('simpanjdwl');
Route::get('/koordinator/jadwal_ujian/editjdwl/{id}', 'App\Http\Controllers\KoordinatorController@editjdwl')->name('editjdwl');
Route::put('/koordinator/jadwal_ujian/updatejdwl/{id}', 'App\Http\Controllers\KoordinatorController@updatejdwl')->name('updatejdwl');
Route::get('/koordinator/jadwal_ujian/lihatjdwl', 'App\Http\Controllers\KoordinatorController@lihatjdwl')->name('lihatjdwl');
Route::get('/koordinator/jadwal_ujian/searchjdwl', 'App\Http\Controllers\KoordinatorController@searchjdwl')->name('searchjdwl');

Route::get('/koordinator/list_registrasi/lihatregis', 'App\Http\Controllers\KoordinatorController@lihatregis')->name('lihatregis');
Route::get('/koordinator/list_registrasi/searchregis', 'App\Http\Controllers\KoordinatorController@searchregis')->name('searchregis');

Route::get('/koordinator/batas_pelaksanaan/editbatas/{id}', 'App\Http\Controllers\KoordinatorController@editbatas')->name('editbatas');
Route::put('/koordinator/batas_pelaksanaan/updatebatas/{id}', 'App\Http\Controllers\KoordinatorController@updatebatas')->name('updatebatas');
Route::get('/koordinator/batas_pelaksanaan/lihatbatas', 'App\Http\Controllers\KoordinatorController@lihatbatas')->name('lihatbatas');
Route::get('/koordinator/batas_pelaksanaan/searchbatas', 'App\Http\Controllers\KoordinatorController@searchbatas')->name('searchbatas');

//============================================================================================================================================//

Route::get('/dosen/jadwal_ujian/lihatjdwl', 'App\Http\Controllers\DosenController@lihatjdwl')->name('lihatjdwl');
Route::get('/dosen/jadwal_ujian/searchjdwl', 'App\Http\Controllers\DosenController@searchjdwl')->name('searchjdwl');
Route::get('/dosen/daftar_bimbingan/lihatbimbingan', 'App\Http\Controllers\DosenController@lihatbimbingan')->name('lihatbimbingan');
Route::get('/dosen/daftar_bimbingan/searchbimbingan', 'App\Http\Controllers\DosenController@searchbimbingan')->name('searchbimbingan');
Route::get('/dosen/daftar_bimbingan/editbim/{id}', 'App\Http\Controllers\DosenController@editbim')->name('editbim');
Route::put('/dosen/daftar_bimbingan/updatebim/{id}', 'App\Http\Controllers\DosenController@updatebim')->name('updatebim');
