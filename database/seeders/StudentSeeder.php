<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(10)->create();

//        $students = [
//            [
//                'description' => '123',
//                'name' => 'ivan',
//                'surname' => 'petrov',
//            ],
//            [
//                'description' => '12345',
//                'name' => 'ivan2',
//                'surname' => 'petrov2',
//            ],
//        ];
//
//        Student::insert($students);

//        for ($i = 0; $i < 2000; $i++) {
//            Student::create(
//                [
//                    'description' => '12345',
//                    'name' => 'ivan2',
//                    'surname' => 'petrov2',
//                ]
//            );
//        }
    }
}
