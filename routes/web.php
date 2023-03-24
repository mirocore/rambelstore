<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

Route::get('/admin/products', [ProductController::class, 'index'])->name("product.index");
Route::get('/admin/products/create', [ProductController::class, 'create'])->name("product.create");
Route::post('/admin/products', [ProductController::class, 'store'])->name("product.store");
Route::get('/admin/products/edit/{product}', [ProductController::class, 'edit'])->name("product.edit");
Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name("product.update");
Route::delete('/admin/products/{product}', [ ProductController::class, "destroy" ])->name("product.destroy");

Route::get('/login', [AuthController::class, 'login'])->name("login");
Route::post('/login', [AuthController::class, 'doLogin'])->name("doLogin");
Route::post ('/logout', [AuthController::class, 'logout'])->name('logout');