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
            $table->decimal('amount',30,15);
            $table->string('payment');
            $table->string('payment_number');
            $table->decimal('accumulated',30,15);
            $table->decimal('bloked',30,15)->default(0.0);
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
