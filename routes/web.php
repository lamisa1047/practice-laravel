<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'filestore'])->name('store');
Route::get('/list', [PostController::class, 'showlist'])->name('list');
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('post.delete');