<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurWork extends Model
{
    protected $table = 'ourworks';

    protected $fillable = [
        'img', 'field_id' 
    ];

    public function fields(){
        return  $this->belongsTo('App\Models\Field', 'field_id');
    }
}
