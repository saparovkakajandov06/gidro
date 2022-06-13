<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class welayats extends Model
{
    public function caklama(){
        return $this->hasMany('App\caklama','welayat_id');
    }

}
