<?php

namespace App\Http\Controllers;

class Lesson3107Controller extends Controller
{

    public function taskUsort()
    {
        // $a = [1, 6, 4];
        $a = [[100, 100], [1, 2, 3], [4, 5], [0, -1], [1, 2, 3, 4, 5]];

//        for ($j = 0; $j < count($a) - 1; $j++) {
//            for ($i = 0; $i < count($a) - $j - 1; $i++) {
//                // если текущий элемент больше следующего
//                if (array_sum($a[$i]) > array_sum($a[$i + 1])) {
//                    // меняем местами элементы
//                    $tmp = $a[$i + 1];
//                    $a[$i + 1] = $a[$i];
//                    $a[$i] = $tmp;
//                }
//            }
//        }

        $a = [1, 6, 4, 3, 3, 4, 5];

        usort($a, function ($a, $b) {
            if ($a % 2 == 0 && $b % 2 != 0) {
                return -1;
            }
            if ($a % 2 != 0 && $b % 2 == 0) {
                return 1;
            }
            return 0;
            //return array_sum($a) - array_sum($b);
        });

        dd($a);

        return 1;
    }
}
