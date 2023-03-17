<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
}); */

Route::get('/admin/categories', [CategoryController::class, 'index'])->name("category.index");
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name("category.create");
Route::post('/admin/categories', [CategoryController::class, 'store'])->name("category.store");
Route::get('/admin/categories/edit/{category}', [CategoryController::class, 'edit'])->name("category.edit");
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name("category.update");
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name("category.destroy");

Route::get('/admin/tags', [TagController::class, 'index'])->name("tags.index");
Route::get('/admin/tags/create', [TagController::class, 'create'])->name("tags.create");
Route::post('/admin/tags', [TagController::class, 'store'])->name("tags.store");
Route::get('/admin/tags/edit/{tag}', [TagController::class, 'edit'])->name("tags.edit");
Route::put('/admin/tags/{tag}', [TagController::class, 'update'])->name("tags.update");
Route::delete('/admin/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
