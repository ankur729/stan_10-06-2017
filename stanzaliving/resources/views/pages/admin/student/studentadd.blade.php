
@extends('layouts.master.admin.index')

@section('styles')

@endsection

@section('content')

    <!-- Content Header (Page header) -->
 
    <section class="content-header">
      <h1>
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            @if (count($errors) > 0)
    <div class="alert alert-danger" id="errorMessage">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            
              <div class="flash-message">
 @if(Session::has('message'))
    <div class="alert-box success" id="successMessage">
      <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
    </div>
@endif
@if(Session::has('duplicate'))
    <div class="alert-box danger" id="successMessage">
      <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('duplicate') }}</p>
    </div>
@endif
  </div>
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Student   </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::open(['url' => 'admin/student/save','method' => 'post','files'=>true]) !!}

<!-- Login-Field -->



<div class="box-body">
<div class="col-md-10  col-xs-10">
  <div class="form-group">
   <img id="img_view" src="  {{ URL::to('images/blank_user.png')  }}" alt="your image" style="width:100px;height:100px"><br>
     <label for="s_image">Add Student Image </label>
    <input id="imgInp" name="s_image" type="file">
  <div class="form_error"></div>
 </div>
</div>
<div class="col-md-2">
  <div class="form-group" style="margin-top: 20px;">
    <button type="submit" class="btn btn-back " style="margin-top: 70px;float: right;">Back</button>
  </div>
</div>
</div>


<div class="Login-header with-border   after-border">
   <h3 class="login-details">Login Details</h3>
