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

Route::get('/', 'DashboardController@index');
/* DataSiswa */
Route::get('/datasiswaaktif', 'DataSiswaAktifController@index');
Route::get('/data-siswa-aktif', 'DataSiswaAktifController@dataSiswaAktif');
Route::resource('datasiswaaktif', 'DataSiswaAktifController');
Route::get('/exportpdf', 'DataSiswaAktifController@exportPDF');
/* DataTahun */
Route::get('/datatahun', 'DataTahunController@index');
Route::get('/data-tahun', 'DataTahunController@dataTahun');
Route::resource('datatahun', 'DataTahunController');




