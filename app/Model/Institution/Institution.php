<?php

namespace App\Model\Institution;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{

    protected $fillable=[
        'institution_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User');
    }
}
