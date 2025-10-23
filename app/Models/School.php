<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $table = 'schools';

    protected $fillable = [
        'id',
        'name',
        'location',
        'total_student',
        'total_meal',
        'type_allergy',
        'logo',
    ];
}
