<?php

namespace App\Http\Controllers;

use App\howa_yagdays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HowaYagdaysController extends Controller
{
          public function creathowayagdayy(){
              $howayagday=howa_yagdays::all();
              return view('howayagdayy.creat')->with([
                  'howayagday'=>$howayagday,
              ]);
          }
          public function store(Request  $request){
              $howayagday=new howa_yagdays();
              $howayagday->ady=$request->ady;
              $howayagday->save();
              if ($request->hasfile('images')){

                  $file_full_name=$request->file('images')->getClientOriginalName();
                  $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
                  $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
                  $howayagday->images= 'howayagdayysurat/'.$howayagday->id.'.'.$ext;
                  $howayagday->save();
                  $file=$request->file('images');
                  $file->storeAs('public/howayagdayysurat/',$howayagday->id.'.'.$ext);
              }
              return redirect()->route('howayagdayyuz');
          }
          public function howayagdayyuz(){
              $howayagday=howa_yagdays::all();
              return view('howayagdayy.howayagdayy')->with([
                 'howayagday'=>$howayagday,
              ]);
          }
          public function deletehowayag($howayagday_id){
              $howayagday=howa_yagdays::find($howayagday_id);
              Storage::disk('public')->delete($howayagday->images);
              $howayagday->delete();
              return redirect()->back();

          }
          public function edithowayag($howayagday_id){
              $howayagday=howa_yagdays::find($howayagday_id);
              return view('howayagdayy.edit')->with([
                 'howayagday'=>$howayagday,
              ]);
          }
     public function uytgethowayag($howayagday_id,Request $request){
              $howayagday=howa_yagdays::find($howayagday_id);
              $howayagday->ady=$request->ady;
              $howayagday->save();
         if ($request->hasfile('images')){

             $file_full_name=$request->file('images')->getClientOriginalName();
             $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
             $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
             $howayagday->images= 'howayagdayysurat/'.$howayagday->id.'.'.$ext;
             $howayagday->save();
             $file=$request->file('images');
             $file->storeAs('public/howayagdayysurat/',$howayagday->id.'.'.$ext);
         }
         return redirect()->route('howayagdayyuz');

     }
}
