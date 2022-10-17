<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AutocompleteController extends Controller
{
    //for create controller - php artisan make:controller AutocompleteController


    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('tbl_posts')
        ->where('tag', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative;background-color: rgb(255,255,255,0.6);">';
      foreach($data as $row)
      {
       $output .= '
       <li><a id="overlay" class="nav-link active" href="/Post/'.$row->id.'">'.$row->name_bangla.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }

}
