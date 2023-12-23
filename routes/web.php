<?php

use App\Http\Controllers\TaskActionController;
use Illuminate\Support\Facades\Route;

Route::get('/', static function() {
	return view('welcome');
});
Route::group(['prefix' => '/tasks'], static function() {
	Route::get('/', [TaskActionController::class, 'index'])->name('task.index');
	Route::post('/create', [TaskActionController::class, 'create'])->name('task.create');
	Route::post('/delete', [TaskActionController::class, 'delete'])->name('task.delete');
});
