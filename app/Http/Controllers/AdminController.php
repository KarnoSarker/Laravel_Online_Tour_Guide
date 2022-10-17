<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\AdminRewiewPostRequest;
use App\Http\Requests\AdminEditPostRequest;
use App\Http\Requests\AdminCreatePostRequest;
use App\Http\Requests\ChangePasswordRequest;




class AdminController extends Controller
{
   public function index(Request $request){
    $post_count = DB::table('tbl_temp_posts')->count();
    return view('admin.admin_panel')->with('postCount', $post_count);
    }


    public function changePassword(Request $request){
    return view('admin.change_password');
    }


    public function changePasswordVerify(ChangePasswordRequest $request){

   $email= $request->session()->get('user');
   $password= $request->old_password;

   if($request->new_password != $request->confirm_password)
    {
        $request->session()->flash('confirm_password_not_match', 'confirm_password_not_matched');
        return view('admin.change_password');
    }

   $check= DB::table('tbl_admin')
                ->where('email', $email)
                ->where('password', $password)
                ->first();

    

    //echo $request->old_password;
   // echo $check->password;
    if($check != null)
    {
       

        DB::table('tbl_admin')
            ->where('email', $email)
            ->update(['password' => $request->new_password]);

        $request->session()->flash('Password_match', 'Password_match');
        return view('admin.change_password');

            

    }
   else
   {
        $request->session()->flash('Password_dont_match', 'Password_dont_match');
        return view('admin.change_password');
   
   }


}


    public function createPost(Request $request){
    $division = DB::table("tbl_division")->pluck("division_name","division_id");
    return view('admin.admin_create_post',compact('division'));
    }


    public function store(AdminCreatePostRequest $request){
    	
      
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
     
       
		$id = DB::table('tbl_posts')->insertGetId(
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

			DB::table('tbl_image')->insert(
		    ['id' => $id, 
		     'image' => $photoName]

		);

            }
         }

