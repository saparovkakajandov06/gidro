<?php

namespace App\Http\Controllers;

use App\c;
use App\Wels;
use Illuminate\Http\Request;

class WelsController extends Controller
{
    public function creatwel(){
        $wels=Wels::all();
        return view('wels.create')->with([
            'wels'=>$wels,
        ]);
    }
    public function store(Request  $request){
        $wels=new Wels();
        $wels->name=$request->name;
        $wels->save();
        return redirect()->route('wels');
    }
    public function wels(){
        $wels=Wels::all();
        return view('wels.wels')->with([
            'wels'=>$wels,
        ]);
    }

    public function editwels($wels_id){
        $wels=Wels::find($wels_id);
        return view('wels.edit')->with([
            'wels'=>$wels,
        ]);
    }

    public function updatewels($wels_id,Request $request){
        $wels=Wels::find($wels_id);
        $wels->name=$request->name;
        $wels->save();
        return redirect()->route('wels');
    }
    public function deletewels($wels_id){
        $wels=Wels::find($wels_id);
        $wels->delete();
        return redirect()->back();
    }
}
