<?php

namespace App\Http\Controllers;

use App\sahers;
use Illuminate\Http\Request;

class SahersController extends Controller
{
        public function creatsaher(){
            $saher=sahers::all();
            return view('saher.creat')->with([
               'saher'=>$saher,
            ]);
        }
        public function store(Request  $request){
            $saher=new sahers();
            $saher->name=$request->name;
            $saher->save();
            return redirect()->route('saheryuz');
        }
        public function saheryuz(){
            $saher=sahers::all();
            return view('saher.saher')->with([
               'saher'=>$saher,
            ]);
        }

        public function editsaher($saher_id){
            $saher=sahers::find($saher_id);
            return view('saher.edit')->with([
               'saher'=>$saher,
            ]);
        }

        public function uytgetsaher($saher_id,Request $request){
            $saher=sahers::find($saher_id);
            $saher->name=$request->name;
            $saher->save();
            return redirect()->route('saheryuz');
        }
        public function deletesaher($saher_id){
            $saher=sahers::find($saher_id);
            $saher->delete();
            return redirect()->back();
        }
}
