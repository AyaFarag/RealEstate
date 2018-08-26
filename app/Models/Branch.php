<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';

    protected $fillable = [
        'name', 'email','address',
    ];

    public function phone(){
        return  $this->hasMany('App\Models\Phone');
    }

    public function getNumbersAttribute()
    {
      $phones = $this->phone->pluck('number')->all();
      if( !empty($phones)){
          return implode(' ',$phones);
      }else{
          return "";
      }   
    }
}
