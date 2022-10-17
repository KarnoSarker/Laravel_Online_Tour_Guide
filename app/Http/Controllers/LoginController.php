<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(Request $request){
    return view('admin.login');
    }
    public function verify(LoginRequest $request){
    	
    	$email = $request->email;
    	$password = $request->password;
     
        $user = DB::table('view_admin')
                ->where('email', $email)
                ->where('password', $password)
                ->first();

		if($user != null){

            $request->session()->put('logged', $user);
            $request->session()->put('user', $user->email);
            
			return redirect()->route('admin.index');
		}else{

			$request->session()->flash('message', 'Invalid username or password');
			return redirect()->route('login.index', ['email'=>$email]);
		}
    	
    }
      
}
