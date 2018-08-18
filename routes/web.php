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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
// Untuk mengatur data dosen
Route::resource('/dosen', 'dosenController');
Route::get('/dosen/{id}/edit', 'dosenController@edit');
Route::get('/dosen/{id}/show', 'dosenController@show');
Route::put('/dosen/{id}/update', 'dosenController@update');
Route::get('/dosen/{id}/destroy', 'dosenController@destroy');
// Untuk mengatur data mahasiswa
Route::resource('/mahasiswa', 'mahasiswaController');
Route::get('/mahasiswa/{id}/edit', 'mahasiswaController@edit');
Route::get('/mahasiswa/{id}/show', 'mahasiswaController@show');
Route::put('/mahasiswa/{id}/update', 'mahasiswaController@update');
Route::get('/mahasiswa/{id}/destroy', 'mahasiswaController@destroy');
// Untuk mengatur data matakuliah
Route::resource('/matakuliah', 'matakuliahController');
Route::get('/matakuliah/{id}/edit', 'matakuliahController@edit');
Route::get('/matakuliah/{id}/show', 'matakuliahController@show');
Route::put('/matakuliah/{id}/update', 'matakuliahController@update');
Route::get('/matakuliah/{id}/destroy', 'matakuliahController@destroy');
// Untuk mengatur data periode
Route::resource('/periode', 'periodeController');
Route::get('/periode/{id}/edit', 'periodeController@edit');
Route::get('/periode/{id}/show', 'periodeController@show');
Route::put('/periode/{id}/update', 'periodeController@update');
Route::get('/periode/{id}/destroy', 'periodeController@destroy');
// Untuk mengatur data kerja praktek
Route::resource('/kerja_praktek', 'kerjaPraktekController');
Route::get('/kerja_praktek/{id}/edit', 'kerjaPraktekController@edit');
Route::get('/kerja_praktek/{id}/show', 'kerjaPraktekController@show');
Route::put('/kerja_praktek/{id}/update', 'kerjaPraktekController@update');
Route::get('/kerja_praktek/{id}/destroy', 'kerjaPraktekController@destroy');
// Untuk mengatur data tugas akhir
Route::resource('/tugas_akhir', 'tugasAkhirController');
Route::get('/tugas_akhir/{id}/edit', 'tugasAkhirController@edit');
Route::get('/tugas_akhir/{id}/show', 'tugasAkhirController@show');
Route::put('/tugas_akhir/{id}/update', 'tugasAkhirController@update');
Route::get('/tugas_akhir/{id}/destroy', 'tugasAkhirController@destroy');
// Untuk mengatur data nary data
Route::resource('/jadwal_dosen', 'naryController');
Route::get('/jadwal_dosen/{id}/edit', 'naryController@edit');
Route::get('/jadwal_dosen/{id}/show', 'naryController@show');
Route::put('/jadwal_dosen/{id}/update', 'naryController@update');
Route::get('/jadwal_dosen/{id}/destroy', 'naryController@destroy');
// Untuk mengatur data naryM data
Route::resource('/jadwal_mahasiswa', 'naryMController');
Route::get('/jadwal_mahasiswa/{id}/edit', 'naryMController@edit');
Route::get('/jadwal_mahasiswa/{id}/show', 'naryMController@show');
Route::put('/jadwal_mahasiswa/{id}/update', 'naryMController@update');
Route::get('/jadwal_mahasiswa/{id}/destroy', 'naryMController@destroy');

/*<form action="{{ route('karyawan.destroy', $karyawan->id) }}" id="formDelete{{ $karyawan->id}}" name="formDelete{{ $karyawan->id}}" method="POST">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}*/

// Route for admin
// Hanya untuk login admin
Route::get('/', 'HomeController@admin');
Route::resource('/admin', 'adminController');

// ROUTE UNTUK MAHASISWA DAN DOSEN
// Untuk mengatur login mahasiswa
Route::get('/user/mahasiswa', 'HomeController@index_mahasiswa');
// Untuk mengatur login dosen
Route::get('/user/dosen', 'HomeController@index_dosen');

// Chat
Route::resource('/chat', 'chatController');
Route::get('/chat/{id}/edit', 'chatController@edit');
Route::get('/chat/{id}/show', 'chatController@show');
Route::put('/chat/{id}/update', 'chatController@update');
Route::get('/chat/{id}/destroy', 'chatController@destroy');

// Slot Dosen
Route::resource('/slot', 'slotDosenController');
Route::get('/slot/{id}/edit', 'slotDosenController@edit');
Route::get('/slot/{id}/show', 'slotDosenController@show');
Route::put('/slot/{id}/update', 'slotDosenController@update');
Route::get('/slot/{id}/destroy', 'slotDosenController@destroy');

// Slot Dosen
Route::resource('/slotMhs', 'slotMahasiswaController');
Route::get('/slotMhs/{id}/edit', 'slotMahasiswaController@edit');
Route::get('/slotMhs/{id}/show', 'slotMahasiswaController@show');
Route::put('/slotMhs/{id}/update', 'slotMahasiswaController@update');
Route::get('/slotMhs/{id}/destroy', 'slotMahasiswaController@destroy');

// Settings Dosen
Route::resource('/setting_dosen', 'settingDosen');
Route::get('/setting_dosen/{id}/edit', 'settingDosen@edit');
Route::get('/setting_dosen/{id}/show', 'settingDosen@show');
Route::put('/setting_dosen/{id}/update', 'settingDosen@update');
Route::get('/setting_dosen/{id}/destroy', 'settingDosen@destroy');