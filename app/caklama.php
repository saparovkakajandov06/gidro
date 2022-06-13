<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caklama extends Model
{
    public function welayat(){
        return $this->belongsTo('App\welayats','welayat_id');
    }

}
