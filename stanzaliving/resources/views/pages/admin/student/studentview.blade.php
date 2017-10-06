



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
              <h3 class="box-title">View Student   </h3>
            </div>


       <div class="box-body">
          <div class="col-xs-10">
            <div class="form-group">
             @if($student->s_image!='')
            <?php { ?>
             <img id="img_view" src=" {{ URL::to('images/student/'.$student->s_image)  }}" alt="" style="width:100px;height:100px">
            <br>
          <?php } ?>
             @else
             <?php { ?>
              <img id="img_view" src="  {{ URL::to('images/blank_user.png')  }}" alt="your image" style="width:100px;height:100px">
             <br>
               
                <?php } ?>
              @endif
              
            <div class="form_error"></div>
           </div>
          </div>
          
          </div>


            <div class="student-view-header with-border ">
              <h3 class="student-personal-title   subheading">Personal Details</h3>
            </div>
            <!-- /.box-header -->

            <!-- form start -->
			
       





{!! Form::hidden('id', $student->id) !!}

             <div class="box-body">
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
                  {!!Form::label('firstname', 'First Name') !!}
  

    {!!     Form::text('s_firstname', $student->s_firstname,  ['class' => 'form-control fname', 'placeholder' => 'First Name', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('lastname', 'Last Name') !!}
  

    {!!     Form::text('s_lastname', $student->s_lastname,  ['class' => 'form-control lname', 'placeholder' => 'Last Name','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_dob', 'Date Of Birth') !!}
  

    {!!     Form::text('s_dob', $student->s_dob,  ['class' => 'form-control', 'placeholder' => 'Date of Birth','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                      <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_parentname', 'Parent\'s name') !!}
  

    {!!     Form::text('s_parentname', $student->s_parentname,  ['class' => 'form-control', 'placeholder' => 'Parentname', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_email', 'Email') !!}
  

    {!!     Form::email('s_email', $student->s_email,  ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
            <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_contact', 'Contact') !!}
  

    {!!     Form::text('s_contact', $student->s_contact,  ['class' => 'form-control', 'placeholder' => 'Contact', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_doj', 'Date of Joining') !!}
  

    {!!     Form::text('s_doj', $student->s_doj,  ['class' => 'form-control',  'placeholder' => 'Date of Joining', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_gender', 'Gender') !!} :&nbsp;&nbsp;&nbsp;<br>
  <?php
  $gm='';
  $gf='';
  ?>

  @if($student->s_gender==1)
  <?php $gm='true'; ?>
  @endif
  @if($student->s_gender==0)
  <?php $gf='true'; ?>
  @endif



   {!!     Form::radio('s_gender', "1", $gm) !!} Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    {!!     Form::radio('s_gender', "0", $gf ) !!} Female

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

        <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_marital_status', 'Marital Status') !!}
  <?php $ms = $student->s_marital_status; ?>

    {!!     Form::select('s_marital_status', array('0' => 'Unmarried', '1' => 'Married'), $student->s_marital_status,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


            <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_unique_id_type', 'Identity Type') !!}
  

    {!!     Form::select('s_unique_id_type', array('0' => 'Adhaar Card', '1' => 'Voter Id Card', '2' => 'PAN Card'), $student->s_unique_id_type,  ['class' => 'form-control', 'placeholder' => 'Select Identity Type', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_unique_id_no', 'Unique ID Number') !!}
  

    {!!     Form::text('s_unique_id_no', $student->s_unique_id_no,  ['class' => 'form-control', 'placeholder' => 'Unique ID Number', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

            <div class="student-view-header with-border ">
              <h3 class="student-add-title   subheading">Address Details</h3>
            </div>


           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_address', 'Address') !!}
  

    {!!     Form::text('s_address', $student->s_address,  ['class' => 'form-control', 'placeholder' => 'Address', 'required' => 'required','disabled'=>'disabled']) !!}

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
   

    {!!     Form::select('s_city', array(''=>$city->name), null,  ['class' => 'form-control','id'=>'cities','required' => 'required','disabled'=>'disabled']) !!}

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
                  
    {!!     Form::select('s_state', array(''=>$state->name), null,['class' => 'form-control', 'id'=>'state', 'placeholder' => 'State','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_nationality', 'Country') !!}
 
                  <select class="form-control nation" name="s_nationality" disabled="disabled">
                  <option value="{{$country->id}}">{{$country->name}}</option>
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
  

    {!!     Form::text('s_pincode', $student->s_pincode,  ['class' => 'form-control', 'placeholder' => 'Pincode', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             
<div class="student-view-header with-border ">
              <h3 class="student-title   subheading">Others Details</h3>
            </div>


 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_hostel', 'Hostel') !!}
  

     {!!     Form::select('s_hostel', $h, null,  ['class' => 'form-control', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_college', 'College') !!}
  

    {!!     Form::text('s_college', $student->s_college,  ['class' => 'form-control', 'placeholder' => 'College','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_course', 'Course') !!}
  

    {!!     Form::text('s_course', $student->s_course,  ['class' => 'form-control', 'placeholder' => 'Course','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 



         

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!  Form::label('s_veg', 'Food Type')   !!}
  

    {!!     Form::select('s_veg', array('veg' => 'Vegetarian', 'non-veg' => 'Non Vegetarian'), $student->s_veg,  ['class' => 'form-control', 'placeholder' => 'Food Type', 'required' => 'required','disabled'=>'disabled'])    !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_room', 'Room Type') !!}


    {!!     Form::select('s_room', $r, null,  ['class' => 'form-control', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                    <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_year', 'Year') !!}
  

    {!!     Form::text('s_year', $student->s_year,  ['class' => 'form-control', 'placeholder' => 'Year','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

         <div class="box-body">
               <div class="col-xs-6">
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




         
        <!--  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_hostel', 'Hostel') !!}
  

     {!!     Form::select('s_hostel', $h, null,  ['class' => 'form-control', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_college', 'College') !!}
  

    {!!     Form::text('s_college', $student->s_college,  ['class' => 'form-control', 'placeholder' => 'College','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_course', 'Course') !!}
  

    {!!     Form::text('s_course', $student->s_course,  ['class' => 'form-control', 'placeholder' => 'Course','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('s_year', 'Year') !!}
  

    {!!     Form::text('s_year', $student->s_year,  ['class' => 'form-control', 'placeholder' => 'Year','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>  -->


<!--            <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                 .....
                 <div class="form_error"></div>
                 </div>
               </div>
         </div>  -->
       
     
              <!-- /.box-body -->
       
          <div class="box-footer">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                  <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-15px;">Back</button>
                 <!--  <button type="submit" class="btn btn-success " style="margin-bottom:65px;">Add New Student</button> -->
              </div>
           </div>
          

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