<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaDefaultToppingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_default_toppings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pizza_id')->unsigned();
            $table->integer('topping_id')->unsigned();
            $table->timestamps();

            $table->foreign('topping_id')->references('id')->on('toppings')->onDelete('cascade')->onUpdate('NO ACTION');

           $table->foreign('pizza_id')->references('id')->on('pizzas')->onDelete('cascade')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_toppings');
    }
}
