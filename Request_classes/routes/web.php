<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', function () {
    return view('product.create');
});

Route::get('/product',[ProduitController::class,'index'])->name('product.index');
Route::get('/product:{id}',[ProduitController::class,'show'])->name('product.show');
Route::get('/product/create',[ProduitController::class,'create'])->name('product.create');
Route::post('/product',[ProduitController::class,'store'])->name('product.store');
Route::get('/product/{id}/edit',[ProduitController::class,'edit'])->name('product.edit');
Route::put('/product/{id}',[ProduitController::class,'update'])->name('product.update');
Route::delete('/product/{id}',[ProduitController::class,'destroy'])->name('product.destroy');


