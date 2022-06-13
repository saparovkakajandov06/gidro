<?php

namespace App\Http\Controllers;

use App\howa_yagdays;
use App\howas;
use App\sahers;
use App\ugurs;
use App\welayats;
use Illuminate\Http\Request;

class HowasController extends Controller
{
       public function creathowa(){
           $how=howas::all();
           $ady=welayats::all();
           $saher=sahers::all();
           $howayagday=howa_yagdays::all();
           $ugur=ugurs::all();
            return view('howa.creat')->with([
               'how'=>$how,
                'ady'=>$ady,
                'saher'=>$saher,
                'howayagday'=>$howayagday,
                'ugur'=>$ugur,
            ]);
       }

       public function store(Request $request){
           $how=new howas();
           $how->temp=$request->temp;
           $how->basys=$request->basys;
           $how->cyg=$request->cyg;
           $how->tizlik=$request->tizlik;
           $how->saher_id=$request->saher_id;
           $how->hyagday_id=$request->hyagday_id;
           $how->ugur_id=$request->ugur_id;
           $how->ady_id=$request->ady_id;
           $how->save();
           return redirect()->route('howayuz');

       }


       public function howayuz(){
           $how=howas::all();
           $saher=sahers::all();
           $howayagday=howa_yagdays::all();
           $ugur=ugurs::all();

           return view('howa.howa')->with([
               'how'=>$how,
               'saher'=>$saher,
               'howayagday'=>$howayagday,
               'ugur'=>$ugur,
           ]);
       }

       public function deletehowa($how_id){
           $how=howas::find($how_id);
           $how->delete();
           return redirect()->back();
       }

       public function edithowa($how_id){
           $saher=sahers::all();
           $howayagday=howa_yagdays::all();
           $ugur=ugurs::all();
           $how=howas::find($how_id);
           return view('howa.edit')->with([

               'saher'=>$saher,
               'howayagday'=>$howayagday,
               'ugur'=>$ugur,
               'how'=>$how,
           ]);
       }

       public function uytgethowa($how_id,Request $request){
           $how=howas::find($how_id);
           $how->temp=$request->temp;
           $how->basys=$request->basys;
           $how->cyg=$request->cyg;
           $how->tizlik=$request->tizlik;
           $how->saher_id=$request->saher_id;
           $how->hyagday_id=$request->hyagday_id;
           $how->ugur_id=$request->ugur_id;
           $how->save();
           return redirect()->route('howayuz');
       }

       public function edittemp($how_id){
           $saher=sahers::all();
           $howayagday=howa_yagdays::all();
           $ugur=ugurs::all();
           $how=howas::find($how_id);
           return view('howa.edittemp')->with([
               'saher'=>$saher,
               'howayagday'=>$howayagday,
               'ugur'=>$ugur,
               'how'=>$how,
           ]);
       }

       public function uytgettemp($how_id,Request $request){
           $how=howas::find($how_id);
           $how->temp=$request->temp;
           $how->save();
           return redirect()->route('howayuz');
       }


    public function editbasys($how_id){
        $saher=sahers::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();
        $how=howas::find($how_id);
        return view('howa.editbasys')->with([
            'saher'=>$saher,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
            'how'=>$how,
        ]);
    }

    public function uytgetbasys($how_id,Request $request){
        $how=howas::find($how_id);
        $how->basys=$request->basys;
        $how->save();
        return redirect()->route('howayuz');
    }




    public function editcyg($how_id){
        $saher=sahers::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();
        $how=howas::find($how_id);
        return view('howa.editcyg')->with([
            'saher'=>$saher,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
            'how'=>$how,
        ]);
    }

    public function uytgetcyg($how_id,Request $request){
        $how=howas::find($how_id);
        $how->cyg=$request->cyg;
        $how->save();
        return redirect()->route('howayuz');
    }





    public function edittizlik($how_id){
        $saher=sahers::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();
        $how=howas::find($how_id);
        return view('howa.edittizlik')->with([
            'saher'=>$saher,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
            'how'=>$how,
        ]);
    }

    public function uytgettizlik($how_id,Request $request){
        $how=howas::find($how_id);
        $how->tizlik=$request->tizlik;
        $how->save();
        return redirect()->route('howayuz');
    }

    public function editsaher_id($how_id){
        $saher=sahers::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();
        $how=howas::find($how_id);
        return view('howa.editsaher')->with([
            'saher'=>$saher,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
            'how'=>$how,
        ]);
    }

    public function uytgetsaher_id($how_id,Request $request){
        $how=howas::find($how_id);
        $how->saher_id=$request->saher_id;
        $how->save();
        return redirect()->route('howayuz');
    }


    public function edithowayagday_id($how_id){
        $saher=sahers::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();
        $how=howas::find($how_id);
        return view('howa.edithowayagday')->with([
            'saher'=>$saher,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
            'how'=>$how,
        ]);
    }

    public function uytgethowayagday_id($how_id,Request $request){
        $how=howas::find($how_id);
        $how->hyagday_id=$request->hyagday_id;
        $how->save();
        return redirect()->route('howayuz');
    }


    public function editugur_id($how_id){
        $saher=sahers::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();
        $how=howas::find($how_id);
        return view('howa.editugur')->with([
            'saher'=>$saher,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
            'how'=>$how,
        ]);
    }

    public function uytgetugur_id($how_id,Request $request){
        $how=howas::find($how_id);
        $how->ugur_id=$request->ugur_id;
        $how->save();
        return redirect()->route('howayuz');
    }



    public function mowsum($id){
        $wel=welayats::find($id);
        $how=howas::all();


        return view('howa.mowsum')->with([
            'wel'=>$wel,
            'how'=>$how,
        ]);
    }








}
