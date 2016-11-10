<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    //
    protected $table = 'reports';

    protected $fillable = [
        'title', 'body', 'createdBy', 'updatedBy'
    ];


    public function scopeSearch($query, $title)
    {
        return $query->where('title', 'LIKE', "%$title%");
    }
}
