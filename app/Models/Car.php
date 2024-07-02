<?php

namespace App\Models;

use App\Traits\Testable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory; // для генерации в сидерах
    use Testable, SoftDeletes;

    protected $fillable = [
        'mark',
        'model',
        'color',
        'description',
        'year',
    ];

    public function test2()
    {
        $this->test();
    }
}
