<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $table = 'fields';

    protected $fillable = [
        'name', 
    ];

    public function ourwork(){
        return  $this->hasMany('App\Models\OurWork');
    }
}
