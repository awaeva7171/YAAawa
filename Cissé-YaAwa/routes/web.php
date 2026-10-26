<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/',[CatalogController::class,'index'])->name('home');
Route::get('/boutique', [CatalogController::class, 'boutique'])->name('catalog');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
