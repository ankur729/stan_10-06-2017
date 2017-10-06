



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
              <h3 class="box-title">View Complaint </h3>
            </div>
            <!-- /.box-header -->


{!! Form::model($messages,['url' => 'admin/communicate/update','method' => 'put']) !!}


  {!! Form::hidden('id', $messages->id) !!}











            <!-- form start -->

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('m_date', 'Opening Date') !!}
  

    {!!     Form::text('m_date', $messages->m_date,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                      <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('m_cat', 'Message Category') !!}
  

    {!!     Form::select('m_cat', $mycat, null, ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
                   <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('m_sub_cat', 'Sub Category') !!}
  

    {!!     Form::select('m_sub_cat', $mysubcat, null,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
			  
             <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('m_topic', 'Topic of Discussion') !!}
  

    {!!     Form::text('m_topic', $messages->m_topic, ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

 



         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('m_person_name', 'Person Name') !!}
  

    {!!     Form::text('m_person_name', $messages->m_person_name,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                      <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('m_contact', 'Person Contact') !!}
  

    {!!     Form::text('m_contact', $messages->m_contact,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
                   <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('m_idproof', 'ID Proof') !!}
  

    {!!     Form::text('m_idproof', $messages->m_idproof,  ['class' => 'form-control','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



                   <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('details', 'Specific Details') !!}
  

    {!!     Form::textarea('m_desc', $messages->m_desc,  ['class' => 'form-control','disabled'=>'disabled']) !!}

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