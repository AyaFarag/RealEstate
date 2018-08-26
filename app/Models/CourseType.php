<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $table = 'coursetype';

    protected $fillable = [
        'name', 
    ];

    public function Courses(){
        return  $this->hasMany('App\Models\Courses','coursetype_id');
    }
}
