<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    protected $guarded = [];


    public function well()
    {
        return $this->belongsTo('App\Well');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
