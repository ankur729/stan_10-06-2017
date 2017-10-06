<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informationpage extends Model
{

	protected $fillable=['title','desc','content','metatitle','metadesc','metakeywords','seourl'];

}
