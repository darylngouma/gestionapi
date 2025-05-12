<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TaskPageController::class, 'index'])->name('tasks.view');
Route::get('/create', [TaskPageController::class, 'create'])->name('tasks.create');
Route::post('/store', [TaskPageController::class, 'store'])->name('tasks.store');
Route::get('/edit/{task}', [TaskPageController::class, 'edit'])->name('tasks.edit');
Route::post('/update/{task}', [TaskPageController::class, 'update'])->name('tasks.update');
Route::delete('/delete/{task}', [TaskPageController::class, 'destroy'])->name('tasks.delete');
