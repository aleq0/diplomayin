<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model
{
    public function scopeDate($query, $date)
    {
        return $query->where('date', $date);
    }

    public function scopeToday($query)
    {
        return $this->scopeDate($query, Carbon::today()->toDate());
    }


    public function scopeMinAndMax($query)
    {
        return $query->select(DB::raw("MIN(value) AS min"), DB::raw("MAX(value) AS max"));
    }

    public function getTimeAttribute($val)
    {
        return Carbon::createFromFormat('G:i:s', $val)->format('G:i');
    }
}
