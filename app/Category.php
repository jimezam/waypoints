<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// $ php artisan make:model Category

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
