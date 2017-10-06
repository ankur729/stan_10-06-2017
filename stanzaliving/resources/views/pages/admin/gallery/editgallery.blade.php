



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
              <h3 class="box-title" style="margin-bottom:45px;">Edit Gallery Data</h3>

            	    <table id="example1" class="table table-bordered table-striped">
                <thead>

                  
                <tr>
                  <th>S. No.</th>
                  <th>Image</th>
               
                  <th>Description</th>
                   <th>Sort Order</th>
                   <th>Save</th>
                   <th>Delete</th>
                </tr>


                </thead>
                <tbody>
		     	
		     	@foreach($images as $key=>$image)

		     	{!! Form::open(['url' => 'admin/gallery/images/update','method' => 'post']) !!}

		     	{!! Form::hidden('image_id', $image->id) !!}
		         <tr>
                    <td>{{$key+1}}</td>
 
				<td>
				  <img id="img_view" src=" {{ URL::to('images/gallery/'.$image->name)  }}" alt="your image"  style="width:100px;height:100px" />
				
					</td>

					<td>

					{!!     Form::textarea('desc', $image->desc,  ['class' => 'form-control', 'placeholder' => ' Short Description ' ,'size' => '30x3']) !!}

			<!-- 			<textarea name="comment" form="usrform" placeholder="Enter Short Description here..." value="">{{$image->desc}}</textarea> -->
					</td>

						<td>

						{!!     Form::text('sortorder', $image->sortorder,  ['class' => 'form-control', 'placeholder' => 'Sort Order']) !!}

						
					</td>
					<td>
						<button type="submit" class="btn  btn-primary">Save</button>
					</td>
          <td>
						<a href="{{ URL::to('admin/gallery/images/delete/'.$image->id)  }}" class="btn  btn-danger">Delete</a>
					</td>
                  </tr>
                 {!! Form::close() !!}
                @endforeach
				                </tbody>
             <!--    <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
			
       

<!-- {!! Form::open(['url' => 'admin/gallery/images/upload','method' => 'post','class' => 'dropzone']) !!}





            {!! Form::close() !!} -->

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

