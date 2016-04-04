<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_loans', function (Blueprint $table) {
            $table->increments('idLoans');
            $table->string('type_loan');
            $table->integer('term');
            $table->date('date_loan');
            $table->float('amount_awarded');
            $table->float('amount_canceled');
            $table->float('amount_fee');
            $table->float('amount_interest');
            $table->float('overdue_fees');
            $table->float('interest_arrears');
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
        Schema::drop('user_loans');
    }
}
