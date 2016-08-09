<?php

namespace Caventel;

use Illuminate\Database\Eloquent\Model;

class HeritageAsset extends Model
{
    protected $table = 'heritage_assets';

    protected $fillable = [
        'reason', 'amount', 'payment', 'payment_number', 'accumulated', 'bloked'
    ];
}
