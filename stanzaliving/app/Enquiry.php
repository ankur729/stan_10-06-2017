<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model{
   
	protected $fillable=[ 'name',
		'cat_id',
		'image',
		'email',
		'phone',
		'address',
		'type',
		'enquiry_for',
		'subject',
		'message',
		'enquiry_date',
		'status',

		'parent_name',
		'parent_email',
		'parent_phone',
		'hostel_id',
		'roomsharings_id',
		'addline1',
		'addline2',
		'state_id',
		'pin_code',

		  ];
		
}
