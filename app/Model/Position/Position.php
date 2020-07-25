<?php

namespace App\Model\Position;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    
    protected $fillable=[
        'position_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
