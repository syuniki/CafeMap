<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;


Route::get('/shops',[ShopController::class,'index'])->name('shop.list');
Route::get('/shop/new',[ShopController::class,'create'])->name('shop.new');
Route::post('/shop',[ShopController::class,'store'])->name('shop.store');
Route::get('/shop/edit/{id}',[ShopController::class, 'edit'])->name('shop.edit');
Route::post('shop/update/{id}',[ShopController::class, 'update'])->name('shop.update');
Route::get('/shop/{id}',[ShopController::class,'show'])->name('shop.detail');

Route::delete('/shop/{id}',[ShopController::class,'destroy'])->name('shop.destroy');


Route::get('/', function () {
    return redirect('/shops');
});
