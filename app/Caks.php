<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caks extends Model
{
    public function wel(){
    return $this->belongsTo('App\Wels','wel_id');
    }

    public function howayagday(){
        return $this->belongsTo('App\howa_yagdays','hyagday_id');
    }
    public function ugur(){
        return $this->belongsTo('App\ugurs','ugur_id');
    }

}
