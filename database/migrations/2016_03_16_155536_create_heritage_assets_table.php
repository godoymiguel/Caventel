<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeritageAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heritage_assets', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('reason');
            $table->float('amount');
            $table->string('payment');
            $table->string('payment_number');
            $table->float('accumulated');
            $table->float('bloked')->default(0.0);
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
        Schema::drop('heritage_assets');
    }
}
