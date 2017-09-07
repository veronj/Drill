<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Well extends Model
{
    protected $guarded = [];


    public function drill()
    {
        return $this->hasOne('App\Drill');
    }

    public function resource()
    {
        return $this->hasOne('App\Resource');
    }


}
