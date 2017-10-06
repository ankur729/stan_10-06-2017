<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomSharing extends Model
{

	protected $fillable=['name','sharingcount'];

	protected $table='roomsharings';
    //
}
