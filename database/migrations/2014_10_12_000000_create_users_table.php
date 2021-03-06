<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('balance',15,2);
            $table->string('email')->unique();
            $table->string('house')->unique();
            $table->string('password', 60);
            $table->string('phone');
            $table->enum('status',['ENABLED','DISABLED'])->default('ENABLED');
            $table->enum('role',['USER','ADMIN','DIRECTIVE','COLLECTOR']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
