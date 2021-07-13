<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('user');
Route::get('/admin', [App\Http\Controllers\PostController::class, 'index'])->name('admin');
Route::get('/admin', [App\Http\Controllers\PostController::class, 'index'])->name('admin');

Route::post('/admin/addPost', [App\Http\Controllers\PostController::class, 'store']);

Route::get('/admin/{id}/edit', [App\Http\Controllers\PostController::class, 'edit']);

 Route::put('/admin/{id}', [App\Http\Controllers\PostController::class, 'update']);

Route::delete('/admin/{id}', [App\Http\Controllers\PostController::class, 'destroy']);



Route::get('/user/details', function() {
    return view('page.details');
})->name('details');