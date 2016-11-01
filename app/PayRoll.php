<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class PayRoll extends Model
{
    //
    protected $table = 'payRoll';

    protected $fillable = [
        'user_ci', 'salary'
    ];

    public function scopeSearch($query, $user_ci)
    {
        return $query->where('user_ci', 'LIKE', "%$user_ci%");
    }
}
