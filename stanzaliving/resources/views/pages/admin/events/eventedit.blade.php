
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
              <h3 class="box-title">Edit Event </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
      
       

{!! Form::model($events,['url' => 'admin/event/update','method' => 'put','files'=>true]) !!}
{!! Form::hidden('id', $events->id) !!}

<!-- Login-Field -->
<div class="Login-bg">


<div class="Login-header with-border">
   <h3 class="login-details">Main Details</h3>
 </div>
     
       <div class="box-body">
       <div class="col-xs-6 ">
        <div class="form-group">
           {!!Form::label('e_name', 'Event Name') !!}
      

        {!!     Form::text('e_name', null,  ['class' => 'form-control', 'placeholder' => 'Event Name']) !!}

          <div class="form_error"></div>
           </div>
          </div>
        </div>


     <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('e_date', 'Event Date') !!}
  

    {!!     Form::text('e_date', null,  ['class' => 'form-control', 'id'=>'datepicker', 'placeholder' => 'Event Date']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
      



         <div class="box-body">
           <div class="col-xs-6 ">
            <div class="form-group">
               {!!Form::label('e_time', 'Event Time') !!}
          

            {!!     Form::text('e_time', null,  ['class' => 'form-control', 'placeholder' => '12:00am']) !!}

              <div class="form_error"></div>
               </div>
              </div>
            </div>

              <div class="box-body">
       <div class="col-xs-6 ">
        <div class="form-group">
           {!!Form::label('e_loc', 'Event Location') !!}
      

        {!!     Form::text('e_loc', null,  ['class' => 'form-control', 'placeholder' => 'Event Location']) !!}

          <div class="form_error"></div>
           </div>
          </div>
        </div>

   </div>


<div class="Login-header with-border">
   <h3 class="login-details">Audience Details</h3>
 </div>

    <div class="box-body">
       <div class="col-xs-6 ">
        <div class="form-group">
           {!!Form::label('e_contact_person', 'Contact Person Name') !!}
      

        {!!     Form::text('e_contact_person', null,  ['class' => 'form-control', 'placeholder' => 'Person Name']) !!}

          <div class="form_error"></div>
           </div>
          </div>
        </div>


    <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('e_contact', 'Contact Details') !!}
  

    {!!     Form::text('e_contact', null,  ['class' => 'form-control lname', 'placeholder' => 'Contact']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('e_target', 'Target Audience') !!}
  

    {!!     Form::text('e_target', null,  ['class' => 'form-control', 'placeholder' => 'Target Audience']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('e_antk', 'Audience Need To Know') !!}
  

    {!!     Form::text('e_antk', null,  ['class' => 'form-control', 'placeholder' => 'Audience Need To Know']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('e_int', 'Their Interest') !!}
  

    {!!     Form::text('e_int', null,  ['class' => 'form-control', 'placeholder' => 'Interest for Audience']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                      <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('e_msg', 'Message') !!}
  

    {!!     Form::textarea('e_msg', null,  ['class' => 'form-control', 'placeholder' => 'What do you want to say to the target audience?
What do you want them to know/do?
']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
            

          <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('e_objective', 'Objective') !!}
  

    {!!     Form::text('e_objective', null,  ['class' => 'form-control', 'placeholder' => 'Objective']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
          <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('s_email', 'Email') !!}
  

    {!!     Form::email('s_email', null,  ['class' => 'form-control', 'placeholder' => 'Email']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('e_desc', 'Description') !!}
  

    {!!     Form::textarea('e_desc', null,  ['class' => 'form-control', 'placeholder' => 'Description']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('e_risk', 'Risk Assessment') !!}
               
    {!!     Form::textarea('e_risk', null, ['class' => 'form-control', 'placeholder' => 'Risk Assessment']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


<!-- PERSONAL FIELD ENDS-->

<!-- HOSTEL DETAILS -->

<div class="Hostel-bg">
<div class="Login-header with-border">
   <h3 class="login-details">Evaluation Fields</h3>
 </div>

          <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('e_aims', 'Aims') !!}
  

    {!!     Form::text('e_aims', null,  ['class' => 'form-control', 'placeholder' => 'Objectives of Event']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('e_achieve', 'Object Achieved?') !!}
  

    <br>{!!     Form::radio('e_achieve', "Yes") !!} Yes<br>{!!     Form::radio('e_achieve', "No",  ['class' => 'form-control']) !!} No

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('e_budget', 'In Budget?') !!}
  

    <br>{!!     Form::radio('e_budget', "Yes") !!} Yes<br>{!!     Form::radio('e_budget', "No",  ['class' => 'form-control']) !!} No

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 

                 <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('e_outcomes', 'Outcomes') !!}
  

    {!!     Form::textarea('e_outcomes', null,  ['class' => 'form-control', 'placeholder' => 'intended/unintended outcomes']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> 
                  <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('e_meff', 'Measure of Effectiveness') !!}
  

    {!!     Form::text('e_meff', null,  ['class' => 'form-control', 'placeholder' => 'Measure of Effectiveness']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('e_teff', 'Tools to Measure Effectiveness') !!}
  

    {!!     Form::text('e_teff', null,  ['class' => 'form-control', 'placeholder' => 'Tools to Measure Effectiveness']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

</div>
<!-- HOSTEL DETAILS ENDS-->   

<!-- OTHER DETAILS SECTION -->

<div class="Login-header with-border">
   <h3 class="login-details">Checklist</h3>
 </div> 

              <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group">{!!     Form::checkbox('e_inv', "1") !!}
                  {!!Form::label('e_inv', 'Who will be involved in the event') !!}
  


          <div class="form_error"></div>
                 </div>
               </div>
         </div>
              <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group">   {!!     Form::checkbox('e_dd', "1") !!}
                  {!!Form::label('e_dd', 'Date Determined') !!}
  



          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group"> {!!     Form::checkbox('e_locd', "1") !!}
                  {!!  Form::label('e_locd', 'Location Determined')   !!}
  




          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                  <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group">{!!     Form::checkbox('e_tad', null) !!}
                  {!!Form::label('e_tad', 'Target Audience Determined') !!}
  

  

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


         <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group">{!!     Form::checkbox('e_md', null) !!}
                  {!!Form::label('e_md', 'Message Determined') !!}
  


          <div class="form_error"></div>
                 </div>
               </div>
         </div>
              <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group">  {!!     Form::checkbox('e_od', null) !!}
                  {!!Form::label('e_od', 'Objective Determined') !!}
  

 

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group"> {!!     Form::checkbox('e_rac', null) !!}
                  {!!  Form::label('e_rac', 'Risk Assessment Completed')   !!}
  




          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                  <div class="box-body">
               <div class="col-xs-3">
                 <div class="form-group">  {!!     Form::checkbox('e_ece', null) !!}
                  {!!Form::label('e_ece', 'Evaluation Criteria Established') !!}
  



          <div class="form_error"></div>
                 </div>
               </div>
         </div>


      
<!-- OTHER DETAILS SECTION END-->






        <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success " style="margin-bottom:65px;">Edit Event</button>
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



$("#datepicker").datepicker({
    
      dateFormat: "yy-mm-dd",
      
      numberOfMonths: 1,
      changeMonth: true,
        changeYear: true,
      
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
  
<script>

  </script>


@endpush


