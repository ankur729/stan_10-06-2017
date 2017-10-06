
@extends('layouts.master.admin.index')

@section('styles')

<link href="text/css" src="../../../public/css/jquery.multiselect.css" rel="stylesheet" type="text/css">

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
              <h3 class="box-title">Edit Hostel   </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::model($hostel,['url' => 'admin/hostel/udpate','method' => 'put','files'=>true]) !!}


{!! Form::hidden('hostel_id', $hostel->id) !!}

          
             <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('name', 'Facility Name') !!}
  

    {!!     Form::text('name', null,  ['class' => 'form-control', 'placeholder' => 'Facility Name']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('desc', 'Hotel Description') !!}
  

    {!!     Form::text('hoteldesc', null,  ['class' => 'form-control', 'placeholder' => 'Hotel Description']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('desc_list', 'Hotel Description List') !!}
  

    {!!     Form::textarea('hoteldesclist', null,  ['class' => 'form-control', 'placeholder' => 'Hotel Description List']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                 <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('addr', 'Hotel Address') !!}
  

    {!!     Form::text('addr', null,  ['class' => 'form-control', 'placeholder' => 'Hotel Address']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
                 <div class="col-md-8">
                 <div class="form-group">
                {!!Form::label('image', 'Add Hostel Image ') !!}
                    {!!       Form::file('image',array('id' => 'imgInp')) !!}
                <img id="img_view" src=" {{ URL::to('images/blank_user.png')  }}" alt="your image"  style="width:100px;height:100px" />


          <div class="form_error"></div>
                 </div>
               </div>
            </div>

                  <div class="box-body">
                 <div class="col-md-8">
                 <div class="form-group">
<!-- <select name="users_list" id="users_list" multiple="multiple" size="15">
    <optgroup label="Category 1">

    <option value="a1">Options 1</option>

    <option value="a2">Options 2</option>

    <option value="a3">Options 3</option>


    </optgroup>

    <optgroup label="Category 2">

    <option value="b1">Options 1</option>

    <option value="b2">Options 2</option>

    <option value="b3">Options 3</option>

    </optgroup>

  </select> -->

   {!!Form::label('facility', 'Select Hostel Facility ') !!}
  
   {{$hostel->facility}}
    <select name="facility[]"  multiple="multiple" style="height: 100px;width: 600px;margin-left: 30px;">



    @foreach($categories as  $category)

          <optgroup label="{{$category->name}}">
   

     
      
        @foreach($category->facility as $pkey=>$facility)
    
          
         


           <option value="{{$facility->id}}" >{{$facility->name}}</option>

        @endforeach
  




  </optgroup>

  @endforeach
</select>



          <div class="form_error"></div>
                 </div>
               </div>
            </div>
  <div class="clearfix"></div>

          <div class="box-body after-add-more">
               <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('room_sharing', 'Room Sharing Type') !!}
  

   <select class="form-control" name="roomtype[]">
       <option value="">--Select Room Type--</option>
        @foreach($roomtypes as $room)
      <option value="{{$room->id}}" >{{$room->name}}</option>
        @endforeach
  </select>

          <div class="form_error"></div>
                 </div>
               </div>
                 <div class="col-md-4">
                 <div class="form-group">
                  {!!Form::label('room_sharing_count', 'No. of Rooms') !!}
  

    {!!     Form::text('roomcount[]', null,  ['class' => 'form-control', 'placeholder' => 'No. of Rooms']) !!}

          <div class="form_error"></div>
                 </div>
               </div>

                  <div class="col-md-4">
                 <div class="form-group change">
    
          <a class="btn btn-warning add-more">+ Add More</a>
          <div class="form_error"></div>
                 </div>
               </div>
                 <div class="clearfix"></div> 
         </div>


       <div class="box-body">
               <div class="col-md-8">
                 <div class="form-group">
                  {!!Form::label('googleurl', 'Google Url') !!}
  

    {!!     Form::text('googleurl', null,  ['class' => 'form-control', 'placeholder' => 'Google Url']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success pull-right" style="margin-bottom:65px;">Add New Hostel</button>
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



function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_view').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
$(document).ready(function() {

$('#demo').multiselect();

});


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
          $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds



 $(function(){

$users_list = $('#users_list');

$users_list.multiselect();

});
  

  $(document).ready(function() {
    $("body").on("click",".add-more",function(){ 
        var html = $(".after-add-more").first().clone();
      
        //  $(html).find(".change").prepend("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
      
          $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>- Remove</a>");
      
      
        $(".after-add-more").last().after(html);
      
     
       
    });

    $("body").on("click",".remove",function(){ 
        $(this).parents(".after-add-more").remove();
    });
});  


    //      $.get("http://localhost/stanza/public/admin/test", function(data, status){
    //     alert("Data: " + data + "\nStatus: " + status);
    // });
});
  


</script>



@endpush


