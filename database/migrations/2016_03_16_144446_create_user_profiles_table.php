<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('idProfile');
            $table->date('birthdate');
            $table->enum('sex',['female','male']);
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->boolean('active')->default(true);
            $table->integer('user_idCedula')->unsigned();

            $table->foreign('user_idCedula')
                ->references('idCedula')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::drop('user_profiles');
    }
}
