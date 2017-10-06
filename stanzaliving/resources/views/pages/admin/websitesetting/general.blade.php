@extends('layouts.master.admin.index')


@section('content')


 <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
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
  </div>

  <div class="col-md-12">
  <div class="form-group" style="margin-top: 20px;">
    <button type="submit" class="btn btn-back " style="margin-top: 70px;float: right;">Back</button>
  </div>
</div>

          <div class="box box-primary">
            <div class="box-header with-border">
            <br><br>
              <h3 class="box-title" style="padding-left: 10px;margin-bottom:30px;">General Settings</h3>
            </div>
            <br>

         
            <!-- form start -->
			
            {!! Form::model($setting,['url' => 'admin/setting/general/update','method' => 'put']) !!}



              <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
    
          {!!Form::label('sitename', 'Site Name') !!}
        

          {!!     Form::text('sitename', null,  ['class' => 'form-control', 'placeholder' => 'Site Name']) !!}

              </div>
              </div>


               <div class="col-md-4">
                 <div class="form-group">

                  {!!Form::label('displayemail', 'Display Email') !!}
        

                 {!!     Form::text('displayemail', null,  ['class' => 'form-control', 'placeholder' => 'Display Email']) !!}

                 </div>
               </div>

                  <div class="col-md-4">
                 <div class="form-group">

                  {!!Form::label('sendemail', 'Send Email') !!}
        

                 {!!     Form::text('sendemail', null,  ['class' => 'form-control', 'placeholder' => 'Send Mobile']) !!}

                 </div>
               </div>

              </div>


               <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">


                 {!!    Form::label('reveiveon', 'Receive On')      !!}
        

                 {!!     Form::text('reveiveon', null,  ['class' => 'form-control', 'placeholder' => 'Receive On']) !!}
                 </div>
                 </div>


                 <div class="col-md-4">
                 <div class="form-group">


                  {!!Form::label('phone', 'Phone') !!}
        

                 {!!     Form::text('phone', null,  ['class' => 'form-control', 'placeholder' => 'Phone']) !!}
                 </div>
                 </div>

                
                  <div class="col-md-4">
                 <div class="form-group">


                  {!!Form::label('metatitle', 'Meta Tag Title') !!}
        

                 {!!     Form::text('metatitle', null,  ['class' => 'form-control', 'placeholder' => 'Meta Tag Title']) !!}
                 </div>
                 </div>


              </div>

                <div class="box-body">


                     <div class="col-md-4">
                 <div class="form-group">


                  {!!Form::label('metadesc', 'Meta Tag Description') !!}
        

                 {!!     Form::text('metadesc', null,  ['class' => 'form-control', 'placeholder' => 'Meta Tag Description']) !!}
                 </div>
                 </div>

	               <div class="col-md-4">
                 <div class="form-group">


                 {!!    Form::label('metakeywords', 'Meta Tag Keywords')      !!}
        

                 {!!     Form::text('metakeywords', null,  ['class' => 'form-control', 'placeholder' => 'Meta Tag Keywords']) !!}
                 </div>
                 </div>


                 <div class="col-md-4">
                 <div class="form-group">


                  {!!Form::label('copyright', 'Copyright') !!}
        

                 {!!     Form::text('copyright', null,  ['class' => 'form-control', 'placeholder' => 'Copyright']) !!}
                 </div>
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

     <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
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
  </div>


          <div class="box box-primary">
            <div class="box-header with-border">
            <br><br>
              <h3 class="box-title" style="padding-left: 10px">Social Settings</h3>
            </div>
            <br>

         
            <!-- form start -->
      
          



              <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">
    
          {!!Form::label('facebook', 'Facebook') !!}
        

          {!!     Form::text('facebook', null,  ['class' => 'form-control', 'placeholder' => 'Facebook URL']) !!}

              </div>
              </div>



                

              </div>

               <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">


          {!!Form::label('google', 'Google Plus') !!}
        

          {!!     Form::text('google', null,  ['class' => 'form-control', 'placeholder' => 'Google Plus URL']) !!}

                 </div>
                 </div>

                 </div>


               <div class="box-body">
               <div class="col-md-4">
                 <div class="form-group">


          {!!Form::label('youtube', 'YouTube') !!}
        

          {!!     Form::text('youtube', null,  ['class' => 'form-control', 'placeholder' => 'Youtube URL']) !!}

                 </div>
                 </div>

                 </div>

         


     <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:-15px;">Back</button>
                <button type="submit" class="btn btn-success" style="margin-bottom: 65px">Save Settings</button>
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
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds
    });
</script>
@endpush
