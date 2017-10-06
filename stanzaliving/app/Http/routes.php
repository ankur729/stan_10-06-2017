<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('pages.front.index');
});


Route::get('/admin/', function () {
    return view('pages.admin.login.login');
});


Route::post('/studentlogin', 'Front\LoginController@authorizelogin');

/* Route::group(['middleware' => ['web']], function () {
 Route::post('/studentlogin', ['as'=>'studentlogin','uses'=>'StudentAuth\AuthController@studentLoginPost']);
}); */


Route::get('/experience', function () {
	
	$meta_title = "Stanza Living : Experience";	
    return view('pages.front.experience',compact('meta_title'));
});


Route::get('/residence', function () {	
    return view('pages.front.residence');
});

Route::get('/gallery', function () {	
    return view('pages.front.gallery');
});

Route::get('/blog', function () {	
      return redirect('../blog');
});

Route::get('/contact', function () {	
    return view('pages.front.contact');
});

Route::post('/contact/contactform', 'Front\EnquiryController@contactenquiry');


Route::get('/pre-register','Front\EnquiryController@bookingReqFormView');
Route::post('/pre-register/save','Front\EnquiryController@bookingReqFormSave');

Route::get('/profile/{id?}', 'Front\ProfileController@index');
Route::get('/student-complaint/{id?}', 'Front\ComplaintController@index');
Route::post('/student-complaint/addcomplaint', 'Front\ComplaintController@store');
Route::get('/findcomplaintsubcat', 'Front\ComplaintController@findcomplaintsubcat');

Route::get('/food-menu/{id?}', 'Front\FoodmenuController@index');



Route::get('/invoice/{id?}', 'Front\ProfileController@invoice');
Route::get('/student-profile/{id?}', 'Front\ProfileController@studentprofile');
Route::get('/vox-populi/{id?}', 'Front\ProfileController@voxpopuli');
Route::get('/late-night-out/{id?}', 'Front\ProfileController@latenightout');
Route::get('/stanza-social/{id?}', 'Front\ProfileController@stanzasocial');
Route::get('/stanza-board/{id?}', 'Front\ProfileController@stanzaboard');
Route::get('/download/{id?}', 'Front\ProfileController@download');
Route::get('/student-profile-update/{id?}', 'Front\ProfileController@studentprofileupdate');
Route::post('/student-profile-update/updateinfo', 'Front\ProfileController@updateprofile');
Route::get('/studentfindstates', 'Front\ProfileController@findstates');
Route::get('/studentfindcities', 'Front\ProfileController@findcities');





Route::get('/ajaxlogin/{email?}/{password?}', 'Front\LoginController@ajaxlogin');
Route::post('/login-form','Front\LoginController@myformPost');
Route::get('/studentlogout','Front\LoginController@logout');





/* Ankur */


/* End Ankur */





/* Route::get('/', function () {
    return view('pages.admin.login.login');
}); */


Route::get('/test1/{name?}','TestController@testMethod');



// MANAGE SUPER ADMIN ROUTES


Route::get('/admin_login', function () {
    return view('pages.admin.login.login');
});

Route::get('/test/check', function () {
    return view('pages.super-admin.login.login');
});


Route::post('/admin_login_validate', 'AdminLoginController@login_check');
Route::get('/admin_logout','AdminLoginController@logout');




// ADMIN INNER PAGES ROUTES

