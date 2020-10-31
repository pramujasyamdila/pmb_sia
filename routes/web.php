<?php

use App\Http\Controllers\BarangControler;
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
    return view('siakad.teamplate.master');

});

// ini route dari Data Kecamatan
Route::get('/kecamatan/index','DataKecamatanController@index');
Route::get('/kecamatan/tambah','DataKecamatanController@tambah');
Route::post('/kecamatan/proses','DataKecamatanController@proses');
Route::get('/kecamatan/edit/{id}','DataKecamatanController@edit');
Route::post('/kecamatan/update','DataKecamatanController@update');
Route::get('/kecamatan/hapus/{id}','DataKecamatanController@hapus');
// ini endroute dari Data Kecamatan


Route::get('/mahasiswa/index','CalonMahasiswaController@index');
Route::get('/mahasiswa/tambah','CalonMahasiswaController@tambah');
Route::post('/mahasiswa/proses','CalonMahasiswaController@proses');
Route::get('/mahasiswa/edit/{id}','CalonMahasiswaController@edit');
Route::post('/mahasiswa/update','CalonMahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}','CalonMahasiswaController@hapus');


// Route::get('/', function () {
//     return view('index');

// });
//     });
// // ini adalah crud route
//     Route::get('crud','CrudControler@index')->name('crud');
//     Route::get('crud/tambah','CrudControler@tambah')->name('tambah');
//     // ini caranya dia masuke ke folder trus return pake blade engine dan baru di tampilka
//     Route::get('barang','BarangControler@index');

// //     // ini adalah blog example
//     Route::get('/blog','BlogController@home');
//     Route::get('/blog/tentang','BlogController@tentang');
//     Route::get('/blog/kontak','BlogController@kontak');

// Route::get('/mahasiswa','PegawaiController@unpam');
// Route::get('/mahasiswa/tambah','PegawaiController@tambah');
// Route::post('/mahasiswa/store','PegawaiController@store');

// Route::get('/mahasiswa/edit/{id}','PegawaiController@edit');
// Route::post('/mahasiswa/update','PegawaiController@update');

// Route::get('/mahasiswa/hapus/{id}','PegawaiController@hapus');




