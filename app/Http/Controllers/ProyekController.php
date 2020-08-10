<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
      public function index(){
    	$post = DB::table('proyek')->get();
    	//select * from pertanyaan 
		//dd($post);
    	return view('post.index',compact('post'));
    }
}
