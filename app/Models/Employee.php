<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;


    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function socialbenefit()
    {
        return $this->belongsTo(Socialbenefit::class);
    }
    // protected $table = 'employees';
    protected $fillable = [
        'position_id',
        'socialbenefit_id',
        'name',
        'firstname',
        'email',
        'phone',
        'address',
        'city',
        'zip_code',
        'country',
    ];
}
