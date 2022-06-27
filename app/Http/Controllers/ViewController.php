<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller; 
use App\Models\users;


class ViewController extends Controller
{
    //
     public function view()
     {
        
        $users = DB::select("select * from users WHERE status = 'Active'");
        return view('view',['user'=>$users]);
        
     }
    }