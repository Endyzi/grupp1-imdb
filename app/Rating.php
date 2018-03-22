<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function Movies() {
    	return $this->belongsTo('App\movie');
    }
}
