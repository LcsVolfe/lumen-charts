<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperatura extends Model
{
    protected $fillable = [
        'id',
        'date_hour',
        'temperature'
    ];

}
