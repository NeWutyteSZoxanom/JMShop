<?php

use Illuminate\Database\Seeder;
use App\Tovar;

class TovarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 15; $i++) { 
        	Tovar::create([

        		'name_t'=>'DlyaMuchin'. $i,
        		'slug'=>'dlyamuchin'. $i,
        		'price'=>rand(50,500),
        		'description'=>$i. 'yebfyuebwfuywuefwofeuyfbuefWUB',

        	])->categories()->attach(1);
        }
            $tovar = Tovar::find(1);
            $tovar->categories()->attach(2);

        for ($i=1; $i < 5; $i++) { 
        	Tovar::create([

        		'name_t'=>'Dlyajenshin'. $i,
        		'slug'=>'dlyajenshin'. $i,
        		'price'=>rand(50,500),
        		'description'=>$i. 'yebfyuebwfuywuefwofeuyfbuefWUB',

        	])->categories()->attach(2);
        }
        for ($i=1; $i < 5; $i++) { 
        	Tovar::create([

        		'name_t'=>'Dlyadetey'. $i,
        		'slug'=>'dlyadetey'. $i,
        		'price'=>rand(50,500),
        		'description'=>$i. 'yebfyuebwfuywuefwofeuyfbuefWUB',

        	])->categories()->attach(3);
        }
        for ($i=1; $i < 5; $i++) { 
        	Tovar::create([

        		'name_t'=>'Acsesuar'. $i,
        		'slug'=>'acsesuar'. $i,
        		'price'=>rand(50,500),
        		'description'=>$i. 'yebfyuebwfuywuefwofeuyfbuefWUB',

        	])->categories()->attach(4);
        }

    }
}
