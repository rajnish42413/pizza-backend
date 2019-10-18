<?php

use Illuminate\Database\Seeder;

class PizzasTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $items = [            
             ['id' => 1, 'name' => 'Margherita Classic' ,'slug' => 'margherita-classic','amount' => rand(1,100),'description' => "Dominos India and this pizza chain is operated by Jubilant Food Works. The chain was established in India in 1995 and the headquarters of Jubilant Food Works is based in Noida in Uttar Pradesh. There are over 1200 outlets for Dominos in India. Dominos also offer cheese burst pizza and it is certainly one of the best selling pizza in India market. They also offer some desserts like the choco lava cake which are also very popular with India customer base. Dominos is also very particular about the quality of the pizza and they always guarantee 30 minutes home delivery."],

             ['id' => 2, 'name' => 'Classic Corn' ,'slug' => 'classic-corn','amount' => rand(1,100),'description' => "Pizza Hut is certainly one of the best pizza chains in India and this Pizza chain also belongs to the United States of America. The first outlet of the chain was opened in 1958 and in India, the Pizza Hut has its presence in over 40 cities. As per an estimate, there are over 10,000 stores of Pizza Hut with a global presence. The pizza hut offers a fine dine experience in India and they have now started offering unlimited pizza buffet meals as well in which they offer up to 5 courses of the dining experience"],

             ['id' => 3, 'name' => 'Classic Tomato' ,'slug' => 'classic-tomato','amount' => rand(1,100),'description' => " Sbarro and this pizza chain was incepted in 1956. Today, the chain has its headquarters in Ohio and the chain serves many countries apart from the USA. As per many of the survey’s it is reported that Sbarro is one of the best pizza makers and they are very particular about the quality of the ingredients used by them. In addition to this, the chain also serves the Slices of Pizza so you can try many different toppings at once. The chain also serves square pizza and pasta which are certainly a delight."],

             ['id' => 4, 'name' => 'Paneer Soya Supreme' ,'slug' => 'paneer-soya-supreme','amount' => rand(1,100),'description' => "we have US Pizza and it is one of the highest selling pizza brands in India. The chain is based in the United States of America and the name of the parent company is United Restaurants Limited. Some of the outlets of the company also offer unlimited buffet and the chain offers starters, salads, beverages, and desserts apart from the regular pizzas. The chain has many restaurants in southern India, especially in Hyderabad.

"],

             ['id' => 5, 'name' => 'Chicken Feast' ,'slug' => 'chicken-feast','amount' => rand(1,100),'description' => "You would have certainly tried the pizza from Smokin’Joe’s and you might be surprised to know that this is an Indian chain. The chain has over 58 outlets in India and the headquarters of this chain is in Mumbai. The restaurant offers garlic bread, salads, subs, and desserts apart from the pizza and the first restaurant of Smokin’ Joe’s were opened in the year 1993. The chain is now planning to expand internationally as it has already gained a lot of acceptance in the Indian market. You must try Chicken Tikka Pizza, Tandoori Paneer Pizza and Napolitana Pizza here.

"],
             ['id' => 6, 'name' => 'Chicken Pepperoni' ,'slug' => 'chicken-pepperoni ','amount' => rand(1,100),'description' => "Sal’s Pizza and this one is also relatively a new chain in India. This pizza chain also serves liquor and you can also create your own pizza when you visit this amazing Pizza Chain. Originally, this chain belongs to the United State of America and the chain is really popular in America as well. Sail’s Pizza is still in the growth stage and many new franchisees are coming up in next few years.

"],

             ['id' => 7, 'name' => 'Country Feast' ,'slug' => 'country-feast','amount' => rand(1,100),'description' => "California Pizza is also known as California Pizza Kitchen and this chain was founded in 1985 in California. It recently entered the Indian market and the pizzas from this chain are an instant hit. The brand is a little expensive when you compare it with the other chains but the taste is certainly worth the price. The chain also offers sandwiches and the toppings offered by California Pizza are quite unique. You can visit California Pizza for a fine dining experience and you will certainly not be disappointed with the service and the food."],

             ['id' => 8, 'name' => 'Tandoori Paneer' ,'slug' => 'tandoori-paneer','amount' => rand(1,100),'description' => "Chicago Pizza and the chain has its origin in Ohio. It is known that this chain was founded in the year 1972 and the pizzas from this chain are also quite popular in India. Apart from Pizzas, they also offer garlic bread, pasta, and desserts. In addition to this, you can also order a single Monster Slice of the pizza when you are ordering the food from this amazing chain. They have customized their menu as per Indian taste and they also offer flavors like Veg Makhani Paneer."],

             ['id' => 9, 'name' => ' veg exotica' ,'slug' => 'veg-exotica','amount' => rand(1,100),'description' => "Next on our list is Pizza Corner and the chain was really popular in the early 2000s but the chain was not able to survive the stiff competition and the number of outlets reduced significantly. Today, the chain is still present in India and the cone pizza of the chain is certainly worth a try. There are many other popular flavors which are available at Pizza Corner and you can try some of them if you plan to visit this chain."],

             ['id' => 10, 'name' => 'Chicken Sausage n Tikka' ,'slug' => 'chicken-sausage-n-ikka','amount' => rand(1,100),'description' => "Eagle Boys Pune is an Australian Chain which entered in India after 2012. The chain acquired opened many restaurants and it quickly wooed a lot of customer because of the discounts. One of the unique offerings of the brand was the dessert pizza and the prices of the pizzas from this chain are also very reasonable. Today, they offer a variety of pizzas and as per the information, the chain is owned by the Pizza giant Pizza Hut. If you have not tried the pizza of this amazing chain then you must go ahead and try these pizzas and you will fall in love with the toppings on these Pizzas"]
         ];

        foreach ($items as $item) {
              DB::table('pizzas')->insert([
                      'name' => $item['name'],
                      'amount' => $item['amount'],
                      'slug' => $item['slug'],
                      'description' =>$item['description']
              ]);
          }   
     }
}
