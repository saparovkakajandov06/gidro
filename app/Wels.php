<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wels extends Model
{
    public function cak(){
        return $this->hasMany('App\Caks','wel_id');

    }
}
