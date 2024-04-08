<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Carbon\Carbon;

class LessonController extends Controller
{
    public function add()
    {
        // 1 способ
//        $lesson = new Lesson();
//
//        $lesson->theme = 'Урок 1';
//        $lesson->description = 'Описание урока 1';
//        $lesson->students = 20;
//        $lesson->is_finished = 1;
//
//        $lesson->save();

        // 2 способ

//        $lesson = Lesson::create(
//            [
//                'theme' => 'Урок 5',
//                'description' => 'Описание урока 5',
//                'students' => 20,
//                'is_finished' => 0,
//            ]
//        );

        // несколько записей сразу

        $now = now();

        $result = Lesson::insert(
            [
                [
                    'theme' => 'Урок 5',
                    'description' => 'Описание урока 5',
                    'students' => 20,
                    'is_finished' => 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'theme' => 'Урок 6',
                    'description' => 'Описание урока 6',
                    'students' => 27,
                    'is_finished' => 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'theme' => 'Урок 7',
                    'description' => 'Описание урока 7',
                    'students' => 26,
                    'is_finished' => 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'theme' => 'Урок 8',
                    'description' => 'Описание урока 8',
                    'students' => 28,
                    'is_finished' => 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]
        );

        dump($result);
    }
}
