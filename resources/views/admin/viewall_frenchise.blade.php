@extends('layouts/master')
@section('content')


<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Frenchise Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">S no.</th>
                      <th>Task</th>
                      <th>Details</th>
                      
                    </tr>
                    <tr>
                      <td>1.</td>
                      <td>Frenchise Name</td>
                      <td>{{$objs->Frenchise_name}}</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Frenchise Code</td>
                      <td>{{$objs->frenchise_code}}</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Address</td>
                      <td>{{$objs->Frenchise_address}}</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Contactno</td>
                      <td>{{$objs->Frenchise_contactno}}</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Email</td>
                      <td>{{$objs->Frenchise_email}}</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Password</td>
                      <td>{{$objs->Frenchise_password}}</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>Contact Person Name</td>
                      <td>{{$objs->Frenchise_contactperson_name}}</td>
                    </tr>
                    <tr>
                      <td>8.</td>
                      <td>Contact Person Number</td>
                      <td>{{$objs->Frenchise_contactperson_number}}</td>
                    </tr>
                    <tr>
                      <td>9.</td>
                      <td>Account No.</td>
                      <td>{{$objs->Frenchise_accountno}}</td>
                    </tr>
                    <tr>
                      <td>10.</td>
                      <td>IFSC Code</td>
                      <td>{{$objs->Frenchise_IFSC_code}}</td>
                    
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>Account Holder Name</td>
                        <td>{{$objs->Frenchise_accountholder_name}}</td>
                      
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>Bank Name</td>
                        <td>{{$objs->Frenchise_bankname}}</td>
                      
                    </tr>
                  </table>
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->

              </div>

 @endsection