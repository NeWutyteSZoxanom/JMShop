<?php

use Illuminate\Database\Seeder;
use App\Tovar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(TovarsTableSeeder::class);
    }
}
