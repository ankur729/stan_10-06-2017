@extends('layouts.master.admin.index')


@section('content')

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
   <!-- Main content -->
    <section class="content">
     <div class="row">
        <div class="col-xs-12 ">
           <div class="box">
             <div class="box-header">
               <div class="form">
                 <div class="col-xs-3">
                  <div class="form-group">
                    <label> &nbsp;</label><Br>

                    <!--  <a href=" {{ url('admin/menu/add') }}" class="btn btn-success pull-left" style="margin:15px;display: block;float:right; ">Add Food Item</a> -->
                   </div>
                 </div>
               </div>
             </div>
           </div>
        </div>
     </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
         
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                  
                <tr>
                  <th>S. No.</th>
                  <th>Student Name</th>
                  <th>Rating</th>
                  <th>Remarks</th>
                  <th>Category</th>
                  <th>Date</th>
                 </tr>


                </thead>
                <tbody>
          
          @foreach($feedbacks as $key=>$feedback)
       
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$stud[$feedback->student_id]}}</td>
                    <td>{{$rating[$feedback->rating]}}</td>
                    <td>{{$feedback->remarks}}</td>
                    <td>{{$myarr[$feedback->category]}}</td>
                    <td>{{$feedback->date}}</td>
                  </tr>

             @endforeach
                        </tbody>
            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Want To Edit Role</h4>
        </div>
       <!--  <div class="modal-body">
          <p>This is a small modal.</p>
        </div> -->
        <div class="modal-footer text-center">
       <a href="url('admin/access/edit')">   <button type="button" class="btn btn-warning" data-dismiss="modal">Yes</button> </a>
           <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
</div>

    </section>
    <!-- /.content -->

@endsection

@push('scripts')
<script> 


$(document).ready(function(){
        setTimeout(function() {
          $('#successMessage').fadeOut('slow');
         // $('#errorMessage').fadeOut('slow');
        }, 4000); // <-- time in milliseconds
    });
</script>
@endpush