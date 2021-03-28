<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpringSale extends Model
{
    protected $fillable = [
        'id',
        'name',
        'price',
        'description',
        'image',
    ];
}
