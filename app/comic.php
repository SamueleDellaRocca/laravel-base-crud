<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'series',
        'price',
        'sale_date',
        'type',
        'thumb',
    ];

    public $timestamps = false;
}
