<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCount extends Model
{

	protected $fillable=['hostel_id','roomtype','roomcount'];

	protected $table='roomcounts';

    //
}
