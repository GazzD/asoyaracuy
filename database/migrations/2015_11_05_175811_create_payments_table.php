<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount',10,2);
            $table->string('bank');
            $table->string('confirmation_code');
            $table->date('date');
            $table->string('file');
            $table->string('note');
            $table->enum('type', ['DEPOSIT', 'TRANSFERENCE']);
            $table->enum('status', ['APPROVED', 'PENDING', 'REJECTED']);
            $table->timestamps();
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