       $request->session()->flash('success', 'success');
       $division = DB::table("tbl_division")->pluck("division_name","division_id");
       return view('admin.admin_create_post',compact('division'));

        
    }



    public function reviewList(Request $request){

    $post_list = DB::table('tbl_temp_posts')->paginate(6);
    return view('admin.review_post_list')->with('postList', $post_list);
    }




    public function reviewPost(Request $request,$PostId){

    $post_details = DB::table('tbl_temp_posts')
                ->where('id', $PostId)
                ->first();
    $image_list = DB::table('tbl_temp_image')
                ->where('id', $PostId)
                ->get();

    $district = DB::table("tbl_district")->get();
    

    return view('admin.review_post_description')->with('postDescription', $post_details)->with('imageList', $image_list)->with('district',$district);
    }



    public function storeReview(AdminRewiewPostRequest $request){
        
      
           /* $this->validate($request, [
            'name_english'=>'bail|Required',
            'name_bangla'=>'bail|Required',
            'description'=>'bail|Required',
            'direction'=>'bail|Required',
            'latitude'=>'bail|Required',
            'langitude'=>'bail|Required',
            'tag'=>'bail|Required',
            'author'=>'bail|Required'

        ]);
*/
       
        
  

       /* if($validator->fails()){
            //return Back();
            return Back()
                ->withInput()
                ->with('errors', $validator->errors());
        }*/

 

        $time= date('Ymdhms')+rand();


        $id = DB::table('tbl_posts')->insertGetId(
            ['name_bangla' => $request->name_bangla, 
             'name_english' => $request->name_english,
             'description' => $request->description,
             'district' => $request->district,
             'division' => $request->division,
             'direction' => $request->direction,
             'latitude' => $request->latitude,
             'langitude' => $request->langitude,
             'date' => date('Y-m-d h:m:s'),
             'source' => $request->author,
             'temp_id' => $time,
             'category' => $request->category,
             'tag' => $request->tag,
             'main_image' =>$request->image_link]

        ); 

        $images = DB::table('tbl_temp_image')->where('id',$request->id_link)->get();

            foreach($images as $image)
            {
            
            DB::table('tbl_image')->insert(
            ['id' => $id, 
             'image' => $image->image]

        ); 

            }


   
        DB::table('tbl_temp_posts')->where('id', '=', $request->id_link)->delete();
        DB::table('tbl_temp_image')->where('id', '=', $request->id_link)->delete();
        $request->session()->flash('review_accepted', 'success');

        return redirect()->route('admin.reviewList');

        
    }

     public function deletePost(Request $request,$postId){
     DB::table('tbl_temp_posts')->where('id', '=', $postId)->delete();
     DB::table('tbl_temp_image')->where('id', '=', $postId)->delete();

     $request->session()->flash('review_deleted', 'success');
        return redirect()->route('admin.reviewList');
    }


    public function managePost(Request $request){
            $post_list = DB::table('tbl_posts')
                ->paginate(8);
            $district = DB::table("tbl_district")->get();
            return view('admin.manage_post')->with('district',$district)->with('postList', $post_list);
        }




    public function editPost(Request $request,$PostId){

    $post_details = DB::table('tbl_posts')
                ->where('id', $PostId)
                ->first();
    $image_list = DB::table('tbl_image')
                ->where('id', $PostId)
                ->get();

    $district = DB::table("tbl_district")->get();
    
   
    return view('admin.edit_post_description')->with('postDescription', $post_details)->with('imageList', $image_list)->with('district',$district);
    }


    public function updatePost(AdminEditPostRequest $request,$postId){
        
      
            /*$this->validate($request, [
            'name_english'=>'bail|Required',
            'name_bangla'=>'bail|Required',
            'description'=>'bail|Required',
            'direction'=>'bail|Required',
            'latitude'=>'bail|Required',
            'langitude'=>'bail|Required',
            'tag'=>'bail|Required',
            'author'=>'bail|Required'

        ]);
*/
       
        
  

       /* if($validator->fails()){
            //return Back();
            return Back()
                ->withInput()
                ->with('errors', $validator->errors());
        }*/



        DB::table('tbl_posts')->where('id', $request->id_link)->update(
            ['name_bangla' => $request->name_bangla, 
             'name_english' => $request->name_english,
             'description' => $request->description,
             'district' => $request->district,
             'division' => $request->division,
             'direction' => $request->direction,
             'latitude' => $request->latitude,
             'langitude' => $request->langitude,
             'source' => $request->author,
             'category' => $request->category,
             'tag' => $request->tag]

        );
        $request->session()->flash('post_edited', 'success');
        return redirect()->route('admin.managePost');

        
    }

     public function deleteMainPost(Request $request,$postId){
     DB::table('tbl_posts')->where('id', '=', $postId)->delete();
     DB::table('tbl_image')->where('id', '=', $postId)->delete();
     $request->session()->flash('post_deleted', 'success');
        return redirect()->route('admin.managePost');
    }

    public function filterManagePost(Request $request){
     
         
        if($request->district == null && $request->category ==null && $request->division !=null){
            $post_list = DB::table('tbl_posts')
                ->where('division', $request->division)
                ->paginate(8);
        }
        else if($request->district == null && $request->division ==null && $request->category !=null){
            $post_list = DB::table('tbl_posts')
                ->where('category', $request->category)
                ->paginate(8);
        }
        else if($request->category == null && $request->division == null && $request->district !=null){
            $post_list = DB::table('tbl_posts')
                ->where('district', $request->district)
                ->paginate(8);
        }
        else if($request->category == null && $request->division != null && $request->district != null){
            $post_list = DB::table('tbl_posts')
                ->where('division', $request->division)
                ->where('district', $request->district)
                ->paginate(8);
        }
        else if($request->district == null && $request->division != null && $request->category != null){
            $post_list = DB::table('tbl_posts')
                ->where('division', $request->division)
                ->where('category', $request->category)
                ->paginate(8);
        }
        else if($request->division == null && $request->district != null && $request->category != null){
            $post_list = DB::table('tbl_posts')
                ->where('district', $request->district)
                ->where('category', $request->category)
                ->paginate(8);
        }
        else if($request->division != null && $request->district != null && $request->category != null){
            $post_list = DB::table('tbl_posts')
                ->where('district', $request->district)
                ->where('category', $request->category)
                ->where('division', $request->division)
                ->paginate(8);
        }
        else{
            $post_list = DB::table('tbl_posts')
                ->paginate(8);
        }
        
        $district = DB::table("tbl_district")->get();
        return view('admin.manage_post')->with('district',$district)->with('postList', $post_list);
    }


}
