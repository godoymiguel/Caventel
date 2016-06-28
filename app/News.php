<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'user_id', 'title', 'body', 'img'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE', "%$title%");
    }
}
