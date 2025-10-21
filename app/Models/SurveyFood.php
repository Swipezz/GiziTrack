<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyFood extends Model
{
    use HasFactory;

    protected $table = 'survey_food';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['school', 'food', 'total'];
}