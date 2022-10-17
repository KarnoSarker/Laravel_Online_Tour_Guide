<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\User;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\UserCreatePostRequest;

class DistrictController extends Controller
{
   public function myformAjax($id)
    {
        $district = DB::table("tbl_district")
                    ->where("division_id",$id)
                    ->pluck("district_name","district_id");
        return json_encode($district);
    }
}
