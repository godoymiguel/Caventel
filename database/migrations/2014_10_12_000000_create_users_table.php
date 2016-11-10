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
            $table->increments('id')->unsigned();;
            $table->integer('ci')->unique()->unsigned();
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->enum('type',['user','secretary','admin','superadmin'])->default('user');            
            $table->boolean('active')->default(true);
            $table->integer('createdBy')->unsigned();
            $table->integer('updatedBy')->unsigned();
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
