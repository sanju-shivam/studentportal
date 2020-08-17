@extends('layouts/master')
@section('content')
 
          
            <div class="col-xs-12">
             <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <center><h3 class="box-title">All  Data</h3></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @if(session('message'))
                  <p class="alert alert-info">{{session('message')}}</p>
                  @endif
                  <table id="example1" class="table table-bordered table-striped">
                   <thead>
                  
                                  <tr>
                                    <th>S.No.</th>
                                    <th>Registration No.</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Course FEE</th>
                                    <th>Frenchise Name</th>
                                    <th>Image</th>
                                    <th>Mobile</th>
                                    <th>Submitted fees</th>
                                                                       

                                  </tr>
                                </thead>
                                 <tbody>
                                   <?php $i=1;?>
                                      @foreach($frenchises as $frenchise)
                            
                                 <tr>
                                 
                                  <td>{{$i++}}</td>
                                  <td>{{$frenchise->regno}}</td>
                                  <td>{{$frenchise->name}}</td>
                                  <td>{{$frenchise->course}}</td>
                                  <td>{{$frenchise->course_fees}}</td>
                                  <td>{{$frenchise->Frenchise_name}}</td>
                                  <td>
                                     @php
                    if(!empty($frenchise->picture)){
                    @endphp
                    <img src="{{url('upload/'.$frenchise->picture)}}" width="50" height="50">
                    @php }
                    else{
                    @endphp
                    <h3>No Image Found</h3>
                    @php}
                    @endphp
                                  </td>
                                  <td>{{$frenchise->mobile}}</td>
                                  <td>{{$frenchise->submitted_fees}}</td>
                                 
                                 
                                  
                                  
                                 
                                 </tr>
                                 
                                    </tbody>
                           @endforeach
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
      @endsection