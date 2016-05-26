<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserLoan extends Model
{
    protected $table = 'user_loans';

    protected $fillable = [
        'user_ci', 'type_loan', 'term', 'date_loan', 'amount_awarded', 'amount_canceled', 'amount_fee', 'amount_interest', 'overdue_fees', 'interest_arrears'
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }
}
