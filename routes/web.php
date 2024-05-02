<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/dogs/create',[DogController::class,'create'])->name('dogs.create');
Route::post('/dogs/store',[DogController::class,'store'])->name('dogs.store');
Route::get('/dogs/index',[DogController::class,'index'])->name('dogs.index');
Route::get('dogs/{dog}show',[DogController::class,'show'])->name('dogs.show');
Route::get('dogs/{dog}edit',[DogController::class,'edit'])->name('dogs.edit');
Route::put('dogs/{dog}/update',[DogController::class,'update'])->name('dogs.update');
Route::delete('dogs/{dog}/destroy',[DogController::class,'destroy'])->name('dogs.destroy');
Route::get('dogs/category/{category}',[CategoryController::class,'dogs'])->name('category.dogs');



