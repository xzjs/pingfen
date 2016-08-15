<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public $timestamps = false;

    public function mission()
    {
        return $this->belongsTo('App\Mission');
    }

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
