<?php

namespace App\Http\Controllers;

use App\photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{

      public function creatphotos(){

          $photo=photos::all();
          return view('photos.creat')->with([
              'photo'=>$photo,
          ]);

      }

      public function store(Request $request){

          $photo=new  photos();
          $photo->title=$request->title;
          $photo->save();
          if ($request->hasfile('image')){

              $file_full_name=$request->file('image')->getClientOriginalName();
              $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
              $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
              $photo->image='photos/'.$photo->id.'.'.$ext;
              $photo->save();
              $file=$request->file('image');
              $file->storeAs('public/photos/',$photo->id.'.'.$ext);
          }

          return redirect()->route('photo');
      }

      public function photo(){
          $photo=photos::all();
          return view('photos.photos')->with([
             'photo'=>$photo,
          ]);

      }

      public function deletephoto($photo_id){

          $photo=photos::find($photo_id);
          Storage::disk('public')->delete($photo->image);
          $photo->delete();
          return redirect()->back();

      }

      public function uytgetphoto($photo_id,Request $request){
          $photo=photos::find($photo_id);
          $photo->title=$request->title;
          $photo->save();
          if ($request->hasfile('image')){

              $file_full_name=$request->file('image')->getClientOriginalName();
              $filename = pathinfo($file_full_name,PATHINFO_FILENAME);
              $ext = $ext = pathinfo($file_full_name, PATHINFO_EXTENSION);
              $photo->image='photos/'.$photo->id.'.'.$ext;
              $photo->save();
              $file=$request->file('image');
              $file->storeAs('public/photos/',$photo->id.'.'.$ext);
          }
          return redirect()->route('photo');
      }

      public function editphoto($photo_id){
          $photo=photos::find($photo_id);

          return view('photos.edit')->with([
             'photo'=>$photo,
          ]);
      }

         //admin
    public function administrator(){
        $photo=photos::all();
          return view('photos.admin')->with([
              'photo'=>$photo,
          ]);
    }


}
