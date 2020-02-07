<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';
    protected $fillable = [
    'saloon_id','user_id','description','status','pic','category_id',
    'rating','price','package_name',
];
}
