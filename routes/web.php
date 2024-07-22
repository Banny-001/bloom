<?php

use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\FlowerController;
use App\Http\Controllers\GoogleAuthController;
// use App\Http\Controllers\BouquetController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('bouquet',[App\Http\Controllers\BouquetController::class,'index']);
Route::get('bouquet/create',[App\Http\Controllers\BouquetController::class,'create']);
Route::post('bouquet/create',[App\Http\Controllers\BouquetController::class,'store']);
Route::get('bouquet/{id}/edit',[App\Http\Controllers\BouquetController::class,'edit']);
Route::put('bouquet/{id}/edit',[App\Http\Controllers\BouquetController::class,'update']);
Route::get('bouquet/{id}/delete',[App\Http\Controllers\BouquetController::class,'destroy']);

Route::get('/product', function () {
    return view('product');
})->middleware(['auth', 'verified'])->name('product');

Route::get('/wrap', function () {
    return view('wrap');
})->middleware(['auth', 'verified'])->name('wrap');

Route::get('/accompaniment', function () {
    return view('accompaniment');
})->middleware(['auth', 'verified'])->name('accompaniment');

Route::get('/chat', function () {
    return view('chat');
})->middleware(['auth', 'verified'])->name('chat');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back',[GoogleAuthController::class,'callbackGoogle']);

//index


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
