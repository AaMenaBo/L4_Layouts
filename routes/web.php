<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks/api/store', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/api/{task}/update', [TaskController::class, 'update'])->name('tasks.update');
Route::put('/tasks/api/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::delete('/tasks/api/{task}/delete', [TaskController::class, 'delete'])->name('tasks.delete');


Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
