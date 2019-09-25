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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route tugas
Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('/galeri', 'GaleriController@index')->name('galeri.index');
Route::get('/berita', 'BeritaController@index')->name('berita.index');
Route::get('/pengumuman', 'PengumumanController@index')->name('pengumuman.index');
//route mahasiswa crud
Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa','MahasiswaController@Create');
Route::get('/mahasiswa/store','MahasiswaController@store');
Auth::routes();
Route::get('ajax_regen_captcha', function(){
    return captcha_src();
});
Route::get('/home', 'HomeController@index')->name('home');
//captcha
Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');
Route::get('/refereshcapcha', 'HelperController@refereshCapcha');