@extends('layouts.master')
@section('content')


	              
                     <div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header with-border">
					  <center><h1 class="badge badge-pill badge-primary" style="font-size: 25px;">Add Student Fee</h1></center>
					</div>
          <center>
					<h3>Student's Details</h3>
          </center>
                        @php if(!empty($form->picture)){@endphp
                        
              <img src="{{ url('../../upload/'.$form->picture) }}" style="height: 90px; width: 90px; border-radius: 100%; margin-left: 10px;">
          @php }else{ @endphp
          
            <p>No Image Found</p>
          @php } @endphp


                    <form role="form" action="/store" method="post" enctype="multipart/form-data">
                    	{{csrf_field()}}
                    	@if(session('message'))
                    	<p class="alert alert-info">
                    		{{session('message')}}
                    	</p>
                    	@endif
                    	
					  <div class="box-body">
					  	<table class="table table-bordered">

                    <!-- image -->
                        

                    <tr>
                      
                      <th>Task</th>
                      <th>Details</th>
                      
                    </tr>
                    <tr>
                     
                      <td>Registration No :</td>
                      <td>{{$form->regno}}</td>
                    </tr>
                    <tr>
                      <td>College Name :</td>
                      <td>{{$form->college}}</td>
                    </tr>
                    <tr>
                      
                      <td>Student's Name :</td>
                      <td>{{$form->name}}</td>
                    </tr>
                    <tr>
                      
                      <td>Course Fees :</td>
                      <td>{{$form->course_fees}}</td>
                    </tr>
                    	<tr>
                      <td>Remaining Fees :</td>
                      <td>{{$form->course_fees - $form->submitted_fees}}</td>
                    </tr>
                    <tr>
                  </table>
						<br>
						<input type="hidden" name="regno" value="{{$form->regno}}">
						<input type="hidden" name="Frenchise_name" value="{{$form->Frenchise_name}}">
            <input type="hidden" name="college" value="{{$form->college}}">
						<div class="form-group">
						  <label for="submitted_fees">Add Fees</label>
						  <input type="text" name="submitted_fees" class="form-control" id="submitted_fees" placeholder="Enter Fees Here">
						</div>

						<div class="form-group">
						  <label for="payment_remark"> Remark</label>
						  <input type="text" name="payment_remark" class="form-control" id="payment_remark" placeholder="Enter Payment Remark">
						</div>
						<div class="form-group">
						  <label for="address">Payment Method </label>
						  <select class="form-control" name="payment_method">
						  	<option value="Paytm">Paytm</option>
						  	<option value="cash">cash</option>
						  </select>
						</div>
																																												

						
					  </div><!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				</div>
			</div>




@endsection