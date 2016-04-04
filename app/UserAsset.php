<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserAsset extends Model
{
    protected $table = 'user_assets';

    protected $fillable =[
        'monthly_contributions', 'accumulated', 'bloked', 'user_idCedula',
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }
}
