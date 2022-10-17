<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    public function contactUs(Request $request){
    return view('contact.contact_us');
    }
    public function aboutUs(Request $request){
    return view('contact.about_us');
    }
     public function advertise(Request $request){
    return view('contact.contact_us');
    }
}
