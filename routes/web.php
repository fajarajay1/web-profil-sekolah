<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSiswa;
use App\Http\Controllers\DataBerita;
use App\Http\Controllers\DataGallery;
use App\Http\Controllers\DataGuru;
use App\Http\Controllers\UserControlController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned  to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    $sambutan = App\Models\sambutan::get();
    return view('halaman_depan/index',['sambutan'=>$sambutan]);
});
Route::get('/', function () {
    $prestasi = App\Models\prestasi::get();
    return view('halaman_depan/index',['prestasi'=>$prestasi]);
});

//apakah akan ada sesuatu yang akan meyakinkan hidup ini menjadi sesuatuu yang sangat menegangkan, dan pada saat ini yang kita lakukan adalah bismillah #anjay slebew
Route::middleware(['guest'])->group(function () {
    Route::view('/', 'halaman_depan/index');
    Route::get('/sesi', [AuthController::class, 'index'])->name('auth');
    Route::post('/sesi', [AuthController::class, 'login']);
    Route::get('/reg', [AuthController::class, 'create'])->name('registrasi');
    Route::post('/reg', [AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('/home', '/user');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('userAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user');

    //////// SISWA //////
    Route::get('/datasiswa', [DataSiswa::class, 'index'])->name('datasiswa');
    Route::get('/dasistambah', [DataSiswa::class, 'tambah']);
    Route::get('/dasisedit/{id}', [DataSiswa::class, 'edit']);
    Route::post('/dasishapus/{id}', [DataSiswa::class, 'hapus']);

    //////// GALLERY //////////
    Route::get('/datagallery', [DataGallery::class, 'index'])->name('datagallery.index');
    Route::get('/dagaltambah', [DataGallery::class, 'tambah']);
    Route::get('/dagaledit/{id}', [DataGallery::class, 'edit']);
    Route::post('/dagalhapus/{id}', [DataGallery::class, 'hapus']);

    ////////BERITA //////////
    Route::get('/databerita', [DataBerita::class, 'index'])->name('databerita.index');
    Route::get('/dabertambah', [DataBerita::class, 'tambah']);
    Route::get('/daberedit/{id}', [DataBerita::class, 'edit']);
    Route::post('/daberhapus/{id}', [DataBerita::class, 'hapus']);

    ///////// GURU /////////////
    Route::get('/dataguru', [DataGuru::class, 'index'])->name('dataguru.index');
    Route::get('/dagurtambah', [DataGuru::class, 'tambah']);
    Route::get('/daguredit/{id}', [DataGuru::class, 'edit']);
    Route::post('/dagurhapus/{id}', [DataGuru::class, 'hapus']);

    Route::get('/usercontrol', [UserControlController::class, 'index'])->name('usercontrol');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // new siswa
    Route::post('/tambahdasis', [DataSiswa::class, 'create']);
    Route::post('/editdasis', [DataSiswa::class, 'change']);

    // new gallery
    Route::post('/tambahdagal', [DataGallery::class, 'create']);
    Route::post('/editdagal', [DataGallery::class, 'change']);

    // new berita
    Route::post('/tambahdaberr', [DataBerita::class, 'create']);
    Route::post('/editdaberr', [DataBerita::class, 'change']);

    // new guru
    Route::post('/tambahdagur', [DataGuru::class, 'create']);
    Route::post('/editdagur', [DataGuru::class, 'change']);

    Route::get('/tambahuc', [UserControlController::class, 'tambah']);
    Route::get('/edituc/{id}', [UserControlController::class, 'edit']);
    Route::post('/hapusuc/{id}', [UserControlController::class, 'hapus']);
    Route::post('/tambahuc', [UserControlController::class, 'create']);
    Route::post('/edituc', [UserControlController::class, 'change']);

});

//pemanggilan
Route::get('/page/sambutan-kepala-sekolah', [App\Http\Controllers\pageController::class, 'sambutan'])->name('/page/sambutan-kepala-sekolah');
Route::get('/page/prestasi', [App\Http\Controllers\pageController::class, 'prestasi'])->name('/page/prestasi');
// sambutan Kepala sekolah
Route::get('/profil/kepala-sekolah',[App\Http\Controllers\profilController::class,'sambutan'])->name('profil.kepala-sekolah.index');
Route::get('/profil/kepala-sekolah/create',[App\Http\Controllers\profilController::class,'sambutanCreate'])->name('profil/kepala-sekolah/create');
Route::get('/profil/kepala-sekolah/edit/{sambutan}',[App\Http\Controllers\profilController::class,'sambutanEdit'])->name('profil.kepala-sekolah.edit');
Route::post('/profil/kepala-sekolah/post',[App\Http\Controllers\profilController::class,'sambutanPost'])->name('profil.kepala-sekolah.post');
Route::get('/profil/kepala-sekolah/index/delete/{id}', [App\Http\Controllers\profilController::class,'sambutanDel']);
Route::get('/profil/kepala-sekolah/detail/{id}', [App\Http\Controllers\profilController::class,'sambutanDetail'])->name('profil.kepala-sekolah.detail');

// prestasi
Route::get('/profil/prestasi',[App\Http\Controllers\profilController::class,'prestasiGet'])->name('profil.prestasi.index');
Route::get('/profil/prestasi/create',[App\Http\Controllers\profilController::class,'prestasiCreate'])->name('profil/prestasi/create');
Route::get('/profil/prestasi/edit/{prestasi}',[App\Http\Controllers\profilController::class,'prestasiEdit'])->name('profil.prestasi.edit');
Route::post('/profil/prestasi/post',[App\Http\Controllers\profilController::class,'prestasiPost'])->name('profil.prestasi.post');
Route::get('/profil/prestasi/index/delete/{id}', [App\Http\Controllers\profilController::class,'prestasiDel']);
