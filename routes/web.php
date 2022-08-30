<?php

use App\Http\Controllers\BiodataPegawaiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerHomeControoler;
use App\Http\Controllers\Mutasi\BerkasMutasiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuperAdminHomeController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

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
    return view('beranda', [
        "title" => "SELAMAT DATANG!!"
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->nama,
        'mutasi' => $category->mutasi,
        'identitas' => $category->identitas,
        'category' => $category->nama
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Daftar Kategori',
        'categories' => Category::all()
    ]);
});

Route::get('/mutasi', [PostController::class, 'indexMutasi'])->name('index.mutasi');

Route::get('mutasi/{mutasib:slug}', [PostController::class, 'showMutasib']);

Route::get('/identitas', [PostController::class, 'indexIdentitas'])->name('index.identitas');

Route::get('identitas/{identitasb:slug}', [PostController::class, 'showIdentitasb']);

Route::get('/kepangkatan', [PostController::class, 'indexKepangkatan'])->name('index.kepangkatan');

Route::get('kepangkatan/{kepangkatanb:slug}', [PostController::class, 'showKepangkatanb']);

Route::get('/well', function () {
    return view('welcome', [
        "title" => "TEST"
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('super-admin')->group(function () {
    Route::get('home', [SuperAdminHomeController::class, 'superAdminHome'])->name('home.superAdmin');
});

Route::prefix('manager')->group(function () {
    Route::get('home', [ManagerHomeControoler::class, 'managerHome'])->name('home.manager');
});

Route::prefix('dashboard')->group(function () {
    Route::get('home', [App\Http\Controllers\UserHomeController::class, 'userHome'])->name('home.users');
});

Route::resource('biodata-pegawai', BiodataPegawaiController::class)->middleware(['auth', 'active']);

Route::resource('mutasi-berkas', BerkasMutasiController::class)->middleware(['auth', 'active', 'mutasi']);
