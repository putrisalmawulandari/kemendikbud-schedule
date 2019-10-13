<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $guarded = [];

    public function agency()
    {
        return $this->hasOne('App\Agency','id','agency_id'); 
    }
}
