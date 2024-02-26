<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('products.category.food-beverage');
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('products.category.beauty-health');
    Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('products.category.home-care');
    Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('products.category.baby-kid');
});

