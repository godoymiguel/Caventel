<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'user_idCedula', 'title', 'body', 'img'
    ];
}
