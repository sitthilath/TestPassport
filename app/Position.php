<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $primaryKey = "pos_id";
    protected $fillable=[
        'position_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User','u_id','pos_id');
    }

}
