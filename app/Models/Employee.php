<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employee';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'location',
        'total_student',
        'total_meal',
        'total_allergy',
        'type_allergy',
        'logo'
    ];

    public function accounts()
    {
        return $this->belongsToMany(Account::class, 'account_employee', 'employee_id', 'account_id');
    }
}
