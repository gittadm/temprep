<?php

namespace App\Http\Controllers;

class AdminProfileController extends Controller
{
    public function profile()
    {
        return view('admin.profile');
    }
}
