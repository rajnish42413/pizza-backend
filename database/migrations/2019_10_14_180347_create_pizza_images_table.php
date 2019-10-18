<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pizza_id')->unsigned();
            $table->string('thumb')->nullable();
            $table->string('small')->nullable();
            $table->string('medium')->nullable();
            $table->string('large')->nullable();
            $table->string('original')->nullable();
            $table->text('caption')->nullable();
            $table->tinyInteger('default')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

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
        Schema::dropIfExists('pizza_images');
    }
}
