<?php

use App\Http\Controllers\{
    ProfileController,
    OrderController,    
    ServiceController
};

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Welcome'))->name('welcome');

Route::get('/order', [OrderController::class, 'showOrder'])->name('order.show');


Route::get('/test', function(){
    return Inertia::render('ListServices');
});

Route::get('/dashboard', fn() => Inertia::render('Dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/{slug}', [ServiceController::class, 'index'])->name('service.show');

require __DIR__.'/auth.php';
