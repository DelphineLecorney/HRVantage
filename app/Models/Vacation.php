<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    protected $fillable = [
        'employee_id',
        'name',
        'start_date',
        'end_date',
        'document',
        'status',
    ];
}
