<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('city',100)->nullable();
            $table->text('address')->nullable();
            $table->string('region',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('pincode',10)->nullable();
            $table->string('phone',15)->nullable();

            $table->timestamps();

             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
}
