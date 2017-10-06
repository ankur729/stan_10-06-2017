
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
              <h3 class="box-title">Add New Parent   </h3>
            </div>
            <div class="col-md-12">
            <div class="form-group">
               <button type="submit" class="btn btn-back " style="margin-top: 0px;float: right;">Back</button>
            </div>
          </div>

                      <div class="Login-heading with-border   guardian-bdr-login">
              <h3 class="Login-title">Login Details   </h3>
            </div>

            

             <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('p_username', 'Username') !!}
  

    {!!     Form::text('p_username', null,  ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('p_password', 'Password') !!}
  

    {!!     Form::text('p_password', null,  ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


            <div class="guardian-heading with-border  guardian-bdr-personal">
              <h3 class="guardian-title">Personal Details   </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::open(['url' => 'admin/guardian/save','method' => 'post']) !!}




          
             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('firstname', 'First Name') !!}
  

    {!!     Form::text('p_firstname', null,  ['class' => 'form-control fname', 'placeholder' => 'First Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('lastname', 'Last Name') !!}
  

    {!!     Form::text('p_lastname', null,  ['class' => 'form-control lname', 'placeholder' => 'Last Name']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


       <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_dob', 'Date of Birth') !!}
  

    {!!     Form::text('p_dob', null,  ['class' => 'form-control', 'placeholder' => 'yy-mm-dd']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
      
         </div>

          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_contact', 'Contact Number') !!}
  

    {!!     Form::text('p_contact', null,  ['class' => 'form-control', 'placeholder' => 'Contact Number', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_email', 'Email') !!}
  

    {!!     Form::email('p_email', null,  ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_gender', 'Gender') !!}
  

    <br>{!!     Form::radio('p_gender', "1", ['class' => 'form-control']) !!} Male<br>{!!     Form::radio('p_gender', "0",  ['class' => 'form-control']) !!} Female

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


        <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_no_sons', 'No of Sons') !!}
  

    {!!     Form::number('p_no_sons', "0",  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_no_daughters', 'No of Daughters') !!}
  

    {!!     Form::number('p_no_daughters', "0",  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 


            <div class="guardian-heading with-border  guardian-bdr-add">
              <h3 class="guardian-title">Address Details   </h3>
            </div>

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_address', 'Street Address') !!}
  

    {!!     Form::text('p_address', null,  ['class' => 'form-control', 'placeholder' => 'Street Address', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_country', 'Country') !!}
                <select class="form-control nation" name="p_country">
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
                  {!!Form::label('p_state', 'State') !!}
                   <select class="form-control" name="p_state" id="state">

                   </select>
   <!--  {!!     Form::select('p_state',  array('0' => 'Delhi', '1' => 'Hyderabad'), null,['class' => 'form-control', 'placeholder' => 'State']) !!}
 -->
          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_city', 'City') !!}
  
     <select class="form-control" name="p_city" id="cities">

                   </select>
   

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

              <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_pincode', 'Pincode') !!}
  

    {!!     Form::text('p_pincode', null,  ['class' => 'form-control', 'placeholder' => 'Pincode', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_unique_id_type', 'Identity Type') !!}
  

    {!!     Form::select('p_unique_id_type', array('adhaar' => 'Adhaar Card', 'voter_id' => 'Voter Id Card', 'pan' => 'PAN Card'), 'adhaar',  ['class' => 'form-control', 'placeholder' => 'Select Identity Type', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="bank-heading with-border   guardian-bdr-bank">
              <h3 class="bank-title">Bank Details</h3>
            </div>


           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_bankname', 'Bank Name') !!}
  

    {!!     Form::text('p_bankname', null,  ['class' => 'form-control', 'placeholder' => 'Name of Bank']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 



         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_branchname', 'Branch Name') !!}
  

    {!!     Form::text('p_branchname', null,  ['class' => 'form-control', 'placeholder' => 'Name of Branch']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 


         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_account_no', 'Account Number') !!}
  

    {!!     Form::text('p_account_no', null,  ['class' => 'form-control', 'placeholder' => 'Account Number']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

           <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_unique_id_no', 'Unique ID Number') !!}
  

    {!!     Form::text('p_unique_id_no', null,  ['class' => 'form-control', 'placeholder' => 'Unique ID Number', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                  <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_ifsc', 'IFSC Code') !!}
  

    {!!     Form::text('p_ifsc', null,  ['class' => 'form-control', 'placeholder' => 'IFSC Code']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 
<!-- 
             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('p_unique_id_type', 'Identity Type') !!}
  

    {!!     Form::select('p_unique_id_type', array('adhaar' => 'Adhaar Card', 'voter_id' => 'Voter Id Card', 'pan' => 'PAN Card'), 'adhaar',  ['class' => 'form-control', 'placeholder' => 'Select Identity Type', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->


        <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                 <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-15px;">Back</button>
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;">Add Parent</button>
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
$('#p_contact').change(function(){

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

$('#p_username').change(function(){
 var val=$(this).val();
    if (! $(this).val().match('^[a-z0-9_\.]{3,15}$') ) {
          alert("Invalid Username. \nMax Length:15.\nAllowed chars [a-z][0-9].\nNo Capitals.\nSpecial Chars Allowed:dot,underscore");
          $(this).val('');
          $(this).focus();
          return false;
      } 

});

$('#p_pincode').change(function(){

    if (! $(this).val().match('^[0-9_\.]{6}$') ) {
          alert("Please enter 6 digit integer pincode.");
          $(this).val('');
          $(this).focus();
          return false;
      } 

});


$('#p_password').change(function(){

    if (  $(this).val().length<4 || $(this).val().length>15)  {
          alert("Please select password between 4 to 15 in length.");
          $(this).val('');
          $(this).focus();
          return false;
      } 
   

});

 $("#p_dob").datepicker({
     
      dateFormat: "yy-mm-dd",
       yearRange: '1980:2017',
      numberOfMonths: 1,
      changeMonth: true,
        changeYear: true
    });
$('#p_dob').change(function(){
  if(! $(this).val().match('^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$') )
  {
    alert('Invalid Date Format');
    $(this).val(' ');
    $(this).focus();
  }
});

</script>
  



@endpush


