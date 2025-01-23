<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Safety extends Model
{
    use HasFactory;

    protected $fillable = [

        'multiselectSTC',
        'multiselectSMU',
        'multiselectSRO',
        'multiselectSMV',
        'multiselectSIO',
        'cqn'
    ];
}