<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class howas extends Model
{
    protected $fillable = ['id', 'temp','basys','cyg','tizlik','saher_id','hyagday_id','ugur_id', 'ady_id'];
    public function saher(){
        return $this->belongsTo('App\sahers','saher_id');

    }
    public function howayagday(){
        return $this->belongsTo('App\howa_yagdays','hyagday_id');
    }
    public function ugur(){
        return $this->belongsTo('App\ugurs','ugur_id');
    }
}
