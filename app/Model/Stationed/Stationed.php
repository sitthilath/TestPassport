<?php

namespace App\Model\Stationed;

use Illuminate\Database\Eloquent\Model;

class Stationed extends Model
{
   
    protected $fillable=[
        'stationed_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
