<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserLoan extends Model
{
    protected $table = 'user_loan';

    protected $fillable = [
        'user_id', 'typeLoan', 'term', 'canceledFee', 'dateLoan', 'nextPayment', 'salary', 'amountAwarded', 'canceled', 'amountFee',
        'interest', 'amortization', 'nextamount', 'overdueFees', 'interestArrears', 'createdBy', 'updatedBy'
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }

    public function loanPayment()
    {
        return $this->hasMany(LoanPayment::class);
    }
}
