<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'user_ci', 'title', 'body', 'img'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
