<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'pics' => 'array',
        'available' => 'boolean'
    ];
}
