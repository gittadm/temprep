<?php

namespace App\Models;

use App\Traits\Testable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; // для генерации в сидерах
    use Testable;

    public $x = 1234;

    protected $fillable = [
        'name',
        'surname',
        'middle_name',
        'description',
        'year',
    ];
}
