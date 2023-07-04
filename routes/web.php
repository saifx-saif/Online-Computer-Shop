<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinalController;
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
    return view('login');
});
Route::get('/login', [FinalController::class,'login'])->name('login');
Route::get('/cart', [FinalController::class,'cart'])->name('cart');
Route::post('/register', [FinalController::class,'register'])->name('register');
Route::post('/userLogin', [FinalController::class,'userLogin'])->name('userLogin');
Route::get('/product', [FinalController::class,'product'])->name('product');
Route::get('/home', [FinalController::class,'home'])->name('home');
Route::get('/contact', [FinalController::class,'contact'])->name('contact');
Route::get('/admin', [FinalController::class,'admin'])->name('admin');
Route::post('/uploadProduct', [FinalController::class,'uploadProduct'])->name('uploadProduct');
Route::get('/adminProduct', [FinalController::class,'adminProduct'])->name('adminProduct');
Route::get('/deleteproduct/{id}', [FinalController::class,'deleteproduct'])->name('deleteproduct');
Route::get('/updateproduct/{id}', [FinalController::class,'updateproduct'])->name('updateproduct');
Route::get('/addcart/{id}', [FinalController::class,'addcart'])->name('addcart');
Route::post('/updatesProduct/{id}', [FinalController::class,'updatesProduct'])->name('updatesProduct');
Route::get('/purchase/{id}', [FinalController::class,'purchase'])->name('purchase');
Route::get('/cancel/{id}', [FinalController::class,'cancel'])->name('cancel');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
