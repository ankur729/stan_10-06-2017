



@extends('layouts.master.admin.index')


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
              <h3 class="box-title">Edit Student   </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
{!! Form::model($student,['url' => 'admin/student/update','method' => 'put','files'=>true]) !!}
{!! Form::hidden('id', $student->id) !!}
{!! Form::hidden('imgnameh', $student->s_image) !!}
       <div class="box-body">
          <div class="col-xs-10">
            <div class="form-group">
            @if($student->s_image!='')
            <?php { ?>
             <img id="img_view" src=" {{ URL::to('images/student/'.$student->s_image)  }}" alt="" style="width:100px;height:100px">
             <br>
               <label for="s_image">Edit Student Image </label>
             <?php } ?>
             @else
             <?php { ?>
              <img id="img_view" src="  {{ URL::to('images/blank_user.png')  }}" alt="your image" style="width:100px;height:100px">

             <br>
               <label for="s_image">No Student Image </label>
                <?php } ?>
              @endif
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


       <div class="Form box-primary">
            <div class="student-prsl-Details  with-border">
              <h3 class="std-heading">Login Details</h3>
            </div>
       


   
             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_username', 'Username') !!}
  

    {!!     Form::text('s_username', null,  ['class' => 'form-control', 'readonly'=>'readonly']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_password', 'Password') !!}(Enter only if want to change)
  

    {!!     Form::text('s_password', "",  ['class' => 'form-control', 'placeholder' => 'Password']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
		 
		 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_cpassword', 'Confirm Password') !!}(Enter only if want to change)
  

    {!!     Form::text('s_cpassword', "",  ['class' => 'form-control', 'placeholder' => 'Confirm Password']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
         
<!-- 
              <div class="col-md-4">
       <div class="box-body">
          <div class="col-xs-12">
            <div class="form-group">
             <img id="img_view" src=" http://localhost/suraj-project/project/stanza_adminpanel-14-sept/public/images/blank_user.png" alt="your image" style="width:100px;height:100px"><br>
               <label for="s_image">Add Student Image </label>
              <input id="imgInp" name="s_image" type="file">
            <div class="form_error"></div>
           </div>
          </div>
          </div>
        </div> -->

			 <div class="Form box-primary">
            <div class="student-edit-Details  with-border">
              <h3 class="std-heading">Personal Details</h3>
            </div>
       






          
            <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('firstname', 'First Name') !!}
  

    {!!     Form::text('s_firstname', $student->s_firstname,  ['class' => 'form-control fname', 'placeholder' => 'First Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('lastname', 'Last Name') !!}
  

    {!!     Form::text('s_lastname', $student->s_lastname,  ['class' => 'form-control lname', 'placeholder' => 'Last Name']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


       <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_dob', 'Date Of Birth') !!}
  

    {!!     Form::text('s_dob', $student->s_dob,  ['class' => 'form-control', 'placeholder' => 'Date of Birth']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_parentname', 'Parent\'s Name') !!}
  

    {!!     Form::text('s_parentname', $student->s_parentname,  ['class' => 'form-control', 'placeholder' => 'Parentname', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_email', 'Email') !!}
  

    {!!     Form::email('s_email', $student->s_email,  ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                   <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_contact', 'Contact') !!}
  

    {!!     Form::text('s_contact', $student->s_contact,  ['class' => 'form-control', 'placeholder' => 'Contact', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_unique_id_type', 'Identity Type') !!}
  

    {!!     Form::select('s_unique_id_type', array('0' => 'Adhaar Card', '1' => 'Voter Id Card', '2' => 'PAN Card'), $student->s_unique_id_type,  ['class' => 'form-control', 'placeholder' => 'Select Identity Type', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_marital_status', 'Marital Status') !!}
  <?php $ms = $student->s_marital_status; ?>

    {!!     Form::select('s_marital_status', array('0' => 'Unmarried', '1' => 'Married'), $student->s_marital_status,  ['class' => 'form-control']) !!}

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
       
<!--              <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_username', 'Username') !!}
  

    {!!     Form::text('s_username', $student->s_username,  ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_password', 'Password') !!}(Enter only if want to change)
  

    {!!     Form::text('s_password', "",  ['class' => 'form-control', 'placeholder' => 'Password']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_address', 'Street Address') !!}
  

    {!!     Form::text('s_address', $student->s_address,  ['class' => 'form-control', 'placeholder' => 'Street Address', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
         
                      <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_state', 'State') !!}
 <!--  {!! Form::hidden('ss',$student->s_state, ['id'=>'ss']) !!}
  <select class="form-control" name="s_state" id="state">
     
                   </select> -->
                  
    {!!     Form::select('s_state',  $mystates, null,['class' => 'form-control', 'id'=>'state', 'placeholder' => 'State']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_city', 'City') !!}
  <!--  <select class="form-control" name="s_city" id="cities">
      
                   </select> -->
   

    {!!     Form::select('s_city', $mycities, null,  ['class' => 'form-control','id'=>'cities','required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


           

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_Country', 'Country') !!}
 
 <select class="form-control nation" name="s_country">
       <option value="{{$student->s_country}}"></option>
       @foreach($countries as $c)
       <?php $s=""; ?>
          @if($student->s_country==$c->id)
          <?php $s="selected"; ?>
          @endif
      <option value="{{$c->id}}" {{$s}} >{{$c->name}}</option>
           
        @endforeach 
  </select>
   <!--  {!!     Form::select('s_nationality',  array('0' => 'India', '1' => 'Afghanistan'), $student->s_nationality,  ['class' => 'form-control', 'placeholder' => 'Select Country']) !!} -->

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_pincode', 'Pincode') !!}
  

    {!!     Form::text('s_pincode', $student->s_pincode,  ['class' => 'form-control', 'placeholder' => 'Pincode', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_nationality', 'Nationality') !!}
  

    {!!     Form::text('s_nationality', $student->s_nationality,  ['class' => 'form-control', 'placeholder' => 'Nationality', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
            
         


              <div class="Form box-primary">
            <div class="student-prsl-Details  with-border">
              <h3 class="std-heading">Others Details</h3>
            </div>

            <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_course', 'Course') !!}
  

    {!!     Form::text('s_course', $student->s_course,  ['class' => 'form-control', 'placeholder' => 'Course']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_doj', 'Date of Joining') !!}
  

    {!!     Form::text('s_doj', $student->s_doj,  ['class' => 'form-control',  'id'=>'datepicker','placeholder' => 'Date of Joining', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_unique_id_no', 'Unique ID Number') !!}
  

    {!!     Form::text('s_unique_id_no', $student->s_unique_id_no,  ['class' => 'form-control', 'placeholder' => 'Unique ID Number', 'required' => 'required']) !!}

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
                  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_college', 'College') !!}
  

    {!!     Form::text('s_college', $student->s_college,  ['class' => 'form-control', 'placeholder' => 'College']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>




            


         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_room', 'Room Type') !!}


    {!!     Form::select('s_room', $r, null,  ['class' => 'form-control',  'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>





           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_year', 'Year') !!}
  

    {!!     Form::text('s_year', $student->s_year,  ['class' => 'form-control', 'placeholder' => 'Year']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 


          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!  Form::label('s_veg', 'Food Type')   !!}
  

    {!!     Form::select('s_veg', array('veg' => 'Vegetarian', 'non-veg' => 'Non Vegetarian'), $student->s_veg,  ['class' => 'form-control', 'placeholder' => 'Food Type', 'required' => 'required'])    !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!  Form::label('s_meals', 'Select Meals')   !!}<br>
  
<?php 
$morning='';
$afternoon='';
$evening='';
$night='';
?>

@if($student->s_morning==1)
<?php
 $morning='checked';
?>
@endif
@if($student->s_afternoon==1)
<?php
 $afternoon='checked';
?>
@endif
@if($student->s_evening==1)
<?php
 $evening='checked';
?>
@endif
@if($student->s_night==1)
<?php
  $night='checked';
?>
@endif


    {!!     Form::checkbox('s_morning', "1", $morning)    !!}Morning &nbsp;&nbsp;
    {!!     Form::checkbox('s_afternoon', "1", $afternoon)    !!}Afternoon&nbsp;&nbsp;
    {!!     Form::checkbox('s_evening', "1", $evening)    !!}Evening&nbsp;&nbsp;&nbsp;
    {!!     Form::checkbox('s_night', "1", $night)    !!}Night

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
        
              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-15px;">Back</button>
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;padding: 10px 35px;">Save</button>
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
   
   <script src="../../../public/js/jquery.multiselect.js" type="text/javascript"></script>
<script>



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
          alert("Invalid Username. 3-15 in Length. Allowed chars [a-z][0-9] . _");
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