</div>





 <div class="box-body">
   <div class="col-xs-4 ">
    <div class="form-group">
       {!!Form::label('s_username', 'Username') !!}
  

    {!!     Form::text('s_username', null,  ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) !!}

      <div class="form_error"></div>
       </div>
      </div>
    </div>

     <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_password', 'Password') !!}
  

    {!!     Form::text('s_password', null,  ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
    </div>
	
	 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_cpassword', 'Confirm Password') !!}
  

    {!!     Form::text('s_cpassword', null,  ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
    </div>



<!-- Login fields ends -->




<!-- Personal-Field -->

<div class="Login-header with-border  Personal-border">
   <h3 class="login-details">Personal Details</h3>
 </div>

<div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('firstname', 'First Name') !!}
  

    {!!     Form::text('s_firstname', null,  ['class' => 'form-control fname', 'placeholder' => 'First Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

    <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('lastname', 'Last Name') !!}
  

    {!!     Form::text('s_lastname', null,  ['class' => 'form-control lname', 'placeholder' => 'Last Name']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_dob', 'Date of Birth') !!}
  

    {!!     Form::text('s_dob', null,  ['class' => 'form-control', 'placeholder' => 'YY-mm-dd']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_parentname', 'Parent\'s Name') !!}
  

    {!!     Form::text('s_parentname', null,  ['class' => 'form-control', 'placeholder' => 'Parent\'s Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


         
            
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_email', 'Email') !!}
  

    {!!     Form::email('s_email', null,  ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_contact', 'Contact Number') !!}
  

    {!!     Form::text('s_contact', null,  ['class' => 'form-control', 'placeholder' => 'Contact Number', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_unique_id_type', 'Identity Type') !!}
  

    {!!     Form::select('s_unique_id_type', array('adhaar' => 'Adhaar Card', 'voter_id' => 'Voter Id Card', 'pan' => 'PAN Card'), 'adhaar',  ['class' => 'form-control', 'placeholder' => 'Select Identity Type', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_marital_status', 'Marital Status') !!}
  

    {!!     Form::select('s_marital_status', array('0' => 'Unmarried', '1' => 'Married'), '0',  ['class' => 'form-control', 'placeholder' => 'Marital Status']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>




          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_gender', 'Gender') !!}
  

    <br>{!!     Form::radio('s_gender', "1", ['class' => 'form-control']) !!} Male<br>{!!     Form::radio('s_gender', "0",  ['class' => 'form-control']) !!} Female

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

            <div class="Form box-primary">
            <div class="student-ad-Details  with-border">
              <h3 class="std-heading">Address Details</h3>
            </div>
<div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_address', 'Street Address') !!}
  

    {!!     Form::text('s_address', null,  ['class' => 'form-control', 'placeholder' => 'Street Address', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_state', 'State') !!}
                   <select class="form-control" name="s_state" id="state">

                   </select>
   <!--  {!!     Form::select('s_state',  array('0' => 'Delhi', '1' => 'Hyderabad'), null,['class' => 'form-control', 'placeholder' => 'State']) !!}
 -->
          <div class="form_error"></div>
                 </div>
               </div>
         </div>


           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_city', 'City') !!}
  
     <select class="form-control" name="s_city" id="cities">

                   </select>
   

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

        


                    
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_country', 'Nationality') !!}
                <select class="form-control nation" name="s_country">
       <option value="101">India</option>
       @foreach($countries as $c)
      <option value="{{$c->id}}" >{{$c->name}}</option>
        @endforeach 
  </select>
          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_pincode', 'Pincode') !!}
  

    {!!     Form::text('s_pincode', null,  ['class' => 'form-control', 'placeholder' => 'Pincode', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
		 
		  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_nationality', 'Nationality') !!}
  

    {!!     Form::text('s_nationality', null,  ['class' => 'form-control', 'placeholder' => 'Nationality', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

       

<!-- PERSONAL FIELD ENDS-->

<!-- HOSTEL DETAILS -->

<div class="Hostel-bg">
<div class="Login-header with-border   hostel-border">
   <h3 class="login-details">Other Details</h3>
 </div>

         

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_course', 'Course') !!}
  

    {!!     Form::text('s_course', null,  ['class' => 'form-control', 'placeholder' => 'Course']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

            <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_doj', 'Date of Joining') !!}
  

    {!!     Form::text('s_doj', null,  ['class' => 'form-control', 'id'=>'datepicker', 'placeholder' => 'YY-mm-dd', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_unique_id_no', 'Unique ID Number') !!}
  

    {!!     Form::text('s_unique_id_no', null,  ['class' => 'form-control', 'placeholder' => 'Unique ID Number', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_hostel', 'Hostel') !!}
  

     {!!     Form::select('s_hostel', $h, null,  ['class' => 'form-control', 'placeholder' => 'Select Hostel', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
 <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_college', 'College') !!}
  

    {!!     Form::text('s_college', null,  ['class' => 'form-control', 'placeholder' => 'College']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
                  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_room', 'Room Type') !!}
  

    {!!     Form::select('s_room', $r, null,  ['class' => 'form-control', 'placeholder' => 'Select Room', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
 <div class="box-body">
              
           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_year', 'Year') !!}
  

    {!!     Form::text('s_year', null,  ['class' => 'form-control', 'placeholder' => 'Year']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 
               

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!  Form::label('s_veg', 'Food Type')   !!}
  

    {!!     Form::select('s_veg', array('veg' => 'Vegetarian', 'non-veg' => 'Non Vegetarian'), 'veg',  ['class' => 'form-control', 'placeholder' => 'Food Type', 'required' => 'required'])    !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!  Form::label('s_meals', 'Select Meals')   !!}<br>
  

    {!!     Form::checkbox('s_morning', "1")    !!}Morning &nbsp;&nbsp;
    {!!     Form::checkbox('s_afternoon', "1")    !!}Afternoon&nbsp;&nbsp;
    {!!     Form::checkbox('s_evening', "1")    !!}Evening&nbsp;&nbsp;&nbsp;
    {!!     Form::checkbox('s_night', "1")    !!}Night

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

<!-- OTHER DETAILS SECTION END-->


             <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('firstname', 'First Name') !!}
  

    {!!     Form::text('s_firstname', null,  ['class' => 'form-control fname', 'placeholder' => 'First Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->
          <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('lastname', 'Last Name') !!}
  

    {!!     Form::text('s_lastname', null,  ['class' => 'form-control lname', 'placeholder' => 'Last Name']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->
          <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_doj', 'Date of Joining') !!}
  

    {!!     Form::text('s_doj', null,  ['class' => 'form-control', 'id'=>'datepicker', 'placeholder' => 'YY-mm-dd', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->
         <!--  <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_contact', 'Contact') !!}
  

    {!!     Form::text('s_contact', null,  ['class' => 'form-control', 'placeholder' => 'Contact', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

 <!--  <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_email', 'Email') !!}
  

    {!!     Form::email('s_email', null,  ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->


  <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_gender', 'Gender') !!}
  

    <br>{!!     Form::radio('s_gender', "1", ['class' => 'form-control']) !!} Male<br>{!!     Form::radio('s_gender', "0",  ['class' => 'form-control']) !!} Female

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
 -->
       <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_dob', 'YY-mm-dd') !!}
  

    {!!     Form::text('s_dob', null,  ['class' => 'form-control', 'placeholder' => 'Date of Birth']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

             <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_parentname', 'Parentname') !!}
  

    {!!     Form::text('s_parentname', null,  ['class' => 'form-control', 'placeholder' => 'Parentname', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->
            <!--  <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_username', 'Username') !!}
  

    {!!     Form::text('s_username', null,  ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->
            <!--  <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_password', 'Password') !!}
  

    {!!     Form::text('s_password', null,  ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->
             <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_address', 'Street Address') !!}
  

    {!!     Form::text('s_address', null,  ['class' => 'form-control', 'placeholder' => 'Street Address', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

         <!--  <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_nationality', 'Nationality') !!}
                <select class="form-control nation" name="s_nationality">
       <option value="101">India</option>
       @foreach($countries as $c)
      <option value="{{$c->id}}" >{{$c->name}}</option>
        @endforeach 
  </select>
          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->


          <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_state', 'State') !!}
                   <select class="form-control" name="s_state" id="state">

                   </select> -->
   <!--  {!!     Form::select('s_state',  array('0' => 'Delhi', '1' => 'Hyderabad'), null,['class' => 'form-control', 'placeholder' => 'State']) !!}
 -->
         <!--  <div class="form_error"></div>
                 </div>
               </div>
         </div> -->


            <!--  <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_city', 'City') !!}
  
     <select class="form-control" name="s_city" id="cities">

                   </select>
   

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

            

         





<!--          <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_room', 'Room Type') !!}
  

    {!!     Form::select('s_room', $r, null,  ['class' => 'form-control', 'placeholder' => 'Select Room', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->
         
<!--          <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_hostel', 'Hostel') !!}
  

     {!!     Form::select('s_hostel', $h, null,  ['class' => 'form-control', 'placeholder' => 'Select Hostel', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

         <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_college', 'College') !!}
  

    {!!     Form::text('s_college', null,  ['class' => 'form-control', 'placeholder' => 'College']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

         <!-- <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('s_course', 'Course') !!}
  

    {!!     Form::text('s_course', null,  ['class' => 'form-control', 'placeholder' => 'Course']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>  -->


         
         



        <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-back " style="margin-bottom:65px;">Back</button>
                <button type="submit" class="btn btn-success " style="margin-bottom:65px;">Add New Student</button>
              </div>
              </div>
         

            {!! Form::close() !!}

          </div>
          <!-- /.box -->



        </div>




        <!--/.col (left) -->
        <!-- right column -->
      
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->




@endsection


@push('scripts')


<script> 
$(document).ready(function(){
  var c_id=$('.nation').val();

  $.ajax({
    type:'GET',
    cache: false,
    url:'findstates',
    data:{c_id:c_id},
     
    beforeSend:function(){
   
    },
    success:function(data){
  
    $('#state').html(data);


    }

});
});

$('.nation').change(function(){

    var c_id=$(this).val();
 
  $.ajax({
    type:'GET',
    cache: false,
    url:'findstates',
    data:{c_id:c_id},
     
    beforeSend:function(){
  
    },
    success:function(data){
  
    $('#state').html(data);


    }

});
});

$('#state').change(function(){

    var s_id=$(this).val();

  $.ajax({
    type:'GET',
    cache: false,
    url:'findcities',
    data:{s_id:s_id},
     
    beforeSend:function(){
 
    },
    success:function(data){
 
    $('#cities').html(data);


    }
});
});




$('.fname').change(function(){

   if (! $(this).val().match('^[a-zA-Z]{3,16}$') ) {
          alert("Do not add spaces or special chars");
          $(this).val('');
          $(this).focus();
          return false;
      } 
      else if($(this).val()==''){
           alert("Please enter valid name.");
          $(this).val('');
          $(this).focus();
          return false;
      }

});
$('.lname').change(function(){

   if (! $(this).val().match('^[a-zA-Z]{3,16}$') ) {
          alert("Do not add spaces or special chars");
          $(this).val('');
          $(this).focus();
          return false;
      } 
      else if($(this).val()==''){
           alert("Please enter valid name.");
          $(this).val('');
          $(this).focus();
          return false;
      }

});
$('#s_contact').change(function(){

   var num=$(this).val();
   var len=num.length;
   if(isNaN(num) || parseInt(len)!=10)
   {
     alert("Please enter 10 digit mobile number.");
          $(this).val('');
          $(this).focus();
          return false;
   }

});

$('#s_username').change(function(){
 var val=$(this).val();
    if (! $(this).val().match('^[a-z0-9_\.]{3,15}$') ) {
          alert("Invalid Username. \nMax Length:15.\nAllowed chars [a-z][0-9].\nNo Capitals.\nSpecial Chars Allowed:dot,underscore");
          $(this).val('');
          $(this).focus();
          return false;
      } 

});

$('#s_pincode').change(function(){

    if (! $(this).val().match('^[0-9_\.]{6}$') ) {
          alert("Please enter 6 digit integer pincode.");
          $(this).val('');
          $(this).focus();
          return false;
      } 

});


$('#s_password').change(function(){

    if (  $(this).val().length<4 || $(this).val().length>15)  {
          alert("Please select password between 4 to 15 in length.");
          $(this).val('');
          $(this).focus();
          return false;
      } 
   

});


$("#datepicker").datepicker({
    
      dateFormat: "yy-mm-dd",
      
      numberOfMonths: 1,
      changeMonth: true,
        changeYear: true,
      
    });
 $("#s_dob").datepicker({
     
      dateFormat: "yy-mm-dd",
       yearRange: '1980:2017',
      numberOfMonths: 1,
      changeMonth: true,
        changeYear: true
    });
$('#s_dob').change(function(){
  if(! $(this).val().match('^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$') )
  {
    alert('Invalid Date Format');
    $(this).val(' ');
    $(this).focus();
  }
});

 $('#datepicker').change(function(){
  if(! $(this).val().match('^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$') )
  {
    alert('Invalid Date Format');
    $(this).val(' ');
    $(this).focus();
  }
});


</script>
  



@endpush


