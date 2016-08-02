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
        'ci', 'name', 'last_name', 'email', 'password', 'type'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function UserProfile()
    {
        return $this->hasOne('Caventel\UserProfile');
    }

    public function UserAsset()
    {
        return $this->hasMany('Caventel\UserAsset');
    }

    public function UserLoan()
    {
        return $this->hasOne('Caventel\UserLoan');
    }

    public function News()
    {
        return $this->hasMany(News::class);
    }

    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }
}
