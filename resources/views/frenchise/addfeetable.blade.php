@extends('layouts.master')
@section('content')


	              
                    
<div class="col-xs-12">
             <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> All Students Fee Details </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @if(session('message'))
                  <p class="alert alert-info">{{session('message')}}</p>
                  @endif
                  <table id="example1" class="table table-bordered table-striped">
                   <thead>
                                  <tr>
                                    <th>REG NO</th>
                                    <th>Name</th>
                                    <th>Course Name</th>
                                    <th>Course Fee</th>
                                    <th>Remaining Fees</th>
                                                                    
                                    <th><center>Action</center></th>
                                   

                                  </tr>
                                </thead>
                   <tbody>
                      
                      @foreach($forms as $form)
                   <tr>
                    
                    <td>{{$form->regno}}</td>
                    <td>{{$form->name}}</td>
                    <td>{{$form->course}}</td>
                    <td>{{$form->course_fees}}</td>
                    <td>{{$form->course_fees - $form->submitted_fees}}</td>
                    <td><center><a href="{{url('/addfee/'.$form->id)}}" class="btn btn-info"> Add Fees</a></center></td>
                   
                    
                   
                   </tr>
                   @endforeach
      </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>



@endsection