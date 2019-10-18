<?php

use Illuminate\Database\Seeder;

class PizzaImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
	    	DB::table('pizza_images')->insert([
	            'pizza_id' => rand(1,10),
	            'small' => 'pizza-'.rand(1,10).'.png',
	            'medium' => 'pizza-'.rand(1,10).'.png',
	            'small' => 'pizza-'.rand(1,10).'.png',
	        ]);
    	}
    }
}
