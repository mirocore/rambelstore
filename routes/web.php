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
/* Route::prefix('logos')->group(function () {
 */
Route::prefix('admin')->group(function (){


    Route::prefix('categories')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name("category.index");
        Route::post('/', [CategoryController::class, 'store'])->name("category.store");
        Route::get('/create', [CategoryController::class, 'create'])->name("category.create");
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name("category.edit");
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name("category.destroy");
        Route::put('/{category}', [CategoryController::class, 'update'])->name("category.update");
    });

    Route::prefix('tags')->group(function(){
        Route::get('/', [TagController::class, 'index'])->name("tags.index");
        Route::post('/', [TagController::class, 'store'])->name("tags.store");
        Route::get('/create', [TagController::class, 'create'])->name("tags.create"); 
        Route::get('/edit/{tag}', [TagController::class, 'edit'])->name("tags.edit");
        Route::put('/{tag}', [TagController::class, 'update'])->name("tags.update");
        Route::delete('/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
    });

    Route::prefix('products')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name("product.index");
        Route::post('/', [ProductController::class, 'store'])->name("product.store");
        Route::get('/create', [ProductController::class, 'create'])->name("product.create");
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name("product.edit");
        Route::put('/{product}', [ProductController::class, 'update'])->name("product.update");
        Route::delete('/{product}', [ ProductController::class, "destroy" ])->name("product.destroy");
    });
});

    Route::get('/login', [AuthController::class, 'login'])->name("login");
    Route::post('/login', [AuthController::class, 'doLogin'])->name("doLogin");
    Route::post ('/logout', [AuthController::class, 'logout'])->name('logout');