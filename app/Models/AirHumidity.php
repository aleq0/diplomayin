<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AirHumidity extends BaseModel
{
    protected $table = 'air_humidity';

    public $timestamps = false;

    protected $fillable = ['value', 'date', 'time'];
}
