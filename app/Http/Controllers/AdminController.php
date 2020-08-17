<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Admin;
use App\Frenchise;
use App\User;

class AdminController extends Controller
{
   public function add_frenchise(){
    
 return view('admin/add_frenchise');

   }

    public function store(Request $request){
      //dd($request->all());

      $data = Validator::make($request->all(),[

        "Frenchise_name"=>"required",
        "Frenchise_code"=>"required",
        "Frenchise_address"=>"required",
        "Frenchise_contactno"=>"required",
        "Frenchise_email"=>"required",
        "Frenchise_password"=>"required",
        "Frenchise_contactperson_name"=>"required",
        "Frenchise_contactperson_number"=>"required",
        "Frenchise_accountno"=>"required",
        "Frenchise_IFSC_code"=>"required",
        "Frenchise_accountholder_name"=>"required",
        "Frenchise_bankname"=>"required",



      ])->validate();




    	$obj =new Admin;
        $obj->Frenchise_name = $request->Frenchise_name;
        $obj->Frenchise_code = $request->Frenchise_code;
        $obj->Frenchise_address = $request->Frenchise_address;
        $obj->Frenchise_contactno = $request->Frenchise_contactno;
        $obj->Frenchise_email = $request->Frenchise_email;
        $obj->Frenchise_password = $request->Frenchise_password;
        $obj->Frenchise_contactperson_name = $request->Frenchise_contactperson_name;
        $obj->Frenchise_contactperson_number = $request->Frenchise_contactperson_number;
        $obj->Frenchise_accountno = $request->Frenchise_accountno;
        $obj->Frenchise_IFSC_code = $request->Frenchise_IFSC_code;
        $obj->Frenchise_accountholder_name = $request->Frenchise_accountholder_name;
        $obj->Frenchise_bankname = $request->Frenchise_bankname;
        $save = $obj->save();
        
        $obj = new User;
        $obj->name = $request->Frenchise_name;
        $obj->email = $request->Frenchise_code;
        $obj->password = bcrypt($request->Frenchise_password);
        $obj->type =0;
         $obj->save();
     if($save){
       return redirect('add_frenchise')->with('message','congrats added frenchice');

   }
}
          public function view_frenchise(){
          	$objs = Admin::orderby('id','desc')->get();
          	return view('admin/view_frenchise',compact('objs'));
          }

          public function edit($id){
          	$objs = Admin::find($id);
          	return view('admin/editfrenchise',compact('objs'));
          }

          public function viewall($id){
            $objs = Admin::find($id);
           return view('admin/viewall_frenchise',compact('objs'));
          }

          public function update(Request $request){

          

              $objs= Admin::find($request->id);
              $objs->Frenchise_name = $request->Frenchise_name;
              $objs->Frenchise_code = $request->Frenchise_code;
        $objs->Frenchise_address = $request->Frenchise_address;
        $objs->Frenchise_contactno = $request->Frenchise_contactno;
        $objs->Frenchise_email = $request->Frenchise_email;
        $objs->Frenchise_password = $request->Frenchise_password;
        $objs->Frenchise_contactperson_name = $request->Frenchise_contactperson_name;
        $objs->Frenchise_contactperson_number = $request->Frenchise_contactperson_number;
        $objs->Frenchise_accountno = $request->Frenchise_accountno;
        $objs->Frenchise_IFSC_code = $request->Frenchise_IFSC_code;
        $objs->Frenchise_accountholder_name = $request->Frenchise_accountholder_name;
        $objs->Frenchise_bankname = $request->Frenchise_bankname;
        $updated = $objs->save();
        if($updated){
	     return redirect('view_frenchise')->with('message','congrats  frenchice updated');
       }

          }
          public function all_students(Request $request){

            $frenchises = Frenchise::all();
            return view('admin/all_students',compact('frenchises'));
          }

         
}