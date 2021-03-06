<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
    Route::group(['prefix' => 'siswa'],function(){
        Route::get('/login', 'AuthSiswa\LoginController@showLogin')->name('siswa.login');
        Route::post('/login', 'AuthSiswa\LoginController@login')->name('siswa.login.input');
        Route::get('/','UsersiswaController@index')->name('user.home');
        Route::get('{siswa}/spp', 'UsersiswaController@lihat')->name('lihat.spp');
        Route::get('{kartu}/cetak', 'UsersiswaController@cetak')->name('siswa.cetak');
        Route::get('/{siswa}/bayar','UsersiswaController@bayar')->name('ortu.bayar');
        Route::post('/bayar', 'UsersiswaController@trans')->name('ortu.lunas');
    });
Route::middleware('auth')->group(function()
{
Route::group(['prefix' => 'admin'],function(){ 
Route::get('home', 'HomeController@index')->name('home');
Route::get('/siswa', 'SiswaController@home')->name('siswa');
Route::get('export', 'SiswaController@export')->name('export.siswa');
Route::get('/tahunajaran', 'TahunController@index')->name('home.tahun');
Route::post('/tahunajaran/tambah', 'TahunController@store')->name('tambah.tahun');
Route::get('/tahunajaran/{id}/hapus', 'TahunController@hapus')->name('hapus.tahun');
Route::get('/tahunajaran/{id}/edit', 'TahunController@edit')->name('edit.tahun');
Route::post('/tahunajaran/{id}/edit', 'TahunController@update')->name('update.tahun');
Route::get('/siswa/tambah','SiswaController@tambah')->name('siswa.tambah');
Route::post('/home/create', 'SiswaController@store')->name('siswa.create');
Route::get('/{siswa}/hapus', 'SiswaController@destroy')->name('siswa.delete');
Route::get('/{siswa}/edit', 'SiswaController@edit')->name('siswa.edit');
Route::post('/{siswa}/update', 'SiswaController@update')->name('siswa.update');
Route::post('import', 'SiswaController@import')->name('import.siswa');
Route::get('/pembayaran', 'PembayaranController@index')->name('bayar.index');
Route::get('/pembayaran/{siswa}/daftar', 'PembayaranController@daftar')->name('bayar.daftar');
Route::post('/pembayaran/{siswa}/ulang', 'PembayaranController@ulang')->name('bayar.daftarulang');
Route::post('/pembayaran/{kartu}/lunas', 'PembayaranController@lunas')->name('bayar.lunas');
Route::get('/pembayaran/{kartu}/cetak','PembayaranController@cetak')->name('bayar.cetak');
Route::get('/kelas', 'KelasController@index')->name('home.kelas');
Route::post('/kelas/tambah', 'KelasController@store')->name('tambah.kelas');
Route::get('/kelas/{kelas}/hapus','KelasController@destroy')->name('hapus.kelas');
Route::get('/kelas/{kelas}/ubah','KelasController@ubah')->name('ubah.kelas');
Route::post('kelas/{kelas}/update', 'KelasController@update')->name('update.kelas');
Route::get('/laporan','RekapController@index')->name('rekap');
Route::get('/laporan/rekap', 'RekapController@lihat')->name('lihat.rekap');
Route::get('/laporan/kelas/rekap/', 'RekapController@kelas')->name('kelas.rekap');
Route::post('/bayar/{bayar}/ortu', 'UsersiswaController@confirm')->name('confirm.bayar');
});
});