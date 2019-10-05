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

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::get('/kategori_artikel', 'kategoriArtikelcontroller@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create', 'kategoriArtikelcontroller@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel', 'kategoriArtikelcontroller@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}', 'kategoriArtikelcontroller@show')->name('kategori_artikel.show');

Route::get('/kategori_berita', 'kategoriBeritacontroller@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create', 'kategoriBeritacontroller@create')->name('kategori_berita.create');
Route::post('/kategori_berita', 'kategoriBeritacontroller@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}', 'kategoriBeritacontroller@show')->name('kategori_berita.show');

Route::get('/kategori_galeri', 'KategoriGalericontroller@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create', 'kategoriGalericontroller@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri', 'kategoriGalericontroller@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}', 'KategoriGalericontroller@show')->name('kategori_galeri.show');

Route::get('/kategori_pengumuman', 'KategoriPengumumancontroller@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create', 'kategoriPengumumancontroller@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman', 'kategoriPengumumancontroller@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}', 'KategoriPengumumancontroller@show')->name('kategori_pengumuman.show');

Route::get('/artikel', 'Artikelcontroller@index')->name('artikel.index');
Route::get('/artikel/{id}', 'Artikelcontroller@show')->name('artikel.show');

Route::get('/berita', 'Beritacontroller@index')->name('berita.index');
Route::get('/berita/{id}', 'Beritacontroller@show')->name('berita.show');

Route::get('/galeri', 'Galericontroller@index')->name('galeri.index');
Route::get('/galeri/{id}', 'Galericontroller@show')->name('galeri.show');

Route::get('/pengumuman', 'Pengumumancontroller@index')->name('pengumuman.index');
Route::get('/pengumuman/{id}', 'Pengumumancontroller@show')->name('pengumuman.show');

