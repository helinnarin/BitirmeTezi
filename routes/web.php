<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/books-index', [HomeController::class, 'books'])->name('allBooks');
Route::get('/bookinfo', [HomeController::class, 'bookinfo']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/help', [HomeController::class, 'help']);
Route::get('/clarification', [HomeController::class, 'clarification']);
Route::get('/myorders', [HomeController::class, 'orders'])->name('myOrders');
Route::resource('books',BookController::class);
Route::get('/book-spec/{id}', [BookController::class, 'bookIndex'])->name('bookIndex');
Route::resource('books',BookController::class);
Route::resource('orders',OrderController::class);
Route::post('/order/{id}', [OrderController::class, 'newOrder'])->name('newOrder');
Route::resource('category',CategoryController::class);
Route::get('/dashboard', function () {
    return view('pages.homepage');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
