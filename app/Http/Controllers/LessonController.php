<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use Carbon\Carbon;
use Faker\Factory;

class LessonController extends Controller
{
    public function lessons()
    {
        return view('lessons.lessons');
    }

    public function lesson1()
    {
        return view('lessons.lesson1');
    }

    public function lesson2()
    {
        return view('lessons.lesson2');
    }

    public function lesson3()
    {
        return view('lessons.lesson3');
    }

    private function getCourses(): array
    {
        return [
            [
                'name' => 'python',
                'dates' => [
                    [
                        '15.04.2024',
                        '09:20',
                        '10:50',
                    ],
                    [
                        '17.04.2024',
                        '12:20',
                        '15:00',
                    ],
                    [
                        '18.04.2024',
                        '09:00',
                        '10:30',
                    ],
                ],
            ],
            [
                'name' => 'php',
                'dates' => [
                    [
                        '19.04.2024',
                        '09:20',
                        '10:50',
                    ],
                    [
                        '20.04.2024',
                        '12:20',
                        '15:00',
                    ],
                ],
            ],
            [
                'name' => 'cpp',
                'dates' => [
                    [
                        '21.04.2024',
                        '09:20',
                        '10:50',
                    ],
                    [
                        '20.04.2024',
                        '15:01',
                        '16:00',
                    ],
                ],
            ],
        ];
    }

    private function isLessonsIntersect(array $lesson1, array $lesson2): bool
    {
        $lesson1Start = Carbon::createFromFormat('d.m.Y H:i', $lesson1[0] . ' ' . $lesson1[1]);
        $lesson1End = Carbon::createFromFormat('d.m.Y H:i', $lesson1[0] . ' ' . $lesson1[2]);
        $lesson2Start = Carbon::createFromFormat('d.m.Y H:i', $lesson2[0] . ' ' . $lesson2[1]);
        $lesson2End = Carbon::createFromFormat('d.m.Y H:i', $lesson2[0] . ' ' . $lesson2[2]);

        if ($lesson2End->greaterThanOrEqualTo($lesson1Start) &&
            $lesson2End->lessThanOrEqualTo($lesson1End)) {
            return true;
        }

        if ($lesson2Start->greaterThanOrEqualTo($lesson1Start) &&
            $lesson2Start->lessThanOrEqualTo($lesson1End)) {
            return true;
        }

        return false;
    }

    private function isLessonsIntersect2(array $lesson1, array $lesson2): bool
    {
        // $lesson1Start = Carbon::createFromFormat('d.m.Y H:i', $lesson1[0] . ' ' . $lesson1[1]);
        $lesson1Start = Carbon::parse($lesson1[0] . ' ' . $lesson1[1]);
        $lesson1End = Carbon::createFromFormat('d.m.Y H:i', $lesson1[0] . ' ' . $lesson1[2]);
        $lesson2Start = Carbon::createFromFormat('d.m.Y H:i', $lesson2[0] . ' ' . $lesson2[1]);
        $lesson2End = Carbon::createFromFormat('d.m.Y H:i', $lesson2[0] . ' ' . $lesson2[2]);
        $lesson1End->addHours(3);
        $lesson2End->addHours(3);

        if ($lesson2End->greaterThanOrEqualTo($lesson1Start) &&
            $lesson2End->lessThanOrEqualTo($lesson1End)) {
            return true;
        }

        if ($lesson2Start->greaterThanOrEqualTo($lesson1Start) &&
            $lesson2Start->lessThanOrEqualTo($lesson1End)) {
            return true;
        }

        return false;
    }

    private function isNotIntersect(array $course1, array $course2): bool
    {
        $dates1 = $course1['dates'];
        $dates2 = $course2['dates'];

        foreach ($dates1 as $date1) {
            foreach ($dates2 as $date2) {
                if ($this->isLessonsIntersect($date1, $date2)) {
                    return false;
                }
            }
        }

        return true;
    }

    private function isNotIntersect2(array $course1, array $course2): bool
    {
        $dates1 = $course1['dates'];
        $dates2 = $course2['dates'];

        foreach ($dates1 as $date1) {
            foreach ($dates2 as $date2) {
                if ($this->isLessonsIntersect2($date1, $date2)) {
                    return false;
                }
            }
        }

        return true;
    }

    public function task15_1($courses)
    {
        // Петя смотрит каталог онлайн-курсов по программированию.
        // Про каждый курс известны даты и время проведения его уроков.
        // а) Может ли Петя выбрать три курса из каталога так,
        // чтобы уроки не пересекались?

        for ($i = 0; $i < count($courses); $i++) {
            for ($j = $i + 1; $j < count($courses); $j++) {
                for ($k = $j + 1; $k < count($courses); $k++) {
                    if ($this->isNotIntersect($courses[$i], $courses[$j]) &&
                        $this->isNotIntersect($courses[$i], $courses[$k]) &&
                        $this->isNotIntersect($courses[$k], $courses[$j])) {
                        dd('YES');
                    }
                }
            }
        }
    }

