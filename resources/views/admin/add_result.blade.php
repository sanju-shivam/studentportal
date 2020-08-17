@extends('layouts.master')
@section('content')


	              
                     <div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header with-border">
					  <center><h1 class="badge badge-pill badge-primary" style="font-size: 25px;">Add Frenchise Data</h1></center>
					</div>

                    <form role="form" action="result" method="post" enctype="multipart/form-data">
                    	{{csrf_field()}}
                    	@if(session('message'))
                    	<p class="alert alert-info">
                    		{{session('message')}}
                    	</p>
                    	@endif
                    	
					  <div class="box-body">
						<div class="form-group">
						  <label for="Name">Registration No.</label>
						  <input type="text" name="registration_no"  class="form-control" id="name" placeholder="Enter name">
						</div>
						<div class="form-group">
						  <label for="dob">DOB</label>
						  <input type="date" name="dob"  class="form-control" id="address" placeholder="Enter Dob">
						</div>
						<div class="form-group">
						  <label for="exampleInputFile">File input</label>
						  <input type="file" name="image"  id="exampleInputFile">
						  
						</div>
						

						
					  </div><!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				</div>
			</div>




@endsection