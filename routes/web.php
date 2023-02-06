<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MailController;
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

// Guest Page
Route::get('/about', function () {
    return view('guest.about');
});

Route::get('/contact', function () {
    return view('guest.contact');
});

// User Page
Route::get('/', [GeneralController::class, 'index'])->name('home');
Route::get('/article', [GeneralController::class, 'article']);
Route::get('/article-detail/{slug}', [GeneralController::class, 'article_detail']);
Route::post('/subscribe', [GeneralController::class, 'subscribe'])->name('subscribe');
Route::get('/offer/{id}', [GeneralController::class, 'offer'])->name('offer');

Route::get('/send-mail', [MailController::class, 'send_mail']);


Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    });

    // Upload Images
    Route::get('/admin/uploads', [BannerController::class, 'upload_image_data'])->name('uploads');
    Route::get('/admin/upload/create', [BannerController::class, 'upload_image_create']);
    Route::post('/admin/upload/create', [BannerController::class, 'upload_image'])->name('submitImage');

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

    // Primary Article
    Route::get('/admin/primary-article', [ArticleController::class, 'primary_article'])->name('primaryArticle');
    Route::get('/admin/primary-article/create', [ArticleController::class, 'primary_create']);
    Route::post('/admin/primary-article/create', [ArticleController::class, 'primary_submit'])->name('submitPrimary');

    // Offer
    Route::get('/admin/offer', [OfferController::class, 'index'])->name('offer');
    Route::get('/admin/offer/edit/{id}', [OfferController::class, 'edit']);
    Route::post('/admin/offer/edit/', [OfferController::class, 'update'])->name('updateOffer');

    // Client
    Route::get('/admin/clients', [ClientController::class, 'index'])->name('client');
    Route::get('/admin/client/create', [ClientController::class, 'create']);
    Route::post('/admin/client/create', [ClientController::class, 'submit'])->name('submitClient');
    Route::get('/admin/client/edit/{id}', [ClientController::class, 'edit']);
    Route::post('/admin/client/edit', [ClientController::class, 'update'])->name('updateClient');

    // Testimonial
    Route::get('/admin/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
    Route::get('/admin/testimonial/create', [TestimonialController::class, 'create']);
    Route::post('/admin/testimonial/create', [TestimonialController::class, 'submit'])->name('addTestimoni');
    Route::get('/admin/testimonial/edit/{id}', [TestimonialController::class, 'edit']);
    Route::post('/admin/testimonial/edit', [TestimonialController::class, 'update'])->name('updateTestimoni');

    // Subscribe
    Route::get('/admin/subscribe', [SubscribeController::class, 'index'])->name('testimonials');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
