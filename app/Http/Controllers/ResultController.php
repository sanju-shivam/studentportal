<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Fee;
use DB;

class ResultController extends Controller
{
   public function add_result(){
   	return view('admin/add_result');
   }

   public function store(Request $request)
   {
   // dd($request->all());
   	  $file = $request->file('image');
     dd($file);
   $filename = 'image' . time().'.'.$request->image->extension();
   $file->move("upload/",$filename);
        $obj =new Result;
        $obj->registration_no = $request->registration_no;
        $obj->dob = $request->dob;
        $obj->image = $filename;
        $save = $obj->save();
         if($save){
	     return redirect('add_result')->with('message','congrats Results Added');
       }

   }
    public function view_result(){
    	$results = Result::orderby('id','desc')->get();
    	return view('admin/view_result',compact('results'));
    }

    public function edit($id){
    	$results = Result::find($id);
    	return view('admin/editresult',compact('results'));
    }

		public function update(Request $request)
		{
			$results = Result::find($request->id); 
           $file = $request->file('image');
     //dd($file);
   $filename = 'image' . time().'.'.$request->image->extension();
   $file->move("upload/",$filename);

        
       
        $results->registration_no = $request->registration_no;
        $results->dob = $request->dob;
        $results->image = $filename;
      $updated = $results->save();
		if($updated){
		  return redirect('/view_result')->with('message','your Result updated');
		}

		}


    public function search_results(Request $request){

      $search_results = $request->get('search_results');
      $results = DB::table('results')->where('registration_no','like','%'.$search_results.'%');
      return view('student.view_result',['results' => $results]);
    }
    
}
