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
     return view('home');
});

// Route::get('/home', 'PageController@home');
// Route::get('/mahasiswa', 'PageController@mahasiswa');
// Route::get('/dosen', 'PageController@dosen');
// Route::get('/karyawan', 'PageController@karyawan');
// Route::get('/terima', 'PageController@terima');

// NOMOR 2
//Route::get('/maha' , 'PageController@mahasiswa');
Route::get('/mahasiswa' , 'PageController@mahasiswa');
Route::get('/mahasiswa/simpan' , 'PageController@simpan');
// End Nomor 2

// Start Nomor 3
Route::get('/dosen', 'PageController@dosen');
Route::post('/dosen/terimadosen', 'PageController@terimadosen');

// End Nomor 3

// Start Nomor 4
Route::get('/tabel', 'PageController@tabel');
// End Nomor 4

// Start Nomor 5
Route::get('/waktu', 'PageController@waktu');
// End Nomor 5