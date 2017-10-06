<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foodmenudetail extends Model
{
	protected $fillable=[ 'fmenu_id',
		'menuday',
		'cook_id',
		'menudates',
		'items',
		'status',
		'created_at',
		'updated_at'  ];
    //
	

}
