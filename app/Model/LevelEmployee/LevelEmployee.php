<?php

namespace App\Model\LevelEmployee;

use Illuminate\Database\Eloquent\Model;

class LevelEmployee extends Model
{

    protected $fillable=[
        'levelemployee'
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
