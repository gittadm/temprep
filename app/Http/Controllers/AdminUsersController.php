<?php

namespace App\Http\Controllers;

class AdminUsersController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }
}
