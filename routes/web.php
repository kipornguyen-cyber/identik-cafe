<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/menu', [WebsiteController::class, 'menu'])->name('menu');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('/contact', [WebsiteController::class, 'storeContact'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{contactMessage}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/contacts/{contactMessage}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});
