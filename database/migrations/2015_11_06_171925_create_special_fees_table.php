<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('special_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('amount');
            $table->enum('status', ['ENABLED', 'DISABLED'])->default('ENABLED');
            $table->enum('user_status',['ENABLED','DISABLED'])->default('ENABLED');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
        
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('special_fees');
    }
}
