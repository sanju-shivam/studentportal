<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\frenchise;
use App\Fee;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;
use Auth;

class FeeController extends Controller
{

	public function add_feetable(){

		$forms = frenchise::where('Frenchise_name',Auth::user()->name)->orderBy('id','desc')->paginate(5);

		return view('frenchise.addfeetable',compact('forms'));
	}



	public function add_fee($id){

		$form = frenchise::where('id',$id)->first();


		return view('frenchise.addfee',compact('form'));
	
	}

	public function store(Request $request){

		$obj = new fee;

		$obj->regno=$request->regno;
		$obj->college =$request->college;
		$obj->submitted_fees=$request->submitted_fees;
		$obj->payment_method=$request->payment_method;
		$obj->payment_remark=$request->payment_remark;
		$obj->Frenchise_name=$request->Frenchise_name;
		$is_saved=$obj->save();

		frenchise::where('regno',$request->regno)->increment('submitted_fees',$request->submitted_fees);
		if($is_saved){

			
			session()->flash("message","Fees added successfully!");

			return redirect('/addfeetable');
		}

	}


	public function all_fee(){

		$fees = fee::where('Frenchise_name',Auth::user()->name)->orderBy("id","desc")->paginate();

		return view('frenchise.viewfees',compact('fees'));
	}


}