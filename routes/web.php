<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    if(auth()->check()){
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login');
    }
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/post/create', [MainController::class, 'createPost'])->name('create.post');
    Route::post('post/create',  [MainController::class, 'storePost'])->name('store.post');
    Route::get('/post/delete/{id}', [MainController::class, 'deletePost'])->name('delete.post');
});

require __DIR__.'/auth.php';
