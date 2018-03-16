<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    public function Movies() {
    	return $this->hasMany('App\Movie');
    }
}
