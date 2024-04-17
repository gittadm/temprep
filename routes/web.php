<?php

use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('lessons/add', [LessonController::class, 'add']);
Route::get('lessons/task15', [LessonController::class, 'task15']);

Route::get('lessons/queries', [LessonController::class, 'queries']);
