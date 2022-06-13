<?php

namespace App\Http\Controllers;

use App\ugurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UgursController extends Controller
{
       public function creatugur(){
           $ugur=ugurs::all();
           return view('ugur.creat')->with([
              'ugur'=>$ugur,
           ]);
       }
       public function store(Request  $request){
           $ugur=new ugurs();
           $ugur->ady=$request->ady;
           $ugur->save();

           if ($request->hasfile('image')){

               $file_full_name=$request->file('image')->getClientOriginalName();
               $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
               $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
               $ugur->image= 'ugursurat/'.$ugur->id.'.'.$ext;
               $ugur->save();
               $file=$request->file('image');
               $file->storeAs('public/ugursurat/',$ugur->id.'.'.$ext);
           }


           return redirect()->route('uguryuz');
       }
       public function uguryuz(){
           $ugur=ugurs::all();
           return view('ugur.ugur')->with([
              'ugur'=>$ugur,
           ]);
       }
       public function deleteugur($ugur_id){
           $ugur=ugurs::find($ugur_id);
           Storage::disk('public')->delete($ugur->image);
           $ugur->delete();
           return redirect()->back();
       }
       public function editugur($ugur_id){
           $ugur=ugurs::find($ugur_id);
           return view('ugur.edit')->with([
              'ugur'=>$ugur,
           ]);

       }

       public function uytgetugur($ugur_id,Request $request){
           $ugur=ugurs::find($ugur_id);
           $ugur->ady=$request->ady;
           $ugur->save();
            if ($request->hasfile('image')){

                $file_full_name=$request->file('image')->getClientOriginalName();
                $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
                $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
                $ugur->image= 'ugursurat/'.$ugur->id.'.'.$ext;
                $ugur->save();
                $file=$request->file('image');
                $file->storeAs('public/ugursurat/',$ugur->id.'.'.$ext);
            }

            return redirect()->route('uguryuz');
       }
}
