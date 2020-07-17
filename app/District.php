<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $primaryKey = "dr_id";
 protected $fillable = [
     'district'
 ];

 public function user()
 {
     return $this->hasMany('App\User','u_id','dr_id');
 }

 public function village()
    {
        return $this->hasMany('App\Village','vill_id','dr_id');
    }

    public function province()
    { 
        return $this->belongsTo('App\Province');
    }


}
