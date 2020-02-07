<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saloon extends Model
{
    
    protected $table = 'saloon';
        protected $fillable = [
        'saloon_name','address','user_id','city','logo',
    ];
}
