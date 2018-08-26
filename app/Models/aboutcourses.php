<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aboutcourses extends Model
{
    protected $table = 'aboutcourses';

    protected $fillable = [
        'title', 'content','img' 
    ];
}
