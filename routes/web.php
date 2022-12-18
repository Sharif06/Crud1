<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', [StudentController::class, 'index'])->name('index');
Route::POST('/', [StudentController::class, 'store'])->name('store');

Route::get('/show',[StudentController::class,'show'])->name('show');

Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[StudentController::class,'update'])->name('update');
Route::get('/delete/{id}',[StudentController::class,'destroy'])->name('destroy');


Route::get('/about',function(){
    return view('about');
})->name('about');
