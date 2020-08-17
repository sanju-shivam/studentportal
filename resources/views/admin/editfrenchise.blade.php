@extends('layouts.master')
@section('content')


	              
                     <div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">
					<div class="box-header with-border">
					  <center><h1 class="badge badge-pill badge-primary" style="font-size: 25px;">Add Frenchise Data</h1></center>
					</div>

                    <form role="form" action="/update_frenchise" method="post">
                    	{{csrf_field()}}
                    	<input type="hidden" name="id" value="{{$objs->id}}">
					  <div class="box-body">
						<div class="form-group">
						  <label for="name">Frenchise Name</label>
						  <input type="text" name="Frenchise_name" value="{{$objs->Frenchise_name}}" class="form-control" id="name" placeholder="Enter name">
						</div>
							<div class="form-group">
						  <label for="name">Frenchise code</label>
						  <input type="text" name="Frenchise_code" value="{{$objs->frenchise_code}}" class="form-control" id="name" placeholder="Enter code">
						</div>
						<div class="form-group">
						  <label for="address">Address</label>
						  <input type="text" class="form-control" value="{{$objs->Frenchise_address}}" name="Frenchise_address" id="address" placeholder="Enter Frenchise Address">
						</div>
						<div class="form-group">
						  <label for="Name">Contact No.</label>
						  <input type="text" class="form-control" value="{{$objs->Frenchise_contactno}}" name="Frenchise_contactno" id="name" placeholder="Enter Contact">
						</div>
						<div class="form-group">
						  <label for="address">Email</label>
						  <input type="email" class="form-control" value="{{$objs->Frenchise_email}}" name="Frenchise_email" id="email" placeholder="Enter Frenchise EmailAddress">
						</div>
						<div class="form-group">
						  <label for="Name">password</label>
						  <input type="text" class="form-control" value="{{$objs->Frenchise_password}}" name="Frenchise_password" id="name" placeholder="Enter password">
						</div>
						<div class="form-group">
						  <label for="address">Contact Person Name</label>
						  <input type="text" class="form-control" name="Frenchise_contactperson_name" value="{{$objs->Frenchise_contactperson_name}}" id="address" placeholder="Enter Frenchise Contact person name">
						</div>
						<div class="form-group">
						  <label for="Name">Contact Person Number</label>
						  <input type="text" class="form-control" name="Frenchise_contactperson_number" value="{{$objs->Frenchise_contactperson_number}}" id="name" placeholder="Enter Contact person number">
						</div>
						<div class="form-group">
						  <label for="address">Account number</label>
						  <input type="text" class="form-control" value="{{$objs->Frenchise_accountno}}" name="Frenchise_accountno" id="email" placeholder="Enter Frenchise Account number">
						</div>
						<div class="form-group">
						  <label for="Name">IFSC Code</label>
						  <input type="text" class="form-control" value="{{$objs->Frenchise_IFSC_code}}" name="Frenchise_IFSC_code" id="name" placeholder="Enter IFSC Code">
						</div>
						<div class="form-group">
						  <label for="address">Account Holder Name</label>
						  <input type="text" class="form-control" name="Frenchise_accountholder_name" id="email" value="{{$objs->Frenchise_accountholder_name}}" placeholder="Enter Frenchise Account Holder Name">
						</div>
						<div class="form-group">
						  <label for="address">Bank Name</label>
						  <input type="text" class="form-control" name="Frenchise_bankname" value="{{$objs->Frenchise_bankname}}" id="email" placeholder="Enter Frenchise Bank Name">
						</div>
						

						
					  </div><!-- /.box-body -->

					  <div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				</div>
			</div>




@endsection