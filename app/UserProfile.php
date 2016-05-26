<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'user_ci', 'birthdate', 'sex', 'phone', 'address', 'active', 'avatar'
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }
}
