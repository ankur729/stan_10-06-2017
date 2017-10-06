



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
              <h3 class="box-title" style="margin-bottom: 48px;">Add New Page   </h3>
            </div>
           <div class="col-md-12">
            <div class="form-group" style="margin-top: 0px;">
               <button type="submit" class="btn btn-back " style="margin-top: 0px;float: right;">Back</button>
            </div>
          </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::open(['url' => 'admin/information/save','method' => 'post']) !!}




              <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('title', 'Page Title ') !!}
	

    {!!     Form::text('title', null,  ['class' => 'form-control', 'placeholder' => 'Page Title']) !!}

				  <div class="form_error"></div>
                 </div>
               </div>
			   </div>

             <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('desc', 'Short Description') !!}
  

    {!!     Form::text('desc', null,  ['class' => 'form-control', 'placeholder' => 'Short Description']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('content', 'Content') !!}
  
                   {!!     Form::textarea('content', null,  ['class' => 'form-control', 'placeholder' => 'Short Description','id'=>'editor1']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('metatitle', 'Meta Tag Title') !!}
  

    {!!     Form::text('metatitle', null,  ['class' => 'form-control', 'placeholder' => 'Meta Tag Title']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
           <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('metadesc', 'Meta Tag Description') !!}
  

    {!!     Form::text('metadesc', null,  ['class' => 'form-control', 'placeholder' => 'Meta Tag Description']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('metakeywords', 'Meta Tag Keywords') !!}
  

    {!!     Form::text('metakeywords', null,  ['class' => 'form-control', 'placeholder' => 'Meta Tag Keywords']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


           <div class="box-body">
               <div class="col-md-6">
                 <div class="form-group">
                  {!!Form::label('seourl', 'Seo URL') !!}
  

    {!!     Form::text('seourl', null,  ['class' => 'form-control', 'placeholder' => 'Seo URL']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-back " style="margin-bottom:65px;float: left;">Back</button>
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;margin-left:5px;  ">Add New Page</button>
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
<style>
.child_checkbox_div{
	margin-left:20px;
}
.access-item-list{
	margin-left:50px;
}
</style>


<script src="{{ URL::asset('js/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

  
<script>

CKEDITOR.replace( 'editor1' ); 

$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
           $('#errorMessage').fadeOut('slow');
        }, 5000); 
        // <-- time in milliseconds
      
    });
</script>

@endsection