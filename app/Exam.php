<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public $timestamps = false;

    public function missions()
    {
        return $this->belongsTo('App\Mission');
    }
}
