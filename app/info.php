<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    public function number()
    {
        return $this->hasMany('App\number',"person_id",'id');
    }
}
