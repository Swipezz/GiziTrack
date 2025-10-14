<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'account';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'created_at',
        'office',
        'employee'
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'account_employee', 'account_id', 'employee_id');
    }
}
