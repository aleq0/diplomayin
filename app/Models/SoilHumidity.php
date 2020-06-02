<?php

namespace App\Models;

class SoilHumidity extends BaseModel
{
    protected $table = 'soil_humidity';

    public $timestamps = false;

    protected $fillable = ['value', 'date', 'time'];
}
