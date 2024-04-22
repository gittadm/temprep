<?php

use App\Http\Controllers\FlexStartController;
use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('lessons/add', [LessonController::class, 'add']);
Route::get('lessons/task15', [LessonController::class, 'task15']);

Route::get('lessons/queries', [LessonController::class, 'queries']);

Route::get('lessons', [LessonController::class, 'lessons'])->name('lessons');

Route::get('lessons/lesson1', [LessonController::class, 'lesson1'])->name('lessons.lesson1');
Route::get('lessons/lesson2', [LessonController::class, 'lesson2'])->name('lessons.lesson2');
Route::get('lessons/lesson3', [LessonController::class, 'lesson3'])->name('lessons.lesson3');

Route::get('flexstart', [FlexStartController::class, 'index']);
