<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stationed extends Model
{
    protected $primaryKey = "sta_id";
    protected $fillable=[
        'stationed_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User','u_id','sta_id');
    }
}
