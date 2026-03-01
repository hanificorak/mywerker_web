<?php

use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HowItWorksController;
use App\Http\Controllers\Home\ServicesController;
use App\Http\Controllers\Home\WaitingController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/sitemapv1.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/how-it-works', [HowItWorksController::class, 'index'])->name('howitworks');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}/{slug?}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/waiting', [WaitingController::class, 'index'])->name('waiting');
