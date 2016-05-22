<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'birthdate', 'sex', 'phone', 'email', 'address', 'active', 'avatar', 'user_idCedula',
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }
}