    public function task15_2($courses)
    {
        // б) На каждый урок курса Петя хочет выделить 3 часа
        // времени на домашнее задание (кроме собственно самого урока).
        // Сможет ли Петя выбрать три курса так, чтобы успевать
        // делать домашнее задание и чтобы уроки не пересекались?
        for ($i = 0; $i < count($courses); $i++) {
            for ($j = $i + 1; $j < count($courses); $j++) {
                for ($k = $j + 1; $k < count($courses); $k++) {
                    if ($this->isNotIntersect2($courses[$i], $courses[$j]) &&
                        $this->isNotIntersect2($courses[$i], $courses[$k]) &&
                        $this->isNotIntersect2($courses[$k], $courses[$j])) {
                        dd('YES');
                    }
                }
            }
        }
    }

    public function task15()
    {
        $courses = $this->getCourses();

        //$this->task15_1($courses);
        $this->task15_2($courses);

        echo 'No';
    }

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

    public function queries()
    {
//        $student = Student::create(
//            [
//                'name' => 'Дмитрий',
//                'surname' => 'Иванов',
//                'middle_name' => 'Иванович',
//                'year' => 2000,
//                'description' => 'Что-то про Ивана',
//            ]
//        );

//        $faker = Factory::create('ru_RU');
//
//        for ($i = 0; $i < 100; $i++) {
//            Student::create(
//                [
//                    'name' => $faker->firstName,
//                    'surname' => $faker->lastName,
//                    'middle_name' => null,
//                    'year' => $faker->year,
//                    'description' => $faker->text,
//                ]
//            );
//        }

        // Получить всех студентов

        // $students = Student::all();

        // Получить студента, у которого id = 4

        // $student = Student::find(4);

        // Получить всех студентов с годом = 2000

        // $students = Student::where('year', 2000)->get();

        // Получить всех студентов с годом = 2000, отсортированных по фамилии

        $students = Student::where('year', 2000)->orderBy('surname')->get();

        // Получить всех студентов с годом = 2000, отсортированных по фамилии в обратном порядке

        $students = Student::where('year', 2000)->orderBy('surname', 'desc')->get();

        // Получить всех студентов с годом от 2000 до 2005 включительно, отсортированных по фамилии в обратном порядке

        $students = Student::where('year', '>=', 2000)->where('year', '<=', 2005)
            ->orderBy('surname', 'desc')->get();

        // Получить первых 3 студента, которые с годом от 2000 до 2005 включительно,
        // отсортированных по фамилии в обратном порядке

        $students = Student::where('year', '>=', 2000)->where('year', '<=', 2005)
            ->orderBy('surname', 'desc')->take(3)->get();

        // Получить одного первого студента, которые с годом от 2000 до 2005 включительно,
        // отсортированных по фамилии в обратном порядке

        $student = Student::where('year', '>=', 2000)->where('year', '<=', 2005)
            ->orderBy('surname', 'desc')->first();

        // Получить всех студентов с годом не равным 2005, и у которых
        // в фамилии есть фрагмент 'ано'

        $students = Student::where('year', '<>', 2005)
            ->where('surname', 'like', '%ано%')->get();

        // Получить всех студентов с годом 2005 или 2007 или 2020

        $students = Student::whereIn('year', [2005, 2007, 2020])->get();

        // Получить всех студентов с годом 2005 или 2007 или большим 2020

        $students = Student::where('year', 2005)->orWhere('year', 2007)
            ->orWhere('year', '>', 2020)->get();

        // ->whereBetween('year', [2005, 2020])
        // ->whereNotBetween('year', [2005, 2020])

        // Получить студентов, у которых нет отчества

        $students = Student::whereNull('middle_name')->orWhere('middle_name', '')->get();

//        foreach ($students as $student) {
//            if ($student->year > 2000) {
//                dump($student);
//            }
//        }

        //dd($students);

        // Год (был 2005 и цвет красный) или (от 2000 до 2003 и цвет зеленый)

        // ->where()->where()->where() - и
        // ->where()->orWhere->orWhere() - или

        // анонимные функции
        // function () {}

        Student::where(function ($query) {
            $query->where('year', 2005)
                ->where('color', 'red');
        })->orWhere(function ($query) {
            $query->where('year', '>=', 2000)
                ->where('year', '<=', 2003)
                ->where('color', 'green');
        })->get();

        return view('students', compact('students'));

        // return view('students', ['students' => $students]);

        // compact('students', 'lessons')
        // создасть такой массив ['students' => $students, 'lessons' => $lessons]
    }
}
