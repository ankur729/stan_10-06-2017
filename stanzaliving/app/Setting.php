<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

	protected $fillable=['sitename','displayemail','sendemail','reveiveon','phone','metatitle','metadesc','metakeywords','copyright'];
    //
}
