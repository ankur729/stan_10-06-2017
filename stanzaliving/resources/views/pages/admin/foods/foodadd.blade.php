



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
              <h3 class="box-title">Add New Food Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::open(['url' => 'admin/menu/save','method' => 'post']) !!}


               <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('type', 'Food Type') !!}
  

    {!!     Form::select('f_type', array('veg'=>'veg','non-veg'=>'non-veg'), null,  ['class' => 'form-control', 'placeholder' => '---Select Food Type---']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('cat', 'Food Category') !!}
  

    {!!     Form::select('f_cat', $myarr, null,  ['class' => 'form-control', 'placeholder' => '---Select Category---']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          
             <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('name', 'Item Name') !!}
  

    {!!     Form::text('f_name', null,  ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


          <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('stat', 'Status') !!}
  

    {!!     Form::select('status', array('0'=>'Deactive','1'=>'Active'), null,  ['class' => 'form-control', 'placeholder' => '---Select Category---']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-4">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;margin-top: 23px;">Add Category</button>
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