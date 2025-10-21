<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyAllergy extends Model
{
    use HasFactory;

    protected $table = 'survey_allergy';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['school', 'allergy'];
}
