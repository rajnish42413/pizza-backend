<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaToppingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topping_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('topping_id')->unsigned();
            $table->string('thumb')->nullable();
            $table->string('small')->nullable();
            $table->string('medium')->nullable();
            $table->string('large')->nullable();
            $table->string('original')->nullable();
            $table->text('caption')->nullable();
            $table->tinyInteger('default')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
             $table->foreign('topping_id')->references('id')->on('toppings')->onDelete('cascade')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tooping_images');
    }
}
