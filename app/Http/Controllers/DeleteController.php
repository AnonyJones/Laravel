<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DeleteController extends Controller
{
   public function delete()
   {
    $query = DB::update("Update users SET status='Deleted' WHERE id ='1'");

    if(!$query){
        echo "Record not deleted!";
    }
    else{
        echo"Record successfully deleted";
    }
    
    echo "<a href='/view'><input type='button' value='Back'/></a>";
    return view('updated');
   }
  
}
