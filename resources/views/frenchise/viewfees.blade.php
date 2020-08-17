@extends('layouts/master')
@section('content')
<div class="col-xs-12">
             <!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> All Students Fee Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @if(session('message'))
                  <p class="alert alert-info">{{session('message')}}</p>
                  @endif
                  <table id="example1" class="table table-bordered table-striped">
                   <thead>
                                  <tr>
                                    <th>REG NO</th>
                                    <th>Submitted Fees</th>
                                    <th>Method</th>
                                    <th>Remark</th>
                                    <th>Date</th>
                                   

                                  </tr>
                                </thead>
                   <tbody>
                      <?php $i=1;?>
                      @foreach($fees as $fee)
                   <tr>
                    
                    <td>{{$fee->regno}}</td>
                    <td>{{$fee->submitted_fees}}</td>
                    <td>{{$fee->payment_method}}</td>
                    <td>{{$fee->payment_remark}}</td>
                    <td>
                    	{{$fee->created_at}}
                    </td>
                    
                    
                    
                   
                   </tr>
                   @endforeach
      </tbody>
                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
@endsection