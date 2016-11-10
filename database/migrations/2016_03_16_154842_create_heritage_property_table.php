<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeritagePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heritage_property', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_code');
            $table->string('notary');
            $table->string('recordCard');
            $table->string('name');
            $table->decimal('price',30,15);
            $table->string('address');
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
        Schema::drop('heritage_property');
    }
}
