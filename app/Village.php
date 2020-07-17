<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{ 
    protected $primaryKey = "vill_id";
    protected $fillable = [
        'village'
    ];

    public function user()
    {
        return $this->hasMany('App\User','u_id','vill_id');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }
}
