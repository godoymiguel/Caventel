<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class HeritageProperty extends Model
{
    protected $table = 'heritage_property';

    protected $fillable = [
        'document_code', 'name', 'price', 'address',
    ];
}
