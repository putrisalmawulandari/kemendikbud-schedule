<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalPiket extends Model
{
    protected $guarded = [];

    public function employee()
    {
        return $this->hasOne('App\Employee','id','employee_id'); 
    }
}
