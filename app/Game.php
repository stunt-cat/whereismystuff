<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = [];

    public function manufacturer(){
    	return $this->belongsTo('App\Manufacturer');
    }
}