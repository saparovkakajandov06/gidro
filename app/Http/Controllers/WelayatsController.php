<?php

namespace App\Http\Controllers;

use App\welayats;
use Illuminate\Http\Request;

class WelayatsController extends Controller
{
       public function creatwelayat(){
           $welayat=welayats::all();
           return view('welayat.creat')->with([
              'welayat'=>$welayat,
           ]);
       }
       public function store(Request  $request){
           $welayat=new welayats();
           $welayat->ady=$request->ady;
           $welayat->wagt=$request->wagt;
           $welayat->save();
           return redirect()->route('welayatyuz');
       }

       public function welayatyuz(){
            $welayat=welayats::all();
           return view('welayat.welayat')->with([
              'welayat'=>$welayat,
           ]);
       }

       public function deletewel($welayat_id)
       {
           $welayat=welayats::find($welayat_id);
           $welayat->delete();
           return redirect()->back();
       }

       public function editwel($welayat_id){
           $welayat=welayats::find($welayat_id);
           return view('welayat.edit')->with([
              'welayat'=>$welayat,
           ]);
       }
       public function uytgetwel($welayat_id,Request $request){
           $welayat=welayats::find($welayat_id);
           $welayat->ady=$request->ady;
           $welayat->wagt=$request->wagt;
           $welayat->save();
           return redirect()->route('welayatyuz');
       }
}
