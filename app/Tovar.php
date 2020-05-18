<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{

	public function categories()
    {
    	return $this->belongsToMany('App\Category');
    } 

    public function formens($tovars){

    	$tovars=Tovar::take(4)->where('sex_p', '=','m')->get();
    	return $tovars;
    }


}
