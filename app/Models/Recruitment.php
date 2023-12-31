<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    use HasFactory;

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    protected $fillable = [
        'position_id',
        'name',
        'firstname',
        'email',
        'phone',
        'address',
        'city',
        'zip_code',
        'country',
        'document',
        'status',
    ];
}