Route::group(['middleware' => 'auth'], function () {
  

	Route::get('admin/dashboard', 'AdminLoginController@show_admin_auth_view');
	Route::get('admin/manage-student', function () {

    return view('pages.admin.manage-students.manage_students');

	});

	Route::get('admin/access/create', 'AccessController@create');
    Route::get('admin/access/list','AccessController@view_list');
    Route::get('admin/access/edit/{id}', 'AccessController@edit');
    Route::put('admin/access/update/{id}', 'AccessController@update');
    Route::post('/access/save','AccessController@save');

    Route::post('admin/user/create', 'AdminUserController@store');
    Route::get('admin/user/create', 'AdminUserController@create');
    Route::get('admin/user/list', 'AdminUserController@show');
    Route::get('admin/user/edit/{id}', 'AdminUserController@edit');
    Route::put('admin/user/update', 'AdminUserController@update');  

    Route::get('admin/profile/edit', 'AdminProfileController@edit');
    Route::put('admin/profile/update', 'AdminProfileController@update');

    Route::get('admin/setting/general','WebSettingController@general');
    Route::put('admin/setting/general/update','WebSettingController@generalSettingUpdate');
    Route::get('admin/setting/social','WebSettingController@social');
    Route::put('admin/setting/social/update','WebSettingController@socialSettingUpdate');


    Route::get('admin/information/list', 'InformationController@index');
    Route::get('admin/information/add', 'InformationController@create');
    Route::post('admin/information/save', 'InformationController@store');
    Route::get('admin/information/edit', 'InformationController@edit');
    Route::put('admin/information/udpate', 'InformationController@update');
    Route::get('admin/information/delete', 'InformationController@destroy');

    Route::get('admin/experience/category/list', 'ExpController@index');
    Route::get('admin/experience/category/add', 'ExpController@create');
    Route::post('admin/experience/category/save', 'ExpController@store');
    Route::get('admin/experience/category/edit', 'ExpController@edit');
    Route::put('admin/experience/category/update', 'ExpController@update');
    Route::get('admin/experience/category/delete', 'ExpController@destroy');

    Route::get('admin/experience/image/list', 'ExpImageController@index');
    Route::get('admin/experience/image/add', 'ExpImageController@create');
    Route::post('admin/experience/image/save', 'ExpImageController@store');
    Route::get('admin/experience/image/edit', 'ExpImageController@edit');
    Route::put('admin/experience/image/update', 'ExpImageController@update');
    Route::get('admin/experience/image/delete', 'ExpImageController@destroy');

    Route::get('admin/gallery/images/create','GalleryController@create');
    Route::post('admin/gallery/images/upload','GalleryController@upload');
    Route::get('admin/gallery/images/edit','GalleryController@edit');
    Route::post('admin/gallery/images/update','GalleryController@update');
    Route::get('admin/gallery/images/delete/{id}','GalleryController@destroy');

    Route::get('admin/category/add','CategoryController@create');
    Route::get('admin/category/list', 'CategoryController@index');
    Route::post('admin/category/save', 'CategoryController@store');
    Route::get('admin/category/edit', 'CategoryController@edit');
    Route::put('admin/category/update', 'CategoryController@update');
    Route::get('admin/category/delete', 'CategoryController@destroy');


    Route::get('admin/facility/add','FacilityController@create');
    Route::get('admin/facility/list', 'FacilityController@index');
    Route::post('admin/facility/save', 'FacilityController@store');
    Route::get('admin/facility/edit', 'FacilityController@edit');
    Route::put('admin/facility/update', 'FacilityController@update');
    Route::get('admin/facility/delete', 'FacilityController@destroy');

    Route::get('admin/room/add','RoomSharingController@create');
    Route::get('admin/room/list', 'RoomSharingController@index');
    Route::post('admin/room/save', 'RoomSharingController@store');
    Route::get('admin/room/edit', 'RoomSharingController@edit');
    Route::put('admin/room/update', 'RoomSharingController@update');
    Route::get('admin/room/delete', 'RoomSharingController@destroy');

    Route::get('admin/hostel/add','HostelController@create');
    Route::get('admin/hostel/list', 'HostelController@index');
    Route::post('admin/hostel/save', 'HostelController@store');
    Route::put('admin/hostel/update', 'HostelController@update');
    Route::get('admin/hostel/edit', 'HostelController@edit');
    Route::get('admin/hostel/delete', 'HostelController@destroy');
    Route::get('admin/hostel/show', 'HostelController@show');
    Route::get('admin/hostel/findstates', 'HostelController@findstates');
    Route::get('admin/hostel/findcities', 'HostelController@findcities');


    Route::get('admin/student/add','StudentController@create');
    Route::get('admin/student/list', 'StudentController@index');
    Route::post('admin/student/save', 'StudentController@store');
    Route::put('admin/student/update', 'StudentController@update');  
    Route::get('admin/student/edit', 'StudentController@edit'); 
    Route::get('admin/student/delete', 'StudentController@destroy');
    Route::get('admin/student/view', 'StudentController@show'); 
    Route::get('admin/student/findstates', 'StudentController@findstates');
    Route::get('admin/student/findcities', 'StudentController@findcities'); 
    // Route::get('admin/experience/image/add', 'ExpImageController@create');
    // Route::post('admin/experience/image/save', 'ExpImageController@store');
    // Route::get('admin/experience/image/edit', 'ExpImageController@edit');
    // Route::put('admin/experience/image/update', 'ExpImageController@update');
    // Route::get('admin/experience/image/delete', 'ExpImageController@destroy');


    Route::get('admin/guardian/list', 'GuardianController@index'); 
    Route::get('admin/guardian/add', 'GuardianController@create'); 
    Route::get('admin/guardian/add','GuardianController@create');
    Route::get('admin/guardian/list', 'GuardianController@index');
    Route::post('admin/guardian/save', 'GuardianController@store');
    Route::put('admin/guardian/update', 'GuardianController@update');  
    Route::get('admin/guardian/edit', 'GuardianController@edit'); 
    Route::get('admin/guardian/delete', 'GuardianController@destroy');
    Route::get('admin/guardian/view', 'GuardianController@show'); 
    Route::get('admin/guardian/findstates', 'GuardianController@findstates');
    Route::get('admin/guardian/findcities', 'GuardianController@findcities'); 


    Route::get('admin/complaint/list', 'ComplaintController@index'); 
    Route::get('admin/complaint/view', 'ComplaintController@show'); 
    Route::put('admin/complaint/update', 'ComplaintController@update');
   

    Route::get('admin/complaint_category/list', 'ComplaintCatController@index');
    Route::get('admin/complaint_category/add', 'ComplaintCatController@create');
    Route::post('admin/complaint_category/save', 'ComplaintCatController@store');
    Route::put('admin/complaint_category/update', 'ComplaintCatController@update');
    Route::get('admin/complaint_category/edit', 'ComplaintCatController@edit');
    Route::get('admin/complaint_category/delete', 'ComplaintCatController@destroy');

    Route::get('admin/complaint_subcategory/list', 'ComplaintSubCatController@index');
    Route::get('admin/complaint_subcategory/add', 'ComplaintSubCatController@create');
    Route::post('admin/complaint_subcategory/save', 'ComplaintSubCatController@store');
    Route::get('admin/complaint_subcategory/edit', 'ComplaintSubCatController@edit');
    Route::put('admin/complaint_subcategory/update', 'ComplaintSubCatController@update');
    Route::get('admin/complaint_subcategory/delete', 'ComplaintSubCatController@destroy');


    Route::get('admin/communicate/list', 'CommunicateController@index');
    Route::get('admin/communicate/view', 'CommunicateController@show'); 
    Route::put('admin/communicate/update', 'CommunicateController@update');
    Route::get('admin/communicate/delete', 'CommunicateController@destroy');
   

    Route::get('admin/communicate_category/list', 'CommunicateCatController@index');
    Route::get('admin/communicate_category/add', 'CommunicateCatController@create');
    Route::post('admin/communicate_category/save', 'CommunicateCatController@store');
    Route::put('admin/communicate_category/update', 'CommunicateCatController@update');
    Route::get('admin/communicate_category/edit', 'CommunicateCatController@edit');
    Route::get('admin/communicate_category/delete', 'CommunicateCatController@destroy');


    Route::get('admin/communicate_subcategory/list', 'CommunicateSubCatController@index');
    Route::get('admin/communicate_subcategory/add', 'CommunicateSubCatController@create');
    Route::post('admin/communicate_subcategory/save', 'CommunicateSubCatController@store');
    Route::get('admin/communicate_subcategory/edit', 'CommunicateSubCatController@edit');
    Route::put('admin/communicate_subcategory/update', 'CommunicateSubCatController@update');
    Route::get('admin/communicate_subcategory/delete', 'CommunicateSubCatController@destroy');

     Route::get('admin/event/list', 'EventController@index');
    Route::get('admin/event/add', 'EventController@create');
    Route::get('admin/event/show', 'EventController@show');
    Route::post('admin/event/save', 'EventController@store');
    Route::get('admin/event/edit', 'EventController@edit');
    Route::put('admin/event/update', 'EventController@update');
    Route::get('admin/event/delete', 'EventController@destroy');

    Route::get('admin/request_type/list', 'RequestTypeController@index');
    Route::get('admin/request_type/add', 'RequestTypeController@create');
    Route::post('admin/request_type/save', 'RequestTypeController@store');
    Route::put('admin/request_type/update', 'RequestTypeController@update');
    Route::get('admin/request_type/edit', 'RequestTypeController@edit');
    Route::get('admin/request_type/delete', 'RequestTypeController@destroy');


    Route::get('admin/request/list', 'RRequestController@index');
    Route::get('admin/request/edit', 'RRequestController@edit'); 
    Route::put('admin/request/update', 'RRequestController@update');
    Route::get('admin/request/delete', 'RRequestController@destroy');


    Route::get('admin/taxes/list', 'TaxController@index');
    Route::get('admin/taxes/add', 'TaxController@create');
    Route::post('admin/taxes/save', 'TaxController@store');
    Route::get('admin/taxes/edit', 'TaxController@edit'); 
    Route::put('admin/taxes/update', 'TaxController@update');
    Route::get('admin/taxes/delete', 'TaxController@destroy'); 


    Route::get('admin/payment/list', 'PaymentController@index');
    Route::get('admin/payment/add', 'PaymentController@create');
    Route::post('admin/payment/save', 'PaymentController@store');
    Route::get('admin/payment/edit', 'PaymentController@edit'); 
    Route::put('admin/payment/update', 'PaymentController@update');
    Route::get('admin/payment/delete', 'PaymentController@destroy');  
    Route::get('admin/payment/studname', 'PaymentController@studname'); 
    Route::get('admin/payment/view', 'PaymentController@show');  


    Route::get('admin/f_cat/list', 'FoodCatController@index');
    Route::get('admin/f_cat/add', 'FoodCatController@create');
    Route::post('admin/f_cat/save', 'FoodCatController@store');
    Route::put('admin/f_cat/update', 'FoodCatController@update');
    Route::get('admin/f_cat/edit', 'FoodCatController@edit');
    Route::get('admin/f_cat/delete', 'FoodCatController@destroy');

    
	Route::get('admin/foodmenu', 'FoodMenuController@index');
    Route::get('admin/foodmenu/menulist', 'FoodMenuController@index');
    Route::get('admin/foodmenu/menuadd', 'FoodMenuController@create');
    Route::post('admin/foodmenu/menusave', 'FoodMenuController@store');
    Route::get('admin/foodmenu/menuedit', 'FoodMenuController@edit'); 
    Route::put('admin/foodmenu/menuupdate', 'FoodMenuController@update');
    Route::get('admin/foodmenu/menudelete', 'FoodMenuController@destroy');
	Route::get('admin/foodmenu/findfooditems', 'FoodMenuController@findfooditems');
    Route::get('admin/foodmenu/findfooditemrec', 'FoodMenuController@findfooditemrec');
    Route::get('admin/foodmenu/findfooditemsdisplay', 'FoodMenuController@findfooditemsdisplay');
   
   
	Route::get('admin/menu/list', 'FoodController@index');
    Route::get('admin/menu/add', 'FoodController@create');
    Route::post('admin/menu/save', 'FoodController@store');
    Route::get('admin/menu/edit', 'FoodController@edit'); 
    Route::put('admin/menu/update', 'FoodController@update');
    Route::get('admin/menu/delete', 'FoodController@destroy'); 


    Route::get('admin/feedback/list', 'FeedbackController@index'); 

 });


// GETTING USER ROLES-----

// Route::get('test',function(){

// 	$user =App\User::find(1);

// 	//$t=$user->roles();

// 	//echo $user->roles;
// 	foreach ($user->roles as $role) {
    	
//     	echo $role->access_name;
//     	echo "<br>";
// 	}
// 	//print_r($t);
// 	//$role=App\Role::findOrFail($user->id);
// 	//return $t;
// });




// MANAGE SUPER ADMIN ROUTES

Route::auth();

Route::get('/home', 'HomeController@index');

