<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{

		protected $fillable=[  
        'p_contact',
        'p_firstname',
        'p_lastname',
        'p_email',
        'p_gender',
        'p_dob',
        //'s_parentname',
        'p_username',
        'p_password',
        'p_address',
        'p_city',
        'p_pincode',
        'p_state',
        'p_nationality',
        'p_unique_id_type',
        'p_unique_id_no',
      	'p_no_sons',
        'p_no_daughters',
        'p_bankname',
        'p_branchname',
        'p_account_no',
        'p_ifsc'
            ];

	protected $table='guardians';
    //
}
