<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_assets', function (Blueprint $table) {
            $table->increments('idAssets');
            $table->float('monthly_contributions');
            $table->float('accumulated');
            $table->float('bloked')->default(0.0);
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
        Schema::drop('user_assets');
    }
}
