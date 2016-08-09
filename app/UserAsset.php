<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserAsset extends Model
{
    protected $table = 'user_assets';

    protected $fillable =[
        'user_id', 'monthly_contributions', 'reason', 'payment', 'payment_number', 'accumulated', 'bloked'
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }

    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }
}
