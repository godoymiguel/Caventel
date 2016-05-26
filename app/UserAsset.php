<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserAsset extends Model
{
    protected $table = 'user_assets';

    protected $fillable =[
        'user_ci', 'monthly_contributions', 'accumulated', 'bloked'
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }
}
