<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potency extends Model
{
    use HasFactory;
    protected $fillable = [

        'multiselectPTC',
        'multiselectPMU',
        'multiselectPRO',
        'multiselectPMV',
        'multiselectPIO',
        'cqn'
    ];
}
