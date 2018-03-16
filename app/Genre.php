<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function Movies() {
    	return $this->belongsToMany('App\Movie');
    }
}
