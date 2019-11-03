<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

class Manufacturer extends Model
{
    protected $guarded = [];

    public function games(){
    	return $this->hasMany('Game');
    }
}