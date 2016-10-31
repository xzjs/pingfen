<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Match extends Model
{
    public $timestamps = false;

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
