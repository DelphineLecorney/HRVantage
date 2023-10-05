<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    // 'fillable' property: Mass assignable attributes.
    protected $fillable = [
        'name',
        'description',
    ];
}
