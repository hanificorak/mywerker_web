<?php

use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HowItWorksController;
use App\Http\Controllers\Home\ServicesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/how-it-works', [HowItWorksController::class, 'index'])->name('howitworks');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog}/{slug?}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
