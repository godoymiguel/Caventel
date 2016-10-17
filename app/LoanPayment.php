<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class LoanPayment extends Model
{
    protected $table = 'loanPayments';

    protected $fillable = [
        'userLoans_id', 'datePayment', 'canceled', 'interest', 'amortization', 'canceledFee' , 'remainingFee',
        'payment', 'payment_number', 'createdBy', 'updatedBy'
    ];

    public function UserLoan()
    {
        return $this->belongsTo(UserLoan::class);
    }
}
