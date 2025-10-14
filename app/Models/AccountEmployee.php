<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountEmployee extends Model
{
    use HasFactory;

    protected $table = 'account_employee';
    public $timestamps = false;

    protected $fillable = [
        'account_id',
        'employee_id'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
