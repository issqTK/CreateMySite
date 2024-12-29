<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'type',
        'features',
        'starting_price',
        'ideal_for',
        'title',
        'description',
        'meta_title',
        'meta_description',
        'slug',
        'svg',
    ];

}
