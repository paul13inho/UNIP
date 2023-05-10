<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientSaleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSaleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Models\ClientSale;
use App\Models\ProductSale;
use App\Models\Status;
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

Route::get('/testes', [PageController::class, 'index']);

Route::get('/register-product', [ProductController::class, 'index']);
Route::post('register-product', [ProductController::class, 'store']);
Route::post('/search', [ProductController::class, 'show'])->name('search');

Route::get('/register-client', [ClientController::class, 'index']);
Route::post('/register-client', [ClientController::class, 'store']);

Route::get('/client-sale', [ClientController::class, 'show']);
Route::post('/client-sale', [ClientController::class, 'show']);
Route::post('/client-sale-next', [ClientSaleController::class, 'store'])->name('client-sale-next');

Route::get('product-sale', [ProductSaleController::class, 'index']);

Route::get('/make-sale', [ProductController::class, 'show']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'view']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
