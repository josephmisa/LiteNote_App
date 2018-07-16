<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    public $table = 'buildings';

    public function offices(){
      return $this->hasMany('App\Office');
    }
}
