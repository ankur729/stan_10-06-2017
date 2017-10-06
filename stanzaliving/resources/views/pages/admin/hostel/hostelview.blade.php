
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
              <h3 class="box-title">View Hostel  </h3>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                  <button type="submit" class="btn btn-back " style="margin-top: 0px;float: right;">Back</button>
                </div>
            </div>

            <div class="Login-header with-border   after-border">
                <h3 class="login-details">Hostel Details</h3>
            </div>
          
            <!-- /.box-header -->
            <!-- form start -->
              <div class="col-md-12">
                <div class="box-body">
                 <div class="col-xs-4">
                 <div class="form-group">
                <img id="img_view" src=" {{ URL::to('images/hostel/'.$hostel->image)  }}" alt="your image"  style="width:100px; height:100px;" /><br>
                <label>Hostel Image</label>

          <div class="form_error"></div>
                 </div>
               </div>
            </div>
          </div>

        <div class="col-md-12">
             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('name', 'Hostel Name') !!}
  

    {!!     Form::text('name', $hostel->name,  ['class' => 'form-control', 'placeholder' => 'Hostel Name','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('contact', 'Hostel Contact') !!}
  

    {!!     Form::text('contact', $hostel->contact,  ['class' => 'form-control', 'placeholder' => 'Contact','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

              <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('warden', 'Warden Name') !!}
  

    {!!     Form::text('warden', $hostel->warden,  ['class' => 'form-control', 'placeholder' => 'Warden Name','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('contact_warden', 'Warden Contact') !!}
  

    {!!     Form::text('contact_warden', $hostel->contact_warden,  ['class' => 'form-control', 'placeholder' => 'Warden Contact','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('desc', 'Hostel Description') !!}
  

    {!!     Form::text('hoteldesc', $hostel->hoteldesc,  ['class' => 'form-control', 'placeholder' => 'Hostel Description','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
                 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('addr', 'Hostel Address') !!}
  

    {!!     Form::text('addr', $hostel->addr,  ['class' => 'form-control', 'placeholder' => 'Hostel Address', 'disabled'=>'disabled','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

         <div class="box-body after-add-more">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('room_sharing', 'Room Sharing Type') !!}
  
 @foreach($roomtypes as $room)
  @if(isset($k[$room->id]))
   <select class="form-control" name="roomtype[]" disabled="disabled">
       
       
      <option value="{{$room->id}}" >{{$room->name}}</option>
      
  </select>
@else
@endif
 @endforeach
          <div class="form_error"></div>
                 </div>
               </div>
                

                 <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('room_sharing_count', 'No. of Rooms') !!}
   @foreach($roomtypes as $room)
   @if(isset($k[$room->id]))
    {!!     Form::text('roomcount[]', $k[$room->id],  ['class' => 'form-control','disabled'=>'disabled']) !!}
    @else
    @endif
 @endforeach
          <div class="form_error"></div>
                 </div>
               </div>

              
<!--   <div class="col-md-4">
                 <div class="form-group">
                <br><br><br><br><br><br><br><br>.....
          <div class="form_error"></div>
                 </div>
               </div> -->
                 <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('googleurl', 'Google Url') !!}
  

    {!!     Form::text('googleurl', $hostel->googleurl,  ['class' => 'form-control', 'placeholder' => 'Google Url','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                 
                 <div class="clearfix"></div> 
         </div>





                    <div class="box-body">
               <div class="col-xs-12">
                 <div class="form-group">
                  {!!Form::label('desc_list', 'Hostel Description List') !!}
  

    {!!     Form::textarea('hoteldesclist', $hostel->hoteldesclist,  ['class' => 'form-control', 'placeholder' => 'Hostel Description List','disabled'=>'disabled']) !!}

          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                      <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('h_city', 'City') !!}
 <!--   <select class="form-control" name="h_city" id="cities">
      
                   </select> -->
   
 {!!     Form::select('h_city', array(''=>$city->name), null,  ['class' => 'form-control','id'=>'cities','required' => 'required','disabled'=>'disabled']) !!}
  
          <div class="form_error"></div>
                 </div>
               </div>
         </div>

             <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('h_state', 'State') !!}
  
 <!--  <select class="form-control" name="h_state" id="state">

                   </select> -->
                    {!!     Form::select('h_state', array(''=>$state->name) , null,['class' => 'form-control', 'id'=>'state','disabled'=>'disabled']) !!}
  
          <div class="form_error"></div>
                 </div>
               </div>
         </div>

                   <div class="box-body">
               <div class="col-xs-4">
                 <div class="form-group">
                  {!!Form::label('h_country', 'Country') !!}
  
 <select class="form-control nation" name="h_nationality" disabled="disableds">
       <option value="">{{$country->name}}</option>
      
  </select>
  

          <div class="form_error"></div>
                 </div>
               </div>
         </div>
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

   {!!Form::label('facility', 'Select Hostel Facility ') !!}  <br>

    <select name="facility[]" disabled="disabled" multiple="multiple" style="height: 200px;width:1140px;margin-left: 12px;">



    @foreach($categories as  $category)

          <optgroup label="{{$category->name}}" disabled="disabled">
   

     
      
        @foreach($category->facility as $pkey=>$facility)
    
       <?php $is_selected="" ?>
             @if(in_array($facility->id,$kill))
           <?php
            $is_selected="selected";
            ?>
         @endif 

           <option value="{{$facility->id}}"  <?php echo $is_selected; ?>>{{$facility->name}}</option>

        @endforeach
  




  </optgroup>

  @endforeach
</select>



          <div class="form_error"></div>
                 </div>
               </div>
            </div>

            <!-- <div class="col-md-12">
                 <button type="submit" class="btn btn-success " style="margin-bottom:65px;">Add New Student</button>
              </div> -->
  <div class="clearfix"></div>

       


     

              <!-- /.box-body -->
          <div class="box-footer">
              <div class="col-md-12">
                <!--<button type="clear" class="btn btn-default">Cancel</button>-->
                  <button type="submit" class="btn btn-back " style="margin-bottom:65px;margin-left:11px;">Back</button>
                 <!--  <button type="submit" class="btn btn-success " style="margin-bottom:65px;">Add New Student</button> -->
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




@endsection


@push('scripts')
   
  



@endpush


