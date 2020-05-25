<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
//use App\Traits\Scopes;

class Temperature extends BaseModel
{
    protected $table = 'temperatures';

    public $timestamps = false;

    protected $fillable = ['value', 'date', 'time'];

}
