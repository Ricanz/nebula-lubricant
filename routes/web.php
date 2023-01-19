<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
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

Route::get('/', function () {
    return view('guest.index');
});

Route::get('/about', function () {
    return view('guest.about');
});

Route::get('/contact', function () {
    return view('guest.contact');
});

Route::get('/article', function () {
    return view('guest.article');
});

Route::get('/article-detail', function () {
    return view('guest.articleDetail');
});

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

// Banner
Route::get('/admin/banners', [BannerController::class, 'index'])->name('banners');
Route::get('/admin/banner/create', [BannerController::class, 'create']);
Route::post('/admin/banner/create', [BannerController::class, 'submit'])->name('submitBanner');
Route::get('/admin/banner/edit/{id}', [BannerController::class, 'edit']);
Route::post('/admin/banner/edit', [BannerController::class, 'update'])->name('updateBanner');

// Article
Route::get('/admin/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/admin/article/create', [ArticleController::class, 'create']);
Route::post('/admin/article/create', [ArticleController::class, 'submit'])->name('submitArticle');
Route::get('/admin/article/edit/{id}', [ArticleController::class, 'edit']);
Route::post('/admin/article/edit', [ArticleController::class, 'update'])->name('updateArticle');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
