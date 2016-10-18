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
        Schema::create('userLoans', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('typeLoan');
            $table->integer('term');
            $table->integer('canceledFee');
            $table->date('dateLoan');
            $table->date('nextPayment');
            $table->decimal('salary',30,15);
            $table->decimal('amountAwarded',30,15);
            $table->decimal('canceled',30,15);
            $table->decimal('amountFee',30,15);
            $table->decimal('interest',30,15);
            $table->decimal('amortization',30,15);
            $table->decimal('overdueFees',30,15);
            $table->decimal('interestArrears',30,15);
            $table->integer('createdBy')->unsigned();
            $table->integer('updatedBy')->unsigned();

            $table->foreign('user_id')
                ->references('id')
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
        Schema::drop('userLoans');
    }
}
