<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
        	['name'=>'For Mens','slug'=>'for-mens','created_at'=>$now,'updated_at'=>$now],
        	['name'=>'For Womens','slug'=>'for-womens','created_at'=>$now,'updated_at'=>$now],
        	['name'=>'For Kids','slug'=>'for-kids','created_at'=>$now,'updated_at'=>$now],
        	['name'=>'Accessories','slug'=>'accessories','created_at'=>$now,'updated_at'=>$now]
        ]);
    }
}
