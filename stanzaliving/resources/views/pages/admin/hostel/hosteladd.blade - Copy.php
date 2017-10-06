
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
              <h3 class="box-title">Add New Hostel   </h3>
            </div>

            <div class="hostel-header with-border">
              <h3 class="hostel-title">Hostel Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

{!! Form::open(['url' => 'admin/hostel/save','method' => 'post','files'=>true]) !!}




          
             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('name', 'Hostel Name') !!}
  

    {!!     Form::text('name', null,  ['class' => 'form-control', 'placeholder' => 'Hostel Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>


             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('contact', 'Hostel Contact') !!}
  

    {!!     Form::text('contact', null,  ['class' => 'form-control', 'placeholder' => 'Contact No.', 'required' => 'required'])      !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('desc', 'Short Description') !!}
  

    {!!     Form::text('hoteldesc', null,  ['class' => 'form-control', 'placeholder' => 'Short Description']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

           <div class="box-body">
               <div class="col-md-12">
                 <div class="form-group">
                  {!!Form::label('desc_list', 'Main Description') !!}
  

    {!!     Form::textarea('hoteldesclist', null,  ['class' => 'form-control', 'placeholder' => 'Main Description']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

       <div class="box-body">
               <div class="col-md-12">
                 <div class="form-group">
                  {!!Form::label('googleurl', 'Google Url') !!}
  

    {!!     Form::text('googleurl', null,  ['class' => 'form-control', 'placeholder' => 'Google Url']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                     <div class="hostel-header with-border">
              <h3 class="hostel-title">Hostel Address</h3>
            </div>

                 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('addr', 'Hostel Address') !!}
  

    {!!     Form::text('addr', null,  ['class' => 'form-control', 'placeholder' => 'Street Address', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                   <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!   Form::label('h_nationality', 'Country')    !!}
                <select class="form-control nation" name="h_Country">
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
                  {!!Form::label('h_state', 'State') !!}
                   <select class="form-control" name="h_state" id="state">

                   </select>
   <!--  {!!     Form::select('s_state',  array('0' => 'Delhi', '1' => 'Hyderabad'), null,['class' => 'form-control', 'placeholder' => 'State']) !!}
 -->
          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('h_city', 'City') !!}
  
     <select class="form-control" name="h_city" id="cities">

                   </select>
   

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

          <div class="box-body">
                 <div class="col-xs-8">
                 <div class="form-group">
                 <img id="img_view" src=" {{ URL::to('images/blank_user.png')  }}" alt="your image"  style="width:100px;height:100px" />
                  {!!Form::label('image', 'Add Hostel Image ') !!}
                    {!!       Form::file('image',array('id' => 'imgInp')) !!}


          <div class="form_error"></div>
                 </div>
               </div>
            </div>



              <div class="hostel-header with-border">
              <h3 class="hostel-title">Hostel Features</h3>
            </div>

                <div class="box-body">
                 <div class="col-xs-12">
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
  

    <select name="facility[]"  multiple="multiple" style="height: 100px;width:100%;float:left;margin-left: 30px;">

    @foreach($categories as  $category)

  <optgroup label="{{$category->name}}">
   

     
      
        @foreach($category->facility as $facility)
      <option value="{{$facility->id}}">{{$facility->name}}</option>

        @endforeach
 
  </optgroup>

  @endforeach
</select>



          <div class="form_error"></div>
                 </div>
               </div>
            </div>
  <div class="clearfix"></div>


                   <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('room_sharing_count', 'No. of Rooms') !!}
  

    {!!     Form::text('roomcount[]', null,  ['class' => 'form-control', 'placeholder' => 'No. of Rooms']) !!}

          <div class="form_error"></div>
                 </div>
               </div>

                <div class="box-body after-add-more">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('room_sharing', 'Room Sharing Type') !!}
  

   <select class="form-control" name="roomtype[]">
   <option value="">--Select Room Type--</option>
    @foreach($roomtypes as $room)
  <option value="{{$room->id}}">{{$room->name}}</option>
    @endforeach
</select>

          <div class="form_error"></div>
                 </div>
               </div>


                  <div class="col-md-4">
                 <div class="form-group change  Features-btn">
    
          <a class="btn btn-warning add-more">+ Add More</a>
          <div class="form_error"></div>
                 </div>
               </div>
                 <div class="clearfix"></div> 
         </div>

         <div class="hostel-header with-border">
              <h3 class="hostel-title">Warden Details</h3>
            </div>


         <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('warden', 'Warden Name') !!}
  

    {!!     Form::text('warden', null,  ['class' => 'form-control', 'placeholder' => 'Warden Name', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



         <div class="box-body">
               <div class="col-xs-6">
                 <div class="form-group">
                  {!!Form::label('contact_warden', 'Warden Contact') !!}
  

    {!!     Form::text('contact_warden', null,  ['class' => 'form-control', 'placeholder' => 'Warden Contact', 'required' => 'required']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>



         



              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-xs-4">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-success" style="margin-bottom:65px;">Add New Hostel</button>
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
$(document).ready(function(){
  var c_id=$('.nation').val();
  
  $.ajax({
    type:'GET',
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
    url:'findcities',
    data:{s_id:s_id},
     
    beforeSend:function(){
 
    },
    success:function(data){
 
    $('#cities').html(data);


    }
});
});


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
      
    $(html).find(".change").html("<label for=''>&nbsp;</label><br/><a class='btn btn-danger remove'>-Remove</a>");
      
      
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
  
$('#name').change(function(){

   if (! $(this).val().match('^[a-zA-Z0-9- ]{3,16}$') ) {
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
$('#warden').change(function(){

   if (! $(this).val().match('^[a-zA-Z ]{3,16}$') ) {
          alert("Do not add special chars");
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


$('#contact').change(function(){

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
   $('#contact_warden').change(function(){

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

$('#addr').change(function(){

   var add=$(this).val();

    if (! add.match('^[a-zA-Z\,\. ]{2,30}$') ) {
          alert("Use only - , and spaces. Max:30.");
          $(this).val('');
          $(this).focus();
          return false;
      } 
    

});






</script>



@endpush


