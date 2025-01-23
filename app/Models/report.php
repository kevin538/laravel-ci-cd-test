<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;
    protected $fillable = [
        'cfm',
        'cqn',
        'name',
        'address',
        'vacinetype',
        'prn',
        'dsr',
        'nof',
        'bn',
        'dom',
        'ed',
        'dv',
        'deleted',
        'note',
        /* 
        'multiselectTC',
        'multiselectMU',
        'multiselectRO',
        'multiselectMV',
        'multiselectIO',
        'multiselectSTC',
        'multiselectSMU',
        'multiselectSRO',
        'multiselectSMV',
        'multiselectSIO',
        'multiselectPTC',
        'multiselectPMU',
        'multiselectPRO',
        'multiselectPMV',
        'multiselectPIO',
        'multiselectITC',
        'multiselectIMU',
        'multiselectIRO',
        'multiselectIMV',
        'multiselectIIO',
        'multiselectSTTC',
        'multiselectSTMU',
        'multiselectSTRO',
        'multiselectSTMV',
        'multiselectSTIO', */

    ];
}