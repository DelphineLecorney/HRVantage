<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'comment',
        'comment_date',
    ];
}
