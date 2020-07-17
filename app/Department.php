<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $primaryKey = "dep_id";
    protected $fillable=[
        'department_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User','u_id','dep_id');
    }
}
