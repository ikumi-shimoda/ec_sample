<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpringSale extends Model
{
    protected $fillable = [
        'name',
        'price',
        'category'.
        'purchase',
        'description',
        'image',
    ];
}
