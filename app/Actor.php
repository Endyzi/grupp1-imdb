<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function Movies() {
    	return $this->belongsToMany('App\Movie');
    }
}
