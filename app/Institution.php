<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $primaryKey = "ins_id";
    protected $fillable=[
        'institution_name',
    ];

    public function user()
    {
        return $this->hasMany('App\User','u_id','ins_id');
    }
}
