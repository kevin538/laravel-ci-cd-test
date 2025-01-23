<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stability extends Model
{
    use HasFactory;

    protected $fillable = [

        'multiselectSTTC',
        'multiselectSTMU',
        'multiselectSTRO',
        'multiselectSTMV',
        'multiselectSTIO',
        'cqn'
    ];
}