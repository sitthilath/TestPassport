<?php

namespace App\Model\District;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    
    protected $fillable = [
        'district_name'
    ];
   
    public function user()
    {
        return $this->hasMany('App\User');
    }
   
    public function village()
       {
           return $this->hasMany('App\Model\Village\Village');
       }
   
       public function province()
       { 
           return $this->belongsTo('App\Model\Province\Province');
       }
}
