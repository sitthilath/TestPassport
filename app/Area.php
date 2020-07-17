<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $primaryKey = "are_id";
    protected $fillable=[
        'area_name',
    ];

    public function user()
    {
        return $this->hasMany('App\user','u_id','are_id');
    }
}
