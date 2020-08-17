@extends('layouts.master')
@section('content')

	              
                     <div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
				  	@if(session('message'))
                    	<p class="alert alert-success">{{session('message')}}</p>
                    	@endif
					<div class="box-header with-border">
					  <center><h1 class="badge badge-pill badge-primary" style="font-size: 25px;">Add Students</h1></center>
					  @if($errors->any())
			<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>
				{{$error}}
				</li>
				@endforeach
				@endif
			</ul>
		</div>
					</div>

                    <form role="form" action="addstudent" method="post" enctype="multipart/form-data">
                    	{{csrf_field()}}

                    	

					  <div class="box-body">
					  	<input type="hidden" name="Frenchise_name" value="{{Auth::user()->name}}">
						<div class="form-group">
						  <label for="name"> Name</label>
						  <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
						</div>

						<div class="form-group">
						  <label for="father_name">Father's Name</label>
						  <input type="text" name="father_name" class="form-control" id="name" placeholder="Enter Father name">
						</div>
						<div class="form-group">
						  <label for="address">DOB</label>
						  <input type="date" class="form-control" name="dob" id="address" placeholder="Enter Dob">
						</div>
						<div class="form-group">
						  <label for="college">College</label>
						  <input type="text" class="form-control" name="college" id="college" placeholder="Enter College">
						</div>
						<div class="form-group">
						  <label for="course">Course </label>
						  <select class="form-control" name="course">
						  	<option value="Web Designing">Web Designing</option>
						  	<option value="Web Development">Web Development</option>
						  	<option value="C">C</option>
						  	<option value="C++">C++</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="Picture">Picture</label>
						  <input type="file" class="form-control" name="image" id="">
						</div>
						<div class="form-group">
						  <label for="mobile">Mobile</label>
						  <input type="text" class="form-control" name="mobile" id="" placeholder="Enter mobile">
						</div>
						<div class="form-group">
						  <label for="email">Email</label>
						  <input type="email" class="form-control" name="email" id="" placeholder="Enter email">
						</div>
						<!-- <input type="hidden" name="Frenchise_name" value="{{Auth::user()->name}}"> -->
						<div class="form-group">
						  <label for="course_fees">Course Fees</label>
						  <input type="text" class="form-control" name="course_fees" id="" placeholder="Enter Course fee">
						</div>
						<div class="form-group">
						  <label for="submitted_fees">Submitted Fees</label>
						  <input type="text" class="form-control" name="submitted_fees" id="" placeholder="Enter submitted fees">
						</div>
						<div class="form-group">
						  <label for="payment_remark">Payment Remark</label>
						  <input type="text" class="form-control" name="payment_remark" id="" placeholder="Enter payment remark">
						</div>
						<div class="form-group">
						  <label for="payment_method">Payment Method </label>
						  <select class="form-control" name="payment_method">
						  	<option value="No Payment">No Payment</option>
						  	<option value="Paytm">Paytm</option>
						  	<option value="cash">Cash</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="registration_date">Registration Date</label>
						  <input type="date" type="time" class="form-control" name="registration_date" id="" placeholder="">
						</div>
						
						

						
					  </div><!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				</div>
			




@endsection