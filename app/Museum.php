<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model {

	   public function locations()
    {
        return $this->hasOne('App\Location','foreign_key', 'museu_id');   
		}
	
}
