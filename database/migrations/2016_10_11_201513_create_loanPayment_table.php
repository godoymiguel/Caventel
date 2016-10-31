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
            $table->integer('user_loan_id')->unsigned();
            $table->date('datePayment');
            $table->decimal('canceled',30,15);
            $table->decimal('interest',30,15);
            $table->decimal('amortization',30,15);
            $table->integer('canceledFee');
            $table->integer('remainingFee');
            $table->string('payment');
            $table->string('payment_number');
            $table->string('bank');
            $table->integer('createdBy')->unsigned();
            $table->integer('updatedBy')->unsigned();
            $table->timestamps();

            $table->foreign('user_loan_id')
                ->references('id')
                ->on('user_loan')
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
