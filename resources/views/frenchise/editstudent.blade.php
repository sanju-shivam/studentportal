@extends('layouts.master')
@section('content')


	              
                     <div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header with-border">
					  <center><h1 class="badge badge-pill badge-primary" style="font-size: 25px;">Update Data</h1></center>
					</div>

                    <form role="form" action="/update_student" method="post" enctype="multipart/form-data">
                    	{{csrf_field()}}
                    	@if(session('message'))
                    	<p class="alert alert-success">{{session('message')}}</p>
                    	@endif
                    	<input type="hidden" name="id" value="{{$student_edit->id}}">

					  <div class="box-body">
						<div class="form-group">
						  <label for="name"> Name</label>
						  <input type="text" name="name" class="form-control" value="{{$student_edit->name}}" placeholder="Enter name">
						</div>

						<div class="form-group">
						  <label for="name">Father's Name</label>
						  <input type="text" name="father_name" class="form-control"  value="{{$student_edit->father_name}}"  placeholder="Enter Father name">
						</div>
						<div class="form-group">
						  <label for="address">DOB</label>
						  <input type="date" class="form-control" name="dob"  value="{{$student_edit->dob}}"  placeholder="Enter Dob">
						</div>
						<div class="form-group">
						  <label for="course">Course </label>
						  <select class="form-control" name="course" value="{{$student_edit->course}}">
						  	<option value="Web Designing">Web Designing</option>
						  	<option value="Web Development">Web Development</option>
						  	<option value="C">C</option>
						  	<option value="C++">C++</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="address">Picture</label>
						  <input type="file" class="form-control" name="image" id="">
						</div>
						<div class="form-group">
						  <label for="Name">Mobile</label>
						  <input type="text" class="form-control" name="mobile"  value="{{$student_edit->mobile}}"  placeholder="Enter mobile">
						</div>
						<div class="form-group">
						  <label for="address">Email</label>
						  <input type="email" class="form-control" name="email"  value="{{$student_edit->email}}" placeholder="Enter email">
						</div>
						<div class="form-group">
						  <label for="Name">Course Fees</label>
						  <input type="text" class="form-control" name="course_fees"  value="{{$student_edit->course_fees}}"  placeholder="Enter Course fee ">
						</div>
						<div class="form-group">
						  <label for="address">Submitted Fees</label>
						  <input type="text" class="form-control" name="submitted_fees" value="{{$student_edit->submitted_fees}}" placeholder="Enter submitted fees">
						</div>
						<div class="form-group">
						  <label for="Name">Payment Remark</label>
						  <input type="text" class="form-control" name="payment_remark" value="{{$student_edit->payment_remark}}" placeholder="Enter payment remark">
						</div>
						<div class="form-group">
						  <label for="address">Payment Method </label>
						  <select class="form-control" name="payment_method">
						  	<option value="payment">Payment</option>
						  	<option value="cash">cash</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="address">Registration Date</label>
						  <input type="date" type="time" class="form-control" name="registration_date" value="{{$student_edit->registration_date}}" placeholder="">
						</div>
						
						

						
					  </div><!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				</div>
			</div>



@endsection