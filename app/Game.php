<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Manufacturer;

class Game extends Model
{
    protected $guarded = [];

    public function manufacturer(){
    	return $this->belongsTo('Manufacturer');
    }
}
