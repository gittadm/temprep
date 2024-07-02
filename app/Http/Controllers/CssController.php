<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Student;

class CssController extends Controller
{
    // n! = 1*2*3*...*n
    // n! = n * (n-1)!

    private function fact(int $n)
    {
        if ($n === 1) {
            return 1;
        }

        return $n * $this->fact($n - 1);
    }
    private function findSum(array $a)
    {
        // $a = [1, 2, [3, 4, [ ], 9, 10];
        $sum = 0;
        foreach ($a as $x) {
            if (is_array($x)) {
                $sum += $this->findSum($x);
            } else {
                $sum += $x;
            }
        }

        return $sum;
    }

    public function lesson0207()
    {
        // trait

//        $student = new Student();
//        $student->test();

        // soft-delete
        // мягкое удаление

        $car = Car::withTrashed()->find(2);
        if ($car) {
            // $car->restore(); // восстановить (отменить мягкое удаление)

            $car->forceDelete();
        }

        if ($car->trashed()) {
            echo 'soft deleted';
        }

        if (is_null($car->deleted_at)) {
            echo 'soft deleted';
        }

        $cars = Car::withTrashed()->where('id', '<', 5)->get();
        $cars = Car::onlyTrashed()->where('id', '<', 4)->get();
        $cars = Car::whereNotNull('deleted_at')->where('id', '<', 4)->get();

        Car::whereNull('deleted_at')->get();

        dd($cars);

        //$a = [1, 2, [3, 4, [5, 6, [7, 8]]], 9, 10];
        //$sum = $this->findSum($a);

        // dd($this->fact(5));

        /*
         * Дан массив, элементами которого являются или числа,
         * или массив. Например,
         * $a=[1, [2, 3], 4, [5, 6, [1, [4, [6, 7]]]]], 8];
         * а) Найти сумму всех чисел, которые содержатся
         * в этом массиве
         * б) Дано число. Определить,
         * содержится ли это число в массиве
         * в) Получить новый массив из чисел данного
         * массива, избавившись от вложенных массивов.
         *  То есть $b = [1, 2, 3, 4, 5, 6, 7, 8];
         */
    }

    public function index()
    {
        return view('css.index');
    }
}
