<?php

use Illuminate\Database\Seeder;

class ToppingsTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $items = [
           ['icon' => 'chickenpepperoni.png', 'name' => 'pepperoni' ,'slug' => 'pepperoni','amount' => rand(1,100)],

           ['icon' => 'mushroom.png', 'name' => 'Mushrooms' ,'slug' => 'mushrooms','amount' => rand(1,100)],

           ['icon' => 'onion.png', 'name' => 'Onions' ,'slug' => 'onions','amount' => rand(1,100)],

           ['icon' => 'chickensausage.png', 'name' => 'Sausage' ,'slug' => 'sausage','amount' => rand(1,100)],

           ['icon' => 'jalapeno', 'name' => 'jalapeno' ,'slug' => 'jalapeno','amount' => rand(1,100)],

           ['icon' => 'cheese.png', 'name' => 'Extra cheese' ,'slug' => 'extra-cheese','amount' => rand(1,100)],

           ['icon' => 'BlackOlive.png', 'name' => 'Black olives' ,'slug' => 'black-olives','amount' => rand(1,100)],

           ['icon' => 'Greencapsicum.png', 'name' => 'Green capsicum' ,'slug' => 'green-capsicum','amount' => rand(1,100)],

           ['icon' => 'babycorn.png', 'name' => 'Baby Corn' ,'slug' => 'baby-corn','amount' => rand(1,100)],

           ['icon' => 'paneer.png', 'name' => 'paneer' ,'slug' => 'paneer','amount' => rand(1,100)] ,

           ['icon' => 'redpaparika.png', 'name' => 'red paparika' ,'slug' => 'red-paparika','amount' => rand(1,100)],

           ['icon' => 'tomato.png', 'name' => 'tomato' ,'slug' => 'tomato','amount' => rand(1,100)],

           ['icon' => 'Soya-Chunks-Icon.png', 'name' => 'Soya Chunks' ,'slug' => 'soya-chunks','amount' => rand(1,100)],

           ['icon' => 'redcapsicum.png', 'name' => 'Red Capsicum' ,'slug' => 'red-capsicum','amount' => rand(1,100)]
       ];


      foreach ($items as $item) {
           DB::table('toppings')->insert([
                      'icon' => $item['icon'],
                      'name' => $item['name'],
                      'amount' => $item['amount'],
                      'slug' => $item['slug']
              ]);
        }
   }
}
