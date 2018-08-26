<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'img', 'coursetype_id'
    ];

    public function CourseType(){
        return  $this->belongsTo('App\Models\CourseType', 'coursetype_id');
    }
}
