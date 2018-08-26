<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSlider extends Model
{
    protected $table = 'courseslider';

    protected $fillable = [
        'title','description','img' 
    ];
}
