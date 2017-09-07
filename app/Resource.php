<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $guarded = [];

    public function well()
    {
        return $this->belongsTo('App\Well');
    }


}
