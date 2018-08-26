<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatWeDo extends Model
{
    protected $table = 'whatwedo';

    protected $fillable = [
        'img', 'title', 'description',
    ];
}
