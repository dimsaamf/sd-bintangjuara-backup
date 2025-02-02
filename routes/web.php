<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'revalidate'], function () {
    Auth::routes();

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kategorikegiatan', KategoriKegiatanController::class);
    Route::resource('kategoriberita', KategoriBeritaController::class);
    Route::resource('kategoripengumuman', KategoriPengumumanController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('admin', UserController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('testimoni', TestimoniController::class);
    Route::resource('jumbotron', JumbotronController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('waqaf', WaqafController::class);
    Route::resource('fakta', FaktaController::class);
    Route::resource('history-kegiatan', HistoryKegiatanController::class);
    Route::resource('history-artikel', HistoryArtikelController::class);
    Route::resource('history-berita', HistoryBeritaController::class);
    Route::resource('history-pengumuman', HistoryPengumumanController::class);
});

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index']);
Route::get('/detail-artikel/{slug}', [\App\Http\Controllers\FrontendController::class, 'artikel'])->name('detail-artikel');
Route::get('/detail-berita/{slug}', [\App\Http\Controllers\FrontendController::class, 'berita'])->name('detail-berita');
Route::get('/detail-kegiatan/{slug}', [\App\Http\Controllers\FrontendController::class, 'kegiatan'])->name('detail-kegiatan');
Route::get('/detail-pengumuman/{slug}', [\App\Http\Controllers\FrontendController::class, 'pengumuman'])->name('detail-pengumuman');
Route::get('/daftar-artikel', [\App\Http\Controllers\FrontendController::class, 'daftarArtikel']);
Route::get('/daftar-berita', [\App\Http\Controllers\FrontendController::class, 'daftarBerita']);
Route::get('/daftar-kegiatan', [\App\Http\Controllers\FrontendController::class, 'daftarKegiatan']);
Route::get('/daftar-pengumuman', [\App\Http\Controllers\FrontendController::class, 'daftarPengumuman']);
Route::get('/detail-waqaf', [\App\Http\Controllers\FrontendController::class, 'waqaf']);
Route::get('/gallery', [\App\Http\Controllers\FrontendController::class, 'gallery']);
Route::get('/profile', [\App\Http\Controllers\FrontendController::class, 'profil']);
Route::get('/detail-guru', [\App\Http\Controllers\FrontendController::class, 'guru']);
