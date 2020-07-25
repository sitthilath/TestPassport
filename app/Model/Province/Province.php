<?php

namespace App\Model\Province;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    
    protected $fillable = [
        'province_name'
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function district()
    {
        return $this->hasMany('App\Model\District\District');
    }
}
