<?php

use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Route;

Route::get('lessons/add', [LessonController::class, 'add']);
