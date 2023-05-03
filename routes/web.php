<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomerController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\programController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HobiController::class, 'index'])->name('home');
    Route::get('/', [HomerController::class, 'index']);

    Route::get('/about', ['about']);

    Route::pattern('id', '[0-9]+');

    Route::get('/articles/{id}', ['articles']);

    Route::get('/category/{category_name}', [ProductController::class, 'index']);

    Route::get('/news/{news_name}', [NewController::class, 'index']);

    Route::get('/program/{program_name}', [programController::class, 'index']);

    Route::get('/about-us', [AboutController::class, 'index']);

    // Route::resources('/contact-us', ContactController::class);

    Route::get('/', [HomerController::class, 'index']);

    Route::get('/profile', [profileController::class, 'index']);

    Route::get('/dashboard', [DashboarController::class, 'index']);

    Route::get('/artkel', [ArtikelController::class, 'index']);

    Route::get('/pengalaman-kuliah', [PengalamanController::class, 'index']);

    Route::resource('/hobi', HobiController::class);

    Route::resource('/keluarga', KeluargaController::class);

    Route::resource('/matakuliah', MataKuliahController::class);

    Route::resource('/mahasiswa', MahasiswaController::class);

    Route::resource('/buku', BukuController::class);

    Route::post('cari', [BukuController::class, 'cari'])->name('cari');


    Route::prefix('product')->group(function () {
        Route::get('/roti', [ProductController::class, 'roti']);
        Route::get('/susu', [ProductController::class, 'susu']);
        Route::get('/keripik', [ProductController::class, 'keripik']);
        Route::get('/', [ProductController::class, 'index']);
    });

    Route::get('/new/{news_name}', [NewController::class, 'index']);

    Route::prefix('program')->group(function () {
        Route::get('/kelistrikan', [programController::class, 'kelistrikan']);
        Route::get('/pertanian', [programController::class, 'pertanian']);
        Route::get('/keuangan', [programController::class, 'keuangan']);
        Route::get('/', [programController::class, 'index']);
    });

    Route::get('/about-us', [AboutController::class, 'index']);

    Route::get('/contact-us', [ContactController::class, 'index']);
});
