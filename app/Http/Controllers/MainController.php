<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        echo bcrypt('11111111') . ' <br>';
        echo 'Главная страница<br>';
        echo '<a href="' . route('login') .'">Войти в личный кабинет</a>';
    }
}
