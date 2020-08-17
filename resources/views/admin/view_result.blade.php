@extends('layouts/master')
@section('content')
 
          
            <div class="col-xs-12">
             <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  @if(session('message'))
                  <p class="alert alert-info">
                    {{session('message')}}
                  </p>
                  @endif
                  <table id="example1" class="table table-bordered table-striped">
                   <thead>
                                  <tr>
                                    <th>s no</th>
                                    <th>Registration No</th>
                                    <th>DOB</th>
                                    <th>Image</th>
                                    <th colspan="2"><center>Action</center></th>
                                    

                                  </tr>
                                </thead>
                   <tbody>
                  <?php $i=1;?>
                  @foreach($results as $result)
                   <tr>
                    <td>{{$i++}}</td>
                                      
                    <td>{{$result->registration_no}}</td>
                    <td>{{$result->dob}}</td>
                    <td>  @php
                    if(!empty($result->image)){
                    @endphp
                    <img src="{{url('upload/'.$result->image)}}" width="50" height="50">
                    @php }
                    else{
                    @endphp
                    <h3>No Image Found</h3>
                    @php}
                    @endphp</td>
                    <td>
                     <center> <a href="" class="btn btn-danger">Pdf</a></center>
                    </td>
                   <td><center><a href="{{url('result/'.$result->id.'/edit')}}" class="btn btn-info">Edit</a></center>
                      
                    
                    </td>
                   
                   
                   </tr>
                   @endforeach
      </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
      @endsection