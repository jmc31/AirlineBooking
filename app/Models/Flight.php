<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'flights';


    protected $fillable = [
        'departure',
        'destination',
        'departure_date',
        'return_date',
        'class',
        'available_seats',
    ];
}
