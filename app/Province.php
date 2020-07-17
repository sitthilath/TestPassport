<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey = "pr_id";
    protected $fillable = [
        'province'
    ];

    public function user()
    {
        return $this->hasMany('App\User','u_id','pr_id');
    }

    public function district()
    {
        return $this->hasMany('App\District','dr_id','pr_id');
    }
}
