<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('Home');
});
Route::prefix('/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index.category');
    Route::get('/create', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/create', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/{id}/update', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/{id}/update', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('delete.category');
});
Route::prefix('/product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index.product');
    Route::get('/create', [ProductController::class, 'create'])->name('create.product');
    Route::post('/create', [ProductController::class, 'store'])->name('store.product');
    Route::get('/{id}/update', [ProductController::class, 'edit'])->name('edit.product');
    Route::post('/{id}/update', [ProductController::class, 'update'])->name('update.product');
    Route::get('/{id}/delete', [ProductController::class, 'destroy'])->name('delete.product');
});