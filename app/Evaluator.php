<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluator extends Model
{
    protected $fillable = [
        'name_evaluators', 'lastname_evaluators', 'address','extension',
    ];

}
