<?php

namespace App\Model\Area;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
   
    protected $fillable=[
        'area_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
