<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 6; $i <= 9; $i++) {
        	DB::table('categories')->insert([
	            'name' => $i . '-njy synp',
	            'created_at' => Carbon::now(),
	            'updated_at' => Carbon::now(),
	        ]);
        } 
    }
}
