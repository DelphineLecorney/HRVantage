<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Benefit_Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'benefit_id',
        'enrollment_date',
        'is_enrolled',
    ];
}
