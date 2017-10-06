



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
              <h3 class="box-title">View/Update Complaint </h3>
            </div>
            <!-- /.box-header -->




{!! Form::model($complaint,['url' => 'admin/complaint/update','method' => 'put']) !!}


  {!! Form::hidden('id', $complaint->id) !!}









            <!-- form start -->

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('c_beg_date', 'Opening Date') !!}
  

    {!!     Form::text('c_beg_date', $complaint->c_beg_date,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                      <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('cat', 'Problem Category') !!}
  

    {!!     Form::select('c_category', $mycat, null, ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
                   <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('sub_cat', 'Sub Category') !!}
  

    {!!     Form::select('c_subcategory', $mysubcat, null,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
			  
             <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('ps', 'Problem Statement') !!}
  

    {!!     Form::textarea('c_problem', $complaint->c_problem, ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
		 
		 <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('details', 'Specific Details') !!}
  

    {!!     Form::textarea('c_details', $complaint->c_details,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



<!--           <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('sub_cat', 'Sub Category') !!}
  

    {!!     Form::select('c_subcategory', $mysubcat, null,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div> -->

          <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('c_urgency', 'Urgent') !!}
  

      {!!     Form::select('c_urgency', array('Not_Urgent'=>'Not Urgent', 'Urgent'=>'Urgent'), null,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('c_res_date', 'Closing Date') !!}
  

    {!!     Form::text('c_res_date', $complaint->c_res_date,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



          <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('c_remarks', 'Complaint Remarks') !!}
  

    {!!     Form::text('c_remarks', $complaint->c_remarks,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


                   <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('status', 'Problem Status') !!}
  

    {!!     Form::select('c_status', array('Open'=>'Open', 'Pending'=>'Pending','Closed'=>'Closed'), null,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


                   <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('details', 'Complaint Reply') !!}
  

    {!!     Form::textarea('c_reply', $complaint->c_reply,  ['class' => 'form-control']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
         

 <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success pull-right" style="margin-bottom:65px;">Update Complaint Status</button>
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

$("#c_res_date").datepicker({
     
      dateFormat: "yy-mm-dd",
      yearRange: '1940:2017',
      numberOfMonths: 1,
      changeMonth: true,
        changeYear: true
    });


$('#c_res_date').change(function(){
  if(! $(this).val().match('^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$') )
  {
    alert('Invalid Date Format');
    $(this).val(' ');
    $(this).focus();
  }

});

</script>
@endpush