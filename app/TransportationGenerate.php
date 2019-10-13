<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportationGenerate extends Model
{
    protected $guarded = [];

    public function transportation()
    {
        return $this->hasOne('App\Transportation','id','transportation_id'); 
    }
}
