<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory; // для генерации в сидерах

    protected $fillable = [
        'mark',
        'model',
        'color',
        'description',
        'year',
    ];
}
