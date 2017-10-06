



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
              <h3 class="box-title">Edit Parent   </h3>
            </div>
                      <div class="col-md-12">
            <div class="form-group">
               <button type="submit" class="btn btn-back " style="margin-top: 0px;float: right;">Back</button>
            </div>
          </div>

            <div class="Login-header with-border   after-border">
              <h3 class="login-details">Login Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::model($guardian,['url' => 'admin/guardian/update','method' => 'put']) !!}



{!! Form::hidden('id', $guardian->id) !!}

          
             <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('p_username', 'Username') !!}
  

    {!!     Form::text('p_username', $guardian->p_username,  ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('p_password', 'Password') !!}(Enter only if want to change)
  

    {!!     Form::text('p_password', "",  ['class' => 'form-control', 'placeholder' => 'Password']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

 <div class="Login-header with-border   after-border">
   <h3 class="login-details">Personal Details</h3>
</div>

            <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('firstname', 'First Name') !!}
  

    {!!     Form::text('p_firstname', null,  ['class' => 'form-control fname', 'placeholder' => 'First Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('lastname', 'Last Name') !!}
  

    {!!     Form::text('p_lastname', null,  ['class' => 'form-control lname', 'placeholder' => 'Last Name']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_dob', 'Date of Birth') !!}
  

    {!!     Form::text('p_dob', null,  ['class' => 'form-control', 'placeholder' => 'dd-mm-yy']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
      
         </div>
          <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_contact', 'Contact') !!}
  

    {!!     Form::text('p_contact', null,  ['class' => 'form-control', 'placeholder' => 'Contact', 'required' => 'required']) !!}

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

<div class="Login-header with-border   after-border">
   <h3 class="login-details">Address Details</h3>
</div>

             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_address', 'Street Address') !!}
  

    {!!     Form::text('p_address', null,  ['class' => 'form-control', 'placeholder' => 'Street Address', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_city', 'City') !!}
  
      {!!     Form::select('p_city', $mycities, null,  ['class' => 'form-control','id'=>'cities','required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


          <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_state', 'State') !!}
                     

                  
    {!!     Form::select('p_state',  $mystates, null,['class' => 'form-control', 'id'=>'state', 'placeholder' => 'State']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_country', 'Country') !!}
                <select class="form-control nation" name="p_nationality">
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
  

    {!!     Form::text('p_pincode', null,  ['class' => 'form-control', 'placeholder' => 'Pincode', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
            
            
 <div class="Login-header with-border   after-border">
   <h3 class="login-details">Others Details</h3>
</div>
         
             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_unique_id_type', 'Identity Type') !!}
  

    {!!     Form::select('p_unique_id_type', array('adhaar' => 'Adhaar Card', 'voter_id' => 'Voter Id Card', 'pan' => 'PAN Card'), 'adhaar',  ['class' => 'form-control', 'placeholder' => 'Select Identity Type', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
             <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_unique_id_no', 'Unique ID Number') !!}
  

    {!!     Form::text('p_unique_id_no', null,  ['class' => 'form-control', 'placeholder' => 'Unique ID Number', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                    <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_bankname', 'Bank Name') !!}
  

    {!!     Form::text('p_bankname', null,  ['class' => 'form-control', 'placeholder' => 'Name of Bank']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

         <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_branchname', 'Branch Name') !!}
  

    {!!     Form::text('p_branchname', null,  ['class' => 'form-control', 'placeholder' => 'Name of Branch']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                  <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_account_no', 'Account Number') !!}
  

    {!!     Form::text('p_account_no', null,  ['class' => 'form-control', 'placeholder' => 'Account Number']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

         <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_ifsc', 'IFSC Code') !!}
  

    {!!     Form::text('p_ifsc', null,  ['class' => 'form-control', 'placeholder' => 'IFSC Code']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 
            

        <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_no_sons', 'No of Sons') !!}
  

    {!!     Form::number('p_no_sons', null,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('p_no_daughters', 'Daughters') !!}
  

    {!!     Form::number('p_no_daughters', null,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

          <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                 <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-15px;">Back</button>
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;">Edit Parent</button>
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
          alert("Invalid Username. 3-15 in Length. Allowed chars [a-z][0-9] . _");
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