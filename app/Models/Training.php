<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    protected $fillable = [
        'employee_id',
        'name',
        'institution',
        'start_date',
        'end_date',
        'document',
        'status',
        'type',
        'description',
    ];
}
