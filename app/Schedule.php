<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = [];

    public function officer()
    {
        return $this->hasOne('App\Officer','id','officer_id'); 
    }

    public function employee()
    {
        return $this->hasOne('App\Employee','id','employee_id'); 
    }

    public function companion()
    {
        return $this->hasOne('App\Employee','id','companion_id'); 
    }

    public function transportationgenerate()
    {
        return $this->hasOne('App\TransportationGenerate','id','transportationgenerate_id'); 
    }

    public function transportation()
    {
        return $this->hasOne('App\Transportation','id','transportation_from_id'); 
    }
}
