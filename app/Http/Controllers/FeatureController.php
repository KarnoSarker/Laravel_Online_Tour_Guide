<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\UserCreatePostRequest;

class FeatureController extends Controller
{
    public function create(Request $request){

    $division = DB::table("tbl_division")->pluck("division_name","division_id");
    return view('create_post.index',compact('division'));
    }

    public function store(UserCreatePostRequest $request){
      

      /* $this->validate($request, [
            'name_english'=>'bail|Required',
            'name_bangla'=>'bail|Required',
            'description'=>'bail|Required',
            'direction'=>'bail|Required',
            'latitude'=>'bail|Required',
            'langitude'=>'bail|Required',
            'tag'=>'bail|Required',
            'imageFiles' => 'required',
            'imageFiles.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author'=>'bail|Required'

        ]);*/

       
        
  

       /* if($validator->fails()){
            //return Back();
            return Back()
                ->withInput()
                ->with('errors', $validator->errors());
        }*/

 		$time= date('Ymdhms')+rand();

         $image = $request->imageFiles[0];
         $photo1 = 'assets/post_images/'.$time.$image->getClientOriginalName();


        $division = DB::table("tbl_division")->where('division_id', $request->division)->first();
     
       
		$id = DB::table('tbl_temp_posts')->insertGetId(
		    ['name_bangla' => $request->name_bangla, 
		     'name_english' => $request->name_english,
		     'description' => $request->description,
	     	 'district' => $request->district,
	         'division' => $division->division_name,
	         'direction' => $request->direction,
			 'latitude' => $request->latitude,
			 'langitude' => $request->langitude,
			 'date' => date('Y-m-d h:m:s'),
			 'source' => $request->author,
		     'temp_id' => $time,
	         'category' => $request->category,
			 'tag' => $request->tag,
			 'main_image' =>$photo1]

		);


		 if($request->hasfile('imageFiles'))
         {

            foreach($request->imageFiles as $image)
            {
               $photoName = 'assets/post_images/'.$time.$image->getClientOriginalName(); 

				$image->move('assets/post_images/', $photoName);
				//tbl_temp_image

			DB::table('tbl_temp_image')->insert(
		    ['id' => $id, 
		     'image' => $photoName]

		);

            }
         }

       $request->session()->flash('success', 'success');
     	$division = DB::table("tbl_division")->pluck("division_name","division_id");
    	return view('create_post.index',compact('division'));
      

        
    }

	    public function nearestPlaces(Request $request){
	    	$post_list = DB::table('tbl_posts')
                ->paginate(8);
	    	return view('nearest_places.index')->with('postList', $post_list);
	    }

	    public function filterPost(Request $request){

	    	$range=$request->range;
	    	$category=$request->category;
	    	$langitude=$request->device_langitude1;
	    	$latitude=$request->device_latitude1;

	    	if($request->category == 'সকল'){
	    	$post_list = DB::table('view_post_list')
                ->paginate(8);
	    	return view('nearest_places.index')->with('postList', $post_list);
	    	}
	    	else{
	    	$post_list = DB::table('view_post_list')
    			->where('category', $request->category)
                ->paginate(8);
	    	return view('nearest_places.index')->with('postList', $post_list);
	    	}
	    }

	    public function calculate_distance($lat1, $lon1, $lat2, $lon2, $unit='N') 
			{ 
			  $theta = $lon1 - $lon2; 
			  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
			  $dist = acos($dist); 
			  $dist = rad2deg($dist); 
			  $miles = $dist * 60 * 1.1515;
			   return ($miles * 1.609344); 
			   //return ($miles * 0.8684);

			}

}
