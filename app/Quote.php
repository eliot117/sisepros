<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'name_evaluado', 'lastname_evaluado', 'correo_evaluado','date_exam_map',
        'time_exam_map','date_exam_pyxon','time_exam_pyxon','type_exam','eps_exam','status_evaluation'
    ];
}
