<?php

use Illuminate\Database\Seeder;

class PizzaToppingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) {
	    	DB::table('pizza_default_toppings')->insert([
	            'pizza_id' => rand(1,10),
	            'topping_id' => rand(1,14)
	        ]);
    	}

    }
}
