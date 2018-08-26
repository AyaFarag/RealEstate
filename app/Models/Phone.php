<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';

    protected $fillable = [
        'number', 'branch_id'
    ];

    public function branches(){
        return  $this->belongsTo('App\Models\Branch', 'branch_id');
    }

}
