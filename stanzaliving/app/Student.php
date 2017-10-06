<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $fillable=[  's_doj',
        's_contact',
        's_firstname',
        's_lastname',
        's_email',
        's_gender',
        's_dob',
        's_parentname',
        's_username',
        's_password',
		's_image',
		's_idproof',
        's_address',
		's_street',
		's_landmark',
        's_city',
        's_pincode',
        's_state',
		's_country',
        's_nationality',
		's_regno',
        's_unique_id_type',
        's_unique_id_no',
		's_bloodgroup',
		's_medicalhistory',
        's_veg',
        's_marital_status',
        's_room',
        's_hostel',
        's_college',
        's_course',
        's_year',
		's_joindate',
        's_morning',
        's_afternoon',
        's_evening',
        's_night'    ];
    //
}
