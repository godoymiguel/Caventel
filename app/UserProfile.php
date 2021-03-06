<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id', 'birthdate', 'sex', 'phone', 'address', 'avatar','emergency_name','emergency_phone','emergency_address', 'createdBy', 'updatedBy'
    ];

    public function User()
    {
        return $this->belongsTo('Caventel\User');
    }
}
