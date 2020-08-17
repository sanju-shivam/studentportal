<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\frenchise;
use Auth;

class StudentController extends Controller
{
	public function student_view(){
    $students = Frenchise::where('email', Auth::user()->email)->first();
   return view ('student/profile_student',compact('students'));

   }
/*
    public function student_view($id){
          	$student = frenchise::find($id);
          	return view('student/profile_student',compact('student'));
          }
*/
          public function resultcheck(){
          	return view('student/result_data');
          }

}
