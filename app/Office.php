<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    public function building(){
      return $this->belongsTo('App\Building');
    }
}
