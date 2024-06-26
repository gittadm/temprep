<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\FlexStartController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\SessionCounterController;
use Illuminate\Support\Facades\Route;

Route::get('lessons/add', [LessonController::class, 'add']);
Route::get('lessons/task15', [LessonController::class, 'task15']);

Route::get('lessons/queries', [LessonController::class, 'queries']);

Route::get('lessons', [LessonController::class, 'lessons'])->name('lessons');

Route::get('lessons/lesson1', [LessonController::class, 'lesson1'])->name('lessons.lesson1');
Route::get('lessons/lesson2', [LessonController::class, 'lesson2'])->name('lessons.lesson2');
Route::get('lessons/lesson3', [LessonController::class, 'lesson3'])->name('lessons.lesson3');

Route::get('flexstart', [FlexStartController::class, 'index'])->name('flexstart.index');

Route::get('queries/new', [QueryController::class, 'index']);

Route::post('flexstart/form', [FlexStartController::class, 'form'])->name('flexstart.form');

Route::get('session/counter', [SessionCounterController::class, 'index']);
Route::get('session/task1', [SessionCounterController::class, 'task1'])->name('session.task1');
Route::post('session/task1', [SessionCounterController::class, 'storeTask1'])->name('session.store.task1');

Route::get('cars', [CarController::class, 'index'])->name('cars.index');
Route::get('cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('cars/create', [CarController::class, 'store'])->name('cars.store');

Route::get('cars/delete/{id}', [CarController::class, 'delete'])->name('cars.delete');

Route::get('cars/edit/{id}', [CarController::class, 'edit'])->name('cars.edit');
Route::post('cars/edit/{id}', [CarController::class, 'update'])->name('cars.update');

Route::get('css', [CssController::class, 'index'])->name('css.index');
