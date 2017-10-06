<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Facility;
class Category extends Model
{

	protected $fillable=['name'];
    //

    public function getFacility(){

    	return $this->hasMany('App\Facility','categories_id');
    }
}
