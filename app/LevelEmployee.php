<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelEmployee extends Model
{
    protected $primaryKey = "lev_id";
    protected $fillable=[
        'level_emp'
    ];

    public function user()
    {
        return $this->hasMany('App\User','u_id','lev_id');
    }
}
