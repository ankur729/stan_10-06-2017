



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
              <h3 class="box-title">View Parent   </h3>
            </div>
            <!-- /.box-header -->

         <div class="col-md-12">
            <div class="form-group">
               <button type="submit" class="btn btn-back " style="margin-top: 0px;float: right;">Back</button>
            </div>
          </div>

            <!-- form start -->
      <div class="personal-box-header  with-border">
              <h3 class="personal-box">Login Details</h3>
            </div>

             <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('p_username', 'Username') !!}
  

    {!!     Form::text('p_username', $guardian->p_username,  ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required','disabled'=>'disabled','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('p_password', 'Password') !!}
  

    {!!     Form::text('p_password', "",  ['class' => 'form-control', 'placeholder' => 'Password','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


			<div class="personal-box-header  with-border">
              <h3 class="personal-box">Personal Details</h3>
            </div>
       
 <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('firstname', 'First Name') !!}
  

    {!!     Form::text('p_firstname', null,  ['class' => 'form-control fname', 'placeholder' => 'First Name', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('lastname', 'Last Name') !!}
  

    {!!     Form::text('p_lastname', null,  ['class' => 'form-control lname', 'placeholder' => 'Last Name','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_dob', 'Date of Birth') !!}
  

    {!!     Form::text('p_dob', null,  ['class' => 'form-control', 'placeholder' => 'dd-mm-yy','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
      
         </div>
          <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_contact', 'Contact') !!}
  

    {!!     Form::text('p_contact', null,  ['class' => 'form-control', 'placeholder' => 'Contact', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

  <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_email', 'Email') !!}
  

    {!!     Form::email('p_email', null,  ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


  <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_gender', 'Gender') !!}
  

    <br>{!!     Form::radio('p_gender', "1", ['class' => 'form-control']) !!} Male<br>{!!     Form::radio('p_gender', "0",  ['class' => 'form-control']) !!} Female

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

      <div class="personal-box-header  with-border">
              <h3 class="personal-box">Address Details</h3>
            </div>

             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_address', 'Street Address') !!}
  

    {!!     Form::text('p_address', null,  ['class' => 'form-control', 'placeholder' => 'Street Address', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_city', 'City') !!}
  
     <select class="form-control" name="p_city" id="cities" disabled='disabled'>

                   </select>
   

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                   <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_state', 'State') !!}
                   <select class="form-control" name="p_state" id="state", disabled='disabled'>

                   </select>
   <!--  {!!     Form::select('p_state',  array('0' => 'Delhi', '1' => 'Hyderabad'), null,['class' => 'form-control', 'placeholder' => 'State']) !!}
 -->
          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_country', 'Country') !!}
                <select class="form-control nation" name="p_nationality" disabled='disabled'>
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
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_pincode', 'Pincode') !!}
  

    {!!     Form::text('p_pincode', null,  ['class' => 'form-control', 'placeholder' => 'Pincode', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
            


      <div class="personal-box-header  with-border">
              <h3 class="personal-box">Others Details</h3>
            </div>
       



            

         
             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_unique_id_type', 'Identity Type') !!}
  

    {!!     Form::select('p_unique_id_type', array('adhaar' => 'Adhaar Card', 'voter_id' => 'Voter Id Card', 'pan' => 'PAN Card'), 'adhaar',  ['class' => 'form-control', 'placeholder' => 'Select Identity Type', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_unique_id_no', 'Unique ID Number') !!}
  

    {!!     Form::text('p_unique_id_no', null,  ['class' => 'form-control', 'placeholder' => 'Unique ID Number', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                    <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_bankname', 'Bank Name') !!}
  

    {!!     Form::text('p_bankname', null,  ['class' => 'form-control', 'placeholder' => 'Name of Bank','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

                  <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_branchname', 'Branch Name') !!}
  

    {!!     Form::text('p_branchname', null,  ['class' => 'form-control', 'placeholder' => 'Name of Branch','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

                  <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_account_no', 'Account Number') !!}
  

    {!!     Form::text('p_account_no', null,  ['class' => 'form-control', 'placeholder' => 'Account Number','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

         <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_ifsc', 'IFSC Code') !!}
  

    {!!     Form::text('p_ifsc', null,  ['class' => 'form-control', 'placeholder' => 'IFSC Code','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 
            

        <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_no_sons', 'No of Sons') !!}
  

    {!!     Form::number('p_no_sons', "0",  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_no_daughters', 'Daughters') !!}
  

    {!!     Form::number('p_no_daughters', "0",  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 


           <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                 .....
                 <div class="form_error"></div>
                 </div>
               </div>
         </div> 
       
       
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