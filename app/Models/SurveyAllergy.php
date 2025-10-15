<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyAllergy extends Model
{
    use HasFactory;

    protected $table = 'survey_allergy';

    protected $fillable = [
        'school',
        'allergy',
    ];

    // Jika tabel tidak punya created_at & updated_at, tambahkan:
    public $timestamps = false;
}
