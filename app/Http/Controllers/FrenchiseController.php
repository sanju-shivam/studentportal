<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\frenchise;
use App\User;
use App\Fee;
use DB;
use Auth;

class FrenchiseController extends Controller
{
   public function add_students(){
      return view('frenchise/addstudent');

   }
   public function store(Request $request){
   //	dd($request->all()); 

    $data = Validator::make($request->all(),[

      "name" => "required",
      "father_name" => "required",
      "dob" => "required",
      "college" => "required",
      "course" => "required",
      
      "mobile" => "required",
      "email" => "required",
      "course_fees" => "required",
      "submitted_fees" => "required",
      "registration_date" => "required",
      "Frenchise_name" => "required",




    ])->validate();

   $file = $request->file('image');
   $filename = 'image' . time().'.'.$request->image->extension();
   $file->move("upload/",$filename);
   

//dd($file);
   	$student = new Frenchise;
   	$student->name = $request->name;
   	$student->father_name = $request->father_name;
   	$student->dob = $request->dob;
    $student->college = $request->college;
   	$student->course = $request->course;
   	$student->picture = $filename;
   	$student->mobile = $request->mobile;
   	$student->email = $request->email;
   // $student->Frenchise_name = $request->Frenchise_name;

   	$student->course_fees = $request->course_fees;
    	$student->submitted_fees = $request->submitted_fees;
	   	$student->registration_date = $request->registration_date;
   $student->Frenchise_name =$request->Frenchise_name;
   $save=$student->save();

   if($save)
  {
     $num_padded = sprintf('%04s',$student->id);

     DB::table('frenchises')
     ->where('id',$student->id)
     ->update(['regno' => "PN2019".$num_padded]);


   //	$student->save();



   	$student = new User;
  $student->name =$request->name;
  $student->email =$request->email;
  $student->password = bcrypt($request->mobile);
  $student->type =2;
  $student->save();

  
     $student = new Fee;
     $student->regno ="PN2019".$num_padded;
     $student->college = $request->college;
     $student->submitted_fees =$request->submitted_fees;
     $student->payment_remark =$request->payment_remark;
     $student->payment_method =$request->payment_method;
     $student->Frenchise_name=$request->Frenchise_name;
    


     $student->save();

     session()->flash('message','students data enter successfully');

     return back()->with('success');
  }


   }
   public function show($id){
    $forms = Frenchise::where('Frenchise_name', Auth::user()->name)->orderby('id','desc')->paginate(7);
      return view ('frenchise/viewstudent',compact('forms'));

   }
   public function edit($id){
    $student_edit = Frenchise::find($id);
    return view('frenchise/editstudent',compact('student_edit'));
   }
         public function update(Request $request){
           $student_edit= Frenchise::find($request->id);

      $file = $request->file('image');
      $filename = 'image' . time().'.'.$request->image->extension();
      $file->move("upload/",$filename);
  



           
          $student_edit->name = $request->name;
          $student->college = $request->college;
          $student_edit->father_name = $request->father_name;
          $student_edit->dob = $request->dob;
          $student_edit->course = $request->course;
          $student_edit->picture = $filename;
          $student_edit->mobile = $request->mobile;
          $student_edit->email = $request->email;
          $student_edit->course_fees = $request->course_fees;
            $student_edit->submitted_fees = $request->submitted_fees;
            $student_edit->registration_date = $request->registration_date;
            $updated = $student_edit->save();
      if($updated){
        return redirect('viewstudent/{id}/show')->with('message','congrats  student updated');
      }

   }
        public function view($id){

             $students = Frenchise::find($id);
           return view('frenchise/view',compact('students'));
       }

       
   

}
