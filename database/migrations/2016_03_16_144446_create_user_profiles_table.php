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
            $table->integer('user_ci')->unsigned();
            $table->date('birthdate');
            $table->enum('sex',['female','male']);
            $table->string('phone');
            $table->string('address');
            $table->boolean('active')->default(true);
            $table->string('avatar');

            $table->foreign('user_ci')
                ->references('ci')
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
