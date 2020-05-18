<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tovar;
use App\Category;

class MainController extends Controller
{
    public function index(){
    	
    	$tovars=Tovar::all();
      
        return view('main')->with(
            'tovars',$tovars
           
            
        );  
    }

    public function forman(){

      // $tovars=Tovar::take(4)->where('sex_p', '=','m')->get();
    	return view('for4.forman');//->with('tovars',$tovars);
    }
  


    public function all(){
    	// $tovars=Tovar::inRandomOrder()->take(8)->get();
    	// return view('main')->with('tovars',$tovars);
    }
}
