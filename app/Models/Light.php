<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Light extends BaseModel
{
    protected $table = 'light';

    public $timestamps = false;

    protected $fillable = ['value', 'date', 'time'];
}
