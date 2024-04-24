<?php

namespace App\Http\Controllers;

use App\Models\Student;

class QueryController extends Controller
{
    public function index()
    {
        $student = Student::find(112); // Student::where('id', 112)->first();

        // 1 способ изменить строку в бд
//        if (empty($student)) {
//            return 'Student not found';
//        }
//
//        $student->year = 2004;
//        $student->description = 'new description 777';
//
//        if ($student->isDirty()) { // отличается ли модель от данных в базе данных
//            echo 'Dirty<br>';
//        }
//
//        $student->save();

        // 2 способ

        // laravel отслеживает updated_at сам
//        $student->update(
//            [
//                'year' => 1995,
//                'description' => 'update description 3', // должно быть в $fillable модели Student
//            ]
//        );

        // несколько записей изменить одним запросом
//        Student::where('year', '>', 2004)->orWhereNull('year')->update(
//            [
//                'year' => 2030,
//                'description' => 'updated year',
//            ]
//        );

        // удалить строку

//        $student = Student::find(112);
//        echo $student->year;
//        $student->delete();

        // удалить несколько записей одним запросом
        // Student::where('year', 2001)->delete();

        $studentsCount = Student::whereBetween('year', [2000, 2020])->count();
        $maxYear = Student::max('year');
        $avgYear = Student::avg('year');

        echo (int) $avgYear;

        return 'success';
    }
}
