<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
   protected $foreignKey = 'museu_id';
  
  public function museum()
    {
        return $this->belongsTo('Museum','museu_id');
    }
 
}
