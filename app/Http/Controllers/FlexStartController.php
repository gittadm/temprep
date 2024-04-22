<?php

namespace App\Http\Controllers;

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
}
