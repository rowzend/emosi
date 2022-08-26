<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

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

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('super.admin.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
