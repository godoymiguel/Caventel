<?php

namespace Caventel;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'idCedula', 'name', 'last_name', 'password', 'role',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserProfuile()
    {
        return $this->hasOne('Caventel\UserProfile');
    }

    public function UserAsset(){
        return $this->hasOne('Caventel\UserAsset');
    }

    public function UserLoan(){
        return $this->hasOne('Caventel\UserLoan');
    }
}
