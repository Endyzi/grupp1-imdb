<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function Ratings() {
    	return $this->hasMany('App\Rating');
    }
}
