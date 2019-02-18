<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Items extends Model
{
    // public $timestamps = true;

    protected $fillable = [
        'item',
        'count',
        'price',
        'paid'
    ];

    use SoftDeletes;
    protected $dates = ['deleted_at'];  
}
