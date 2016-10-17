<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanPayments', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('userLoans_id')->unsigned();
            $table->date('datePayment');
            $table->decimal('canceled',30,15);
            $table->decimal('interest',30,15);
            $table->decimal('amortization',30,15);
            $table->integer('canceledFee');
            $table->integer('remainingFee');
            $table->string('payment');
            $table->string('payment_number');
            $table->integer('createdBy')->unsigned();
            $table->integer('updatedBy')->unsigned();
            $table->timestamps();

            $table->foreign('userLoans_id')
                ->references('id')
                ->on('userLoans')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('loanPayments');
    }
}
