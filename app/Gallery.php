<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    
    protected $table = 'gallery';
        protected $fillable = [
        'saloon_id','user_id','description','status','pic','category_id',
    ];
}