@extends('layouts.master')
@section('content')


<div class="col-xs-12">
             <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> All Students</h3>
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
                                    <th>Image</th>
                                                                    
                                    <th><center>Action</center></th>
                                   

                                  </tr>
                                </thead>
                   <tbody>
                      <?php $i=1;?>
                      @foreach($forms as $form)
                   <tr>
                    
                    <td>{{$form->regno}}</td>
                    <td>{{$form->name}}</td>
                    <td>{{$form->course}}</td>
                    <td>
                        @php if(!empty($form->picture)){@endphp
                        <center>
              <img src="{{ url('../../upload/'.$form->picture) }}" style="height: 55px; width: 55px; border-radius: 50%;">
          @php }else{ @endphp
          
            <p>No Image Found</p></center>
          @php } @endphp 
                  </td>
                    
                    <td>
                     <center> <button class="btn btn-info"><a href="{{url('student/' .$form->id.'/edit/')}}" style="color: white; font-weight: bold">Edit</a></button>&nbsp;
                     <button class="btn btn-warning"> <a href="{{url('student/' .$form->id. '/view/')}}" style="color: white; font-weight: bold">view</a></button></center>
                      
                    </td>
                    
                   
                   </tr>
                   @endforeach
      </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>




@endsection