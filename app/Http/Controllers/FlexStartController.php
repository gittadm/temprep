<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FlexStartController extends Controller
{
    public function index()
    {
        $counts = [
            'clients' => 1203,
            'projects' => 300,
            'hours' => 1500,
            'workers' => 2200,
        ];

        return view('flexstart.index', compact('counts'));
    }

    public function form(Request $request)
    {
        // dd($request->all());

        Student::create(
            [
                'name' => $request->name,
                'surname' => $request->email,
                'middle_name' => $request->subject,
                'description' => $request->message,
            ]
        );

        return redirect()->route('flexstart.index');

        // 1 способ (устаревший)
//        dd($_POST);
//        Student::create(
//            [
//                'email' => $_POST['email'],
//                'name' => $_POST['name'],
//            ]
//        );
    }
}
