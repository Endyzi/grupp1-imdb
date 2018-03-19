<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function Actors() {
    	return $this->hasMany('App\Actor');
    }
    public function Genres() {
    	return $this->belongsToMany('App\Genre');
    }
    public function Ratings() {
    	return $this->hasMany('App\Rating');
    }
    public function Director() {
    	return $this->belongsTo('App\Director');
    }
}
