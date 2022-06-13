<?php

namespace App\Http\Controllers;

use App\caklama;
use App\welayats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaklamaController extends Controller
{
      public function creatcaklama(){
          $welayat=welayats::all();
          $caklama=caklama::all();
          return view('caklama.creat')->with([
              'welayat'=>$welayat,
              'caklama'=>$caklama,
          ]);
      }

      public function store(Request  $request){
          $caklama=new caklama();
          $caklama->sene=$request->sene;
          $caklama->welayat=$request->welayat;
          $caklama->save();
          if ($request->hasfile('image')){

              $file_full_name=$request->file('image')->getClientOriginalName();
              $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
              $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
              $caklama->image= 'caklamasurat/'.$caklama->id.'.'.$ext;
              $caklama->save();
              $file=$request->file('image');
              $file->storeAs('public/caklamasurat/',$caklama->id.'.'.$ext);
          }


          return redirect()->route('caklamayuz');
      }
      public function caklamayuz(){
          $welayat=welayats::all();
          $caklama=caklama::all();
          return view('caklama.caklama')->with([
             'caklama'=>$caklama,
              'welayat'=>$welayat,
          ]);
      }

      public function deletecaklama($caklama_id){
          $caklama=caklama::find($caklama_id);
          Storage::disk('public')->delete($caklama->image);
        $caklama->delete();
        return redirect()->back();
      }

      public function editcaklama($caklama_id){
          $welayat=welayats::all();
          $caklama=caklama::find($caklama_id);
          return view('caklama.edit')->with([
             'caklama'=>$caklama,
              'welayat'=>$welayat,
          ]);
      }


      public function uytgetcaklama($caklama_id,Request $request){
          $caklama=caklama::find($caklama_id);
          $caklama->sene=$request->sene;
          $caklama->welayat=$request->welayat;
          $caklama->save();
          if ($request->hasfile('image')){

              $file_full_name=$request->file('image')->getClientOriginalName();
              $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
              $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
              $caklama->image= 'caklamasurat/'.$caklama->id.'.'.$ext;
              $caklama->save();
              $file=$request->file('image');
              $file->storeAs('public/caklamasurat/',$caklama->id.'.'.$ext);

          }

          return redirect()->route('caklamayuz');

      }

}
