@extends('layouts/master')
@section('content')
 
          
            <div class="col-xs-12">
             <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">View All Frenchise Data</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @if(session('message'))
                  <p class="alert alert-info">{{session('message')}}</p>
                  @endif
                  <table id="example1" class="table table-bordered table-striped">
                   <thead>
                                  <tr>
                                    <th>S no.</th>
                                    <th>Franchise name</th>
                                    <th>Frnchise code</th>
                                    <th>Address</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th colspan="2"><center>Action</center></th>
                                  </tr>
                                </thead>
                   <tbody>
                      <?php $i=1;?>
                      @foreach($objs as $obj)
                   <tr>
                    <td>{{$i++}}</td>
                    <td>{{$obj->Frenchise_name}}</td>
                    <td>{{$obj->frenchise_code}}</td>
                    <td>{{$obj->Frenchise_address}}</td>
                    <td>{{$obj->Frenchise_contactno}}</td>
                    <td>{{$obj->Frenchise_email}}</td>
                    <td>{{$obj->Frenchise_password}}</td>
                    <td>
                      <button class="btn btn-info"><a href="{{url('frenchise/' .$obj->id.'/edit/')}}" style="color: white; font-weight: bold">Edit</a></button>&nbsp;
                    </td>

                    <td> <button class="btn btn-warning"> <a href="{{url('frenchise/' .$obj->id.'/viewall/')}}"  style="color: white; font-weight: bold">view</a></button>
                    </td>
                  </tr>
                   @endforeach
                  </tbody>
                </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
      @endsection