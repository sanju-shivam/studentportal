@extends('layouts/master')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <center><h3 class="box-title" style="color:red"><b> Student Profile</b></h3></center>
                </div><!-- /.box-header -->
                <div class="box-body ">
                  <table class="table table-bordered">

                    <!-- image -->
                        <center>  <h1>
                            @php if(!empty($students->picture))
                            {
                              @endphp
              <img src="{{ url('../../upload/'.$students->picture) }}" style="height: 150px; width: 150px; border-radius: 50%;">
          @php }else{ @endphp
          
            <p>No Image Found</p>
          @php } @endphp 
                          </h1>
</center>


                    <tr>
                      
                      <th>Task</th>
                      <th>Details</th>
                      
                    </tr>
                    <tr>
                     
                      <td>Registration No</td>
                      <td>{{$students->regno}}</td>
                    </tr>
                    <tr>
                      
                      <td>Name</td>
                      <td>{{$students->name}}</td>
                    </tr>
                    <tr>
                      
                      <td>father Name</td>
                      <td>{{$students->father_name}}</td>
                    </tr>
                    <tr>
                      
                      <td>Dob</td>
                      <td>{{$students->dob}}</td>
                    </tr>
                    <tr>
                      <td>College</td>
                      <td>{{$students->college}}</td>
                    </tr>
                    <tr>
                      
                      <td>Course</td>
                      <td>{{$students->course}}</td>
                    </tr>
                    <tr>
                      
                      <td>Mobile</td>
                      <td>{{$students->mobile}}</td>
                    </tr>
                    <tr>
                    
                      <td>Email</td>
                      <td>{{$students->email}}</td>
                    </tr>
                    <tr>
                      
                      <td>Course Fee</td>
                      <td>{{$students->course_fees}}</td>
                    </tr>
                    <tr>
                      
                      <td>Reamaining Fee</td>
                      <td>{{$students->course_fees - $students->submitted_fees}}</td>
                    </tr>
                    <tr>
                      
                      <td>Registration Date</td>
                      <td>{{$students->registration_date}}</td>
                    </tr>
                     <tr>
                      
                      <td>Frenchise Name</td>
                      <td>{{$students->Frenchise_name}}</td>
                    </tr>

                   
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

              </div>

@endsection