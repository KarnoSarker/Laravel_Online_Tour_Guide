<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request,$PostId){

   	$post_details = DB::table('view_post_description')
   				->where('id', $PostId)
                ->get();
   
    return view('post_description.index')->with('postDescription', $post_details);
    }

      public function howToGo(Request $request,$PostId){

   	$post_details = DB::table('view_post_description')
   				->where('id', $PostId)
                ->first();
   
    return view('how_to_go.index')->with('postDescription', $post_details);
    }
}
