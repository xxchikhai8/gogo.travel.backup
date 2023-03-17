<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filghts extends Model
{
    use HasFactory;
    protected $fillable = [
        'planeID',
        'flightID',
        'departure',
        'destination',
        'departDay',
        'returnDay',
        'priceTicket',
        'state',
    ];

    public $timestamps = false;
}
