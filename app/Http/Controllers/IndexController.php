<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Illuminate\Support\Facades\DB;


//index Controller

class IndexController extends Controller
{
    

    //Index Function
    public function index(Request $request){

    $post_list = DB::table('view_post_list')->paginate(5);
    $district_list = DB::table('view_district')
                ->distinct()
                ->get();
    $request->session()->put('divisionSession', null);
    $request->session()->put('districtSession', null);
    return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }

    /*public function go(Request $request){

    $post_list = DB::table('view_post_list')->paginate(5);
    $district_list = DB::table('view_district')
                ->distinct()
                ->get();
    $request->session()->put('divisionSession', null);
    $request->session()->put('districtSession', null);
    return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }*/

   
   public function dhaka(Request $request){

    $divisionId = 'Dhaka';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Dhaka');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


    public function chittagong(Request $request){

    $divisionId = 'Chittagong';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Chittagong');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


    public function rajshahi(Request $request){

    $divisionId = 'Rajshahi';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Rajshahi');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


    public function khulna(Request $request){

    $divisionId = 'Khulna';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Khulna');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


    public function barishal(Request $request){

    $divisionId = 'Barishal';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Barishal');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


    public function sylhet(Request $request){

    $divisionId = 'Sylhet';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Sylhet');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


    public function rangpur(Request $request){

    $divisionId = 'Rangpur';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Rangpur');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


    public function mymensingh(Request $request){

    $divisionId = 'Mymensingh';
    $post_list = DB::table('view_post_list')
    			->where('division', $divisionId)
                ->paginate(5);
    $district_list = DB::table('view_district')
    			->where('division', $divisionId)
                ->distinct()
                ->get();

    $request->session()->put('divisionSession', 'Mymensingh');
    $request->session()->put('districtSession', null);
    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }



 public function viewPostDistrictWise(Request $request,$division,$district){


    	 $post_list = DB::table('view_post_list')
    			->where('division', $division)
    			->where('district', $district)
                ->paginate(5);

         $district_list = DB::table('view_district')
    			->where('division', $division)
                ->distinct()
                ->get();

        $request->session()->put('divisionSession', $post_list[0]->division);
    	$request->session()->put('districtSession', $post_list[0]->district);

    	return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
    }


     public function viewPostCategoryWise(Request $request,$category){

        if($request->session()->get('divisionSession')==null && $request->session()->get('districtSession')==null){
         
            $post_list = DB::table('view_post_list')
                ->where('category', $category)
                ->paginate(5);

            $district_list = DB::table('view_district')
                ->distinct()
                ->get();

               // $request->session()->put('divisionSession', null);
               // $request->session()->put('districtSession', null);

                return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);

        }
        else if($request->session()->get('districtSession')==null){
            
            $division = session()->get('divisionSession');
            $post_list = DB::table('view_post_list')
                ->where('division', $division)
                ->where('category', $category)
                ->paginate(5);

            $district_list = DB::table('view_district')
                ->where('division', $division)
                ->distinct()
                ->get();

               // $request->session()->put('divisionSession', null);
               // $request->session()->put('districtSession', null);

                return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
        }
        else{
             $division = session()->get('divisionSession');
             $district = session()->get('districtSession');
            $post_list = DB::table('view_post_list')
                ->where('division', $division)
                ->where('district', $district)
                ->where('category', $category)
                ->paginate(5);

            $district_list = DB::table('view_district')
                ->where('division', $division)
                ->distinct()
                ->get();

             //   $request->session()->put('divisionSession', null);
             //  $request->session()->put('districtSession', null);

                return view('index_folder.index')->with('postList', $post_list)->with('district', $district_list);
        }
        
    }






}

