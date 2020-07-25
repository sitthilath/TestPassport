<?php

namespace App\Model\Village;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
  
    protected $fillable = [
        'village_name'
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function district()
    {
        return $this->belongsTo('App\Model\District\District');
    }
}
