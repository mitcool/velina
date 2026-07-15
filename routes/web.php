<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\ArtworkController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['setLocale'])->group(function () {

    Route::get('/', [ShopController::class, 'index'])->name('welcome');
    Route::get('/gallery/{slug?}', [ShopController::class, 'gallery'])->name('gallery');
    Route::get('/contact', [ShopController::class, 'contact'])->name('contact');
    Route::get('/about', [ShopController::class, 'about'])->name('about');
});

Route::post('/contact',[ShopController::class, 'contactPost'])->name('contact-post')->middleware('throttle:5,1');;

Route::get('change-language/{lang}',[ShopController::class,'changeLanguage'])->name('change-language');

Route::get('/edit-gallery',[ShopController::class,'editGallery'])->name('edit-gallery');
Route::post('/add-picture',[ShopController::class,'addPicture'])->name('add-picture');
Route::get('/arwork/edit/{id}',[ShopController::class,'editSingleArtwork'])->name('edit-single-artwork');
Route::post('/artwork/update/{id}',[ShopController::class,'updateArtwork'])->name('update-artork');
Route::post('/artwork/delete/{id}',[ShopController::class,'deleteArtwork'])->name('delete-artwork');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::resource('artworks', ArtworkController::class);
});
require __DIR__.'/auth.php';
