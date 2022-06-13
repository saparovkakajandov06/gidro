<?php

namespace App\Http\Controllers;

use App\Caks;
use App\howa_yagdays;
use App\Imports\CaksImport;
use App\ugurs;
use App\Wels;
use Carbon\Carbon;
use App\welayats;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;




class CaksController extends Controller
{
    public function creatcak(){
        $cak=Caks::all();
        $wel=Wels::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();


        return view('cak.create')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
        ]);
    }
    public function store(Request $request){
        $cak=new Caks();
        $cak->time=$request->time;
        $cak->temp=$request->temp;
        $cak->basys=$request->basys;
        $cak->cyg=$request->cyg;
        $cak->tizlik=$request->tizlik;
        $cak->aht=$request->aht;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id;
        $cak->ugur_id=$request->ugur_id;
        $cak->date=$request->date;
        $cak->save();
        $cak=new Caks();
        $cak->time=$request->time_one;
        $cak->temp=$request->temp_one;
        $cak->basys=$request->basys_one;
        $cak->cyg=$request->cyg_one;
        $cak->tizlik=$request->tizlik_one;
        $cak->aht=$request->aht_one;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id_one;
        $cak->ugur_id=$request->ugur_id_one;
        $cak->date=$request->date;
        $cak->save();
        $cak=new Caks();
        $cak->time=$request->time_two;
        $cak->temp=$request->temp_two;
        $cak->basys=$request->basys_two;
        $cak->cyg=$request->cyg_two;
        $cak->tizlik=$request->tizlik_two;
        $cak->aht=$request->aht_two;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id_two;
        $cak->ugur_id=$request->ugur_id_two;
        $cak->date=$request->date;
        $cak->save();
        $cak=new Caks();
        $cak->time=$request->time_three;
        $cak->temp=$request->temp_three;
        $cak->basys=$request->basys_three;
        $cak->cyg=$request->cyg_three;
        $cak->tizlik=$request->tizlik_three;
        $cak->aht=$request->aht_three;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id_three;
        $cak->ugur_id=$request->ugur_id_three;
        $cak->date=$request->date;
        $cak->save();
        $cak=new Caks();
        $cak->time=$request->time_four;
        $cak->temp=$request->temp_four;
        $cak->basys=$request->basys_four;
        $cak->cyg=$request->cyg_four;
        $cak->tizlik=$request->tizlik_four;
        $cak->aht=$request->aht_four;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id_four;
        $cak->ugur_id=$request->ugur_id_four;
        $cak->date=$request->date;
        $cak->save();
        $cak=new Caks();
        $cak->time=$request->time_five;
        $cak->temp=$request->temp_five;
        $cak->basys=$request->basys_five;
        $cak->cyg=$request->cyg_five;
        $cak->tizlik=$request->tizlik_five;
        $cak->aht=$request->aht_five;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id_five;
        $cak->ugur_id=$request->ugur_id_five;
        $cak->date=$request->date;
        $cak->save();
        $cak=new Caks();
        $cak->time=$request->time_six;
        $cak->temp=$request->temp_six;
        $cak->basys=$request->basys_six;
        $cak->cyg=$request->cyg_six;
        $cak->tizlik=$request->tizlik_six;
        $cak->aht=$request->aht_six;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id_six;
        $cak->ugur_id=$request->ugur_id_six;
        $cak->date=$request->date;
        $cak->save();
        return redirect()->route('caks');

    }

    public function caks(){
        $sene_one = Caks::where('wel_id', '=', 1)->latest('date')->limit(1)->first();
        $sene_two = Caks::where('wel_id', '=', 1)->latest('date')->skip(7)->limit(1)->first();

        $welayat_one=welayats::where('id', '=', 26)->get();
        $welayat_two=welayats::where('id', '=', 27)->get();








        $cak=Caks::all();
        $wel=Wels::all();
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();

        $ashgabat = Caks::where('wel_id', '=', 1)->latest('created_at')->first();
        $ahal = Caks::where('wel_id', '=', 2)->latest('created_at')->first();
        $mary = Caks::where('wel_id', '=', 3)->latest('created_at')->first();
        $lebap = Caks::where('wel_id', '=', 4)->latest('created_at')->first();
        $dashoguz = Caks::where('wel_id', '=', 5)->latest('created_at')->first();
        $balkan = Caks::where('wel_id', '=', 6)->latest('created_at')->first();




        return view('cak.caks')->with([

            'welayat_one'=>$welayat_one,
            'welayat_two'=>$welayat_two,


            'sene_one'=>$sene_one,
            'sene_two'=>$sene_two,

            'cak'=>$cak,
            'wel'=>$wel,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,



            'ashgabat'=>$ashgabat,
            'ahal'=>$ahal,
            'mary'=>$mary,
            'lebap'=>$lebap,
            'dashoguz'=>$dashoguz,
            'balkan'=>$balkan,
        ]);
    }

    public function deletecak($cak_id){
        $cak=Caks::find($cak_id);
        $cak->delete();
        return redirect()->back();
    }

    public function editcak($cak_id){
        $cak=Caks::find($cak_id);
        $wel=Wels::all();
        if ($cak->time == '05:00' or $cak->time == '23:00'){
            $howayagday=howa_yagdays::where('id','=', 1 )
                ->orWhere('id','=', 3)
                ->orWhere('id','=', 6)
                ->orWhere('id','=', 8)

                ->orWhere('id','=', 11)
                ->orWhere('id','=', 12)
                ->orWhere('id','=', 13)
                ->orWhere('id','=', 14)
                ->orWhere('id','=', 15)
                ->orWhere('id','=', 16)
                ->orWhere('id','=', 17)
                ->orWhere('id','=', 18)
                ->orWhere('id','=', 19)
                ->orWhere('id','=', 20)
                ->orWhere('id','=', 21)
                ->orWhere('id','=', 22)

                ->get();
        }
        elseif ($cak->time == '11:00' or $cak->time == '14:00' or $cak->time == '17:00'){
            $howayagday=howa_yagdays::where('id','=', 2 )
                ->orWhere('id','=', 4)
                ->orWhere('id','=', 5)
                ->orWhere('id','=', 7)
                ->orWhere('id','=', 10)
                ->orWhere('id','=', 14)

                ->orWhere('id','=', 11)
                ->orWhere('id','=', 12)
                ->orWhere('id','=', 13)
                ->orWhere('id','=', 15)
                ->orWhere('id','=', 16)
                ->orWhere('id','=', 17)
                ->orWhere('id','=', 18)
                ->orWhere('id','=', 19)
                ->orWhere('id','=', 20)
                ->orWhere('id','=', 21)
                ->orWhere('id','=', 22)

                ->get();
        }
        else{
            $howayagday=howa_yagdays::all();
        }
        $ugur=ugurs::all();
        return view('cak.edit')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
        ]);
    }

    public function editcak_two($cak_id){
        $cak=Caks::find($cak_id);
        $wel=Wels::all();
        if ($cak->time == '05:00' or $cak->time == '23:00'){
            $howayagday=howa_yagdays::where('id','=', 1 )
                ->orWhere('id','=', 3)
                ->orWhere('id','=', 6)
                ->orWhere('id','=', 8)

                ->orWhere('id','=', 11)
                ->orWhere('id','=', 12)
                ->orWhere('id','=', 13)
                ->orWhere('id','=', 14)
                ->orWhere('id','=', 15)
                ->orWhere('id','=', 16)
                ->orWhere('id','=', 17)
                ->orWhere('id','=', 18)
                ->orWhere('id','=', 19)
                ->orWhere('id','=', 20)
                ->orWhere('id','=', 21)
                ->orWhere('id','=', 22)

                ->get();
        }
        elseif ($cak->time == '11:00' or $cak->time == '14:00' or $cak->time == '17:00'){
            $howayagday=howa_yagdays::where('id','=', 2 )
                ->orWhere('id','=', 4)
                ->orWhere('id','=', 5)
                ->orWhere('id','=', 7)
                ->orWhere('id','=', 10)
                ->orWhere('id','=', 14)

                ->orWhere('id','=', 11)
                ->orWhere('id','=', 12)
                ->orWhere('id','=', 13)
                ->orWhere('id','=', 15)
                ->orWhere('id','=', 16)
                ->orWhere('id','=', 17)
                ->orWhere('id','=', 18)
                ->orWhere('id','=', 19)
                ->orWhere('id','=', 20)
                ->orWhere('id','=', 21)
                ->orWhere('id','=', 22)

                ->get();
        }
        else{
            $howayagday=howa_yagdays::all();
        }
        $ugur=ugurs::all();
        return view('cak.edit_two')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayagday'=>$howayagday,
            'ugur'=>$ugur,
        ]);
    }


    public function uytgetcak($cak_id,Request $request){

        $cak=Caks::find($cak_id);

        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();



        $cak->time=$request->time;
        $cak->temp=$request->temp;
        $cak->basys=$request->basys;
        $cak->cyg=$request->cyg;
        $cak->tizlik=$request->tizlik;
        $cak->aht=$request->aht;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id;
        $cak->ugur_id=$request->ugur_id;
//        $cak->date=$request->date;
        $cak->save();

        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    public function uytgetcak_two($cak_id,Request $request){

        $cak=Caks::find($cak_id);

        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();



        $cak->time=$request->time;
        $cak->temp=$request->temp;
        $cak->basys=$request->basys;
        $cak->cyg=$request->cyg;
        $cak->tizlik=$request->tizlik;
        $cak->aht=$request->aht;
        $cak->wel_id=$request->wel_id;
        $cak->hyagday_id=$request->hyagday_id;
        $cak->ugur_id=$request->ugur_id;
//        $cak->date=$request->date;
        $cak->save();

        return redirect()->action('CaksController@caks_detaile_two',[$wel->wel_id]);
    }


    /**
     * @param $wel_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function caks_detaile($wel_id)
    {
        $welayat_caklamalar = Caks::where('wel_id', '=', $wel_id)->latest('date')->limit(7)->get();
        $welayat_caklamalar_two = Caks::where('wel_id', '=', $wel_id)->latest('date')->skip(7)->limit(7)->get();

        $welayat_caklama_data = Caks::where('wel_id', '=', $wel_id)->latest('date')->limit(1)->get();
        $welayat_caklama_two_data = Caks::where('wel_id', '=', $wel_id)->latest('date')->skip(7)->limit(1)->get();


        $ashgabat = Caks::where('wel_id', '=', 1)->latest('created_at')->first();
        $ahal = Caks::where('wel_id', '=', 2)->latest('created_at')->first();
        $mary = Caks::where('wel_id', '=', 3)->latest('created_at')->first();
        $lebap = Caks::where('wel_id', '=', 4)->latest('created_at')->first();
        $dashoguz = Caks::where('wel_id', '=', 5)->latest('created_at')->first();
        $balkan = Caks::where('wel_id', '=', 6)->latest('created_at')->first();

//        $caks_order = Caks::where('wel_id', '=',$wel_id)->Orderby('date','asc')->Orderby('time', 'asc')->limit(7)->get();
        $caks = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        $data = Caks::where('wel_id', '=',$wel_id)->Orderby('date', 'desc')->limit(1)->get();



        $today = Carbon::today()->toDateString();
        $tomorrow = Carbon::tomorrow()->toDateString();

        $cakstwo = Caks::where('wel_id', '=',$wel_id)->latest('created_at')->first();

        $caklamas = Caks::all();
        $caklamastwo = Caks::all();
        $caklamas_tomorrow = Caks::all();

        $welayat_one=welayats::where('id', '=', 26)->get();
        $welayat_two=welayats::where('id', '=', 27)->get();








        return view('caklama.big_update')->with([
            'welayat_caklamalar'=>$welayat_caklamalar,
            'welayat_caklamalar_two'=>$welayat_caklamalar_two,

            'welayat_caklama_data'=>$welayat_caklama_data,
            'welayat_caklama_two_data'=>$welayat_caklama_two_data,

            'tomorrow'=>$tomorrow,
            'today'=>$today,
            'caklamas_tomorrow'=>$caklamas_tomorrow,

            'data'=>$data,

            'welayat_one'=>$welayat_one,
            'welayat_two'=>$welayat_two,




            'caks'=>$caks,


            'cakstwo'=>$cakstwo,
            'caklamas'=>$caklamas,
            'caklamastwo'=>$caklamastwo,
            'ashgabat'=>$ashgabat,
            'ahal'=>$ahal,
            'mary'=>$mary,
            'lebap'=>$lebap,
            'dashoguz'=>$dashoguz,
            'balkan'=>$balkan,

        ]);

    }

    public function caks_detaile_two($wel_id)
    {
        $welayat_caklamalar = Caks::where('wel_id', '=', $wel_id)->latest('date')->limit(7)->get();
        $welayat_caklamalar_two = Caks::where('wel_id', '=', $wel_id)->latest('date')->skip(7)->limit(7)->get();

        $welayat_caklama_data = Caks::where('wel_id', '=', $wel_id)->latest('date')->limit(1)->get();
        $welayat_caklama_two_data = Caks::where('wel_id', '=', $wel_id)->latest('date')->skip(7)->limit(1)->get();


        $ashgabat = Caks::where('wel_id', '=', 1)->latest('created_at')->first();
        $ahal = Caks::where('wel_id', '=', 2)->latest('created_at')->first();
        $mary = Caks::where('wel_id', '=', 3)->latest('created_at')->first();
        $lebap = Caks::where('wel_id', '=', 4)->latest('created_at')->first();
        $dashoguz = Caks::where('wel_id', '=', 5)->latest('created_at')->first();
        $balkan = Caks::where('wel_id', '=', 6)->latest('created_at')->first();

//        $caks_order = Caks::where('wel_id', '=',$wel_id)->Orderby('date','asc')->Orderby('time', 'asc')->limit(7)->get();
        $caks = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        $data = Caks::where('wel_id', '=',$wel_id)->Orderby('date', 'desc')->limit(1)->get();



        $today = Carbon::today()->toDateString();
        $tomorrow = Carbon::tomorrow()->toDateString();

        $cakstwo = Caks::where('wel_id', '=',$wel_id)->latest('created_at')->first();

        $caklamas = Caks::all();
        $caklamastwo = Caks::all();
        $caklamas_tomorrow = Caks::all();

        $welayat_one=welayats::where('id', '=', 26)->get();
        $welayat_two=welayats::where('id', '=', 27)->get();








        return view('caklama.big_update_two')->with([
            'welayat_caklamalar'=>$welayat_caklamalar,
            'welayat_caklamalar_two'=>$welayat_caklamalar_two,

            'welayat_caklama_data'=>$welayat_caklama_data,
            'welayat_caklama_two_data'=>$welayat_caklama_two_data,

            'tomorrow'=>$tomorrow,
            'today'=>$today,
            'caklamas_tomorrow'=>$caklamas_tomorrow,

            'data'=>$data,

            'welayat_one'=>$welayat_one,
            'welayat_two'=>$welayat_two,




            'caks'=>$caks,


            'cakstwo'=>$cakstwo,
            'caklamas'=>$caklamas,
            'caklamastwo'=>$caklamastwo,
            'ashgabat'=>$ashgabat,
            'ahal'=>$ahal,
            'mary'=>$mary,
            'lebap'=>$lebap,
            'dashoguz'=>$dashoguz,
            'balkan'=>$balkan,

        ]);

    }


    public function edit_cak_howayagday($cak_id){



        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);


        $wel=Wels::all();

        $howayag_gije=howa_yagdays::where('id','=', 1 )
                ->orWhere('id','=', 3)
                ->orWhere('id','=', 6)
                ->orWhere('id','=', 8)

                ->orWhere('id','=', 11)
                ->orWhere('id','=', 12)
                ->orWhere('id','=', 13)
                ->orWhere('id','=', 14)
                ->orWhere('id','=', 15)
                ->orWhere('id','=', 16)
                ->orWhere('id','=', 17)
                ->orWhere('id','=', 18)
                ->orWhere('id','=', 19)
                ->orWhere('id','=', 20)
                ->orWhere('id','=', 21)
                ->orWhere('id','=', 22)

                ->get();
        $howayag_gundiz=howa_yagdays::where('id','=', 2 )
                ->orWhere('id','=', 4)
                ->orWhere('id','=', 5)
                ->orWhere('id','=', 7)
                ->orWhere('id','=', 10)
                ->orWhere('id','=', 14)

                ->orWhere('id','=', 11)
                ->orWhere('id','=', 12)
                ->orWhere('id','=', 13)
                ->orWhere('id','=', 15)
                ->orWhere('id','=', 16)
                ->orWhere('id','=', 17)
                ->orWhere('id','=', 18)
                ->orWhere('id','=', 19)
                ->orWhere('id','=', 20)
                ->orWhere('id','=', 21)
                ->orWhere('id','=', 22)

                ->get();

        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_howayagday')->with([

            'cak_1'=>$cak_1,
            'cak_2'=>$cak_2,
            'cak_3'=>$cak_3,
            'cak_4'=>$cak_4,
            'cak_5'=>$cak_5,
            'cak_6'=>$cak_6,
            'cak_7'=>$cak_7,


            'wel'=>$wel,
            'howayag'=>$howayag,
            'howayag_gundiz'=>$howayag_gundiz,
            'howayag_gije'=>$howayag_gije,

            'ugur'=>$ugur,




        ]);
    }
    public function uytget_cak_howayagday($cak_id,Request $request){

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->hyagday_id = $request->hyagday_1;
        $cak_1->save();
        $cak_2->hyagday_id = $request->hyagday_2;
        $cak_2->save();
        $cak_3->hyagday_id = $request->hyagday_3;
        $cak_3->save();
        $cak_4->hyagday_id = $request->hyagday_4;
        $cak_4->save();
        $cak_5->hyagday_id = $request->hyagday_5;
        $cak_5->save();
        $cak_6->hyagday_id = $request->hyagday_6;
        $cak_6->save();
        $cak_7->hyagday_id = $request->hyagday_7;
        $cak_7->save();

        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    public function edit_cak_howayagday_two($cak_id){

        $cak=Caks::find($cak_id);

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);


        $wel=Wels::all();
        $howayag_gije=howa_yagdays::where('id','=', 1 )
            ->orWhere('id','=', 3)
            ->orWhere('id','=', 6)
            ->orWhere('id','=', 8)

            ->orWhere('id','=', 11)
            ->orWhere('id','=', 12)
            ->orWhere('id','=', 13)
            ->orWhere('id','=', 14)
            ->orWhere('id','=', 15)
            ->orWhere('id','=', 16)
            ->orWhere('id','=', 17)
            ->orWhere('id','=', 18)
            ->orWhere('id','=', 19)
            ->orWhere('id','=', 20)
            ->orWhere('id','=', 21)
            ->orWhere('id','=', 22)

            ->get();
        $howayag_gundiz=howa_yagdays::where('id','=', 2 )
            ->orWhere('id','=', 4)
            ->orWhere('id','=', 5)
            ->orWhere('id','=', 7)
            ->orWhere('id','=', 10)
            ->orWhere('id','=', 14)

            ->orWhere('id','=', 11)
            ->orWhere('id','=', 12)
            ->orWhere('id','=', 13)
            ->orWhere('id','=', 15)
            ->orWhere('id','=', 16)
            ->orWhere('id','=', 17)
            ->orWhere('id','=', 18)
            ->orWhere('id','=', 19)
            ->orWhere('id','=', 20)
            ->orWhere('id','=', 21)
            ->orWhere('id','=', 22)

            ->get();

        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_howayagday_two')->with([

            'cak_1'=>$cak_1,
            'cak_2'=>$cak_2,
            'cak_3'=>$cak_3,
            'cak_4'=>$cak_4,
            'cak_5'=>$cak_5,
            'cak_6'=>$cak_6,
            'cak_7'=>$cak_7,

            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'howayag_gundiz'=>$howayag_gundiz,
            'howayag_gije'=>$howayag_gije,
            'ugur'=>$ugur,




        ]);
    }
    public function uytget_cak_howayagday_two($cak_id,Request $request){




        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->hyagday_id = $request->hyagday_1;
        $cak_1->save();
        $cak_2->hyagday_id = $request->hyagday_2;
        $cak_2->save();
        $cak_3->hyagday_id = $request->hyagday_3;
        $cak_3->save();
        $cak_4->hyagday_id = $request->hyagday_4;
        $cak_4->save();
        $cak_5->hyagday_id = $request->hyagday_5;
        $cak_5->save();
        $cak_6->hyagday_id = $request->hyagday_6;
        $cak_6->save();
        $cak_7->hyagday_id = $request->hyagday_7;
        $cak_7->save();

        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile_two',[$wel->wel_id]);
    }

    public function edit_cak_basys($cak_id){

        $cak=Caks::find($cak_id);
        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->limit(7)->get();
        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_basys')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_basys($cak_id,Request $request){

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->basys = $request->basys_7;
        $cak_1->save();
        $cak_2->basys = $request->basys_6;
        $cak_2->save();
        $cak_3->basys = $request->basys_5;
        $cak_3->save();
        $cak_4->basys = $request->basys_4;
        $cak_4->save();
        $cak_5->basys = $request->basys_3;
        $cak_5->save();
        $cak_6->basys = $request->basys_2;
        $cak_6->save();
        $cak_7->basys = $request->basys_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    public function edit_cak_basys_two($cak_id){

        $cak=Caks::find($cak_id);
        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->skip(7)->limit(7)->get();
        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_basys_two')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_basys_two($cak_id,Request $request){

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->basys = $request->basys_7;
        $cak_1->save();
        $cak_2->basys = $request->basys_6;
        $cak_2->save();
        $cak_3->basys = $request->basys_5;
        $cak_3->save();
        $cak_4->basys = $request->basys_4;
        $cak_4->save();
        $cak_5->basys = $request->basys_3;
        $cak_5->save();
        $cak_6->basys = $request->basys_2;
        $cak_6->save();
        $cak_7->basys = $request->basys_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile_two',[$wel->wel_id]);
    }

    public function edit_cak_temp($cak_id){
        $cak=Caks::find($cak_id);

        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->limit(7)->get();

        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_temp')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_temp($cak_id,Request $request){


        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->temp = $request->temp_7;
        $cak_1->save();
        $cak_2->temp = $request->temp_6;
        $cak_2->save();
        $cak_3->temp = $request->temp_5;
        $cak_3->save();
        $cak_4->temp = $request->temp_4;
        $cak_4->save();
        $cak_5->temp = $request->temp_3;
        $cak_5->save();
        $cak_6->temp = $request->temp_2;
        $cak_6->save();
        $cak_7->temp = $request->temp_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();

        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    public function edit_cak_temp_two($cak_id){
        $cak=Caks::find($cak_id);

        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->skip(7)->limit(7)->get();

        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_temp_two')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_temp_two($cak_id,Request $request){


        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->temp = $request->temp_7;
        $cak_1->save();
        $cak_2->temp = $request->temp_6;
        $cak_2->save();
        $cak_3->temp = $request->temp_5;
        $cak_3->save();
        $cak_4->temp = $request->temp_4;
        $cak_4->save();
        $cak_5->temp = $request->temp_3;
        $cak_5->save();
        $cak_6->temp = $request->temp_2;
        $cak_6->save();
        $cak_7->temp = $request->temp_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();

        return redirect()->action('CaksController@caks_detaile_two',[$wel->wel_id]);
    }

    public function edit_cak_tizlik($cak_id){
        $cak=Caks::find($cak_id);
        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->limit(7)->get();
        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_tizlik')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_tizlik($cak_id,Request $request){

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->tizlik = $request->tizlik_7;
        $cak_1->save();
        $cak_2->tizlik = $request->tizlik_6;
        $cak_2->save();
        $cak_3->tizlik = $request->tizlik_5;
        $cak_3->save();
        $cak_4->tizlik = $request->tizlik_4;
        $cak_4->save();
        $cak_5->tizlik = $request->tizlik_3;
        $cak_5->save();
        $cak_6->tizlik = $request->tizlik_2;
        $cak_6->save();
        $cak_7->tizlik = $request->tizlik_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    public function edit_cak_tizlik_two($cak_id){
        $cak=Caks::find($cak_id);
        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->skip(7)->limit(7)->get();
        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_tizlik_two')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_tizlik_two($cak_id,Request $request){

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->tizlik = $request->tizlik_7;
        $cak_1->save();
        $cak_2->tizlik = $request->tizlik_6;
        $cak_2->save();
        $cak_3->tizlik = $request->tizlik_5;
        $cak_3->save();
        $cak_4->tizlik = $request->tizlik_4;
        $cak_4->save();
        $cak_5->tizlik = $request->tizlik_3;
        $cak_5->save();
        $cak_6->tizlik = $request->tizlik_2;
        $cak_6->save();
        $cak_7->tizlik = $request->tizlik_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile_two',[$wel->wel_id]);
    }

    public function edit_cak_cyg($cak_id){
        $cak=Caks::find($cak_id);
        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->limit(7)->get();
        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_cyg')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_cyg($cak_id,Request $request){

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->cyg = $request->cyg_7;
        $cak_1->save();
        $cak_2->cyg = $request->cyg_6;
        $cak_2->save();
        $cak_3->cyg = $request->cyg_5;
        $cak_3->save();
        $cak_4->cyg = $request->cyg_4;
        $cak_4->save();
        $cak_5->cyg = $request->cyg_3;
        $cak_5->save();
        $cak_6->cyg = $request->cyg_2;
        $cak_6->save();
        $cak_7->cyg = $request->cyg_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    public function edit_cak_cyg_two($cak_id){
        $cak=Caks::find($cak_id);
        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->skip(7)->limit(7)->get();
        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_cyg_two')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,

        ]);
    }
    public function uytget_cak_cyg_two($cak_id,Request $request){

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->cyg = $request->cyg_7;
        $cak_1->save();
        $cak_2->cyg = $request->cyg_6;
        $cak_2->save();
        $cak_3->cyg = $request->cyg_5;
        $cak_3->save();
        $cak_4->cyg = $request->cyg_4;
        $cak_4->save();
        $cak_5->cyg = $request->cyg_3;
        $cak_5->save();
        $cak_6->cyg = $request->cyg_2;
        $cak_6->save();
        $cak_7->cyg = $request->cyg_1;
        $cak_7->save();



        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile_two',[$wel->wel_id]);
    }

    public function edit_cak_ugur($cak_id){
    $cak=Caks::find($cak_id);

    $cak_1=Caks::find($cak_id);
    $cak_2=Caks::find($cak_id-1);
    $cak_3=Caks::find($cak_id-2);
    $cak_4=Caks::find($cak_id-3);
    $cak_5=Caks::find($cak_id-4);
    $cak_6=Caks::find($cak_id-5);
    $cak_7=Caks::find($cak_id-6);



    $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->limit(7)->get();
    $wel=Wels::all();
    $howayag=howa_yagdays::all();
    $ugur=ugurs::all();

    return view('cak.edit_cak_ugur')->with([
        'cak'=>$cak,
        'wel'=>$wel,
        'howayag'=>$howayag,
        'ugur'=>$ugur,
        'caklama'=>$caklama,
        'cak_1'=>$cak_1,
        'cak_2'=>$cak_2,
        'cak_3'=>$cak_3,
        'cak_4'=>$cak_4,
        'cak_5'=>$cak_5,
        'cak_6'=>$cak_6,
        'cak_7'=>$cak_7,

    ]);
}
    public function uytget_cak_ugur($cak_id,Request $request){


        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->ugur_id = $request->ugur_1;
        $cak_1->save();
        $cak_2->ugur_id = $request->ugur_2;
        $cak_2->save();
        $cak_3->ugur_id = $request->ugur_3;
        $cak_3->save();
        $cak_4->ugur_id = $request->ugur_4;
        $cak_4->save();
        $cak_5->ugur_id = $request->ugur_5;
        $cak_5->save();
        $cak_6->ugur_id = $request->ugur_6;
        $cak_6->save();
        $cak_7->ugur_id = $request->ugur_7;
        $cak_7->save();


        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    public function edit_cak_ugur_two($cak_id){
        $cak=Caks::find($cak_id);

        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);



        $caklama=Caks::where('wel_id', '=', $cak->wel_id)->latest('date')->limit(7)->get();
        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();

        return view('cak.edit_cak_ugur_two')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'caklama'=>$caklama,
            'cak_1'=>$cak_1,
            'cak_2'=>$cak_2,
            'cak_3'=>$cak_3,
            'cak_4'=>$cak_4,
            'cak_5'=>$cak_5,
            'cak_6'=>$cak_6,
            'cak_7'=>$cak_7,

        ]);
    }
    public function uytget_cak_ugur_two($cak_id,Request $request){


        $cak_1=Caks::find($cak_id);
        $cak_2=Caks::find($cak_id-1);
        $cak_3=Caks::find($cak_id-2);
        $cak_4=Caks::find($cak_id-3);
        $cak_5=Caks::find($cak_id-4);
        $cak_6=Caks::find($cak_id-5);
        $cak_7=Caks::find($cak_id-6);

        $cak_1->ugur_id = $request->ugur_1;
        $cak_1->save();
        $cak_2->ugur_id = $request->ugur_2;
        $cak_2->save();
        $cak_3->ugur_id = $request->ugur_3;
        $cak_3->save();
        $cak_4->ugur_id = $request->ugur_4;
        $cak_4->save();
        $cak_5->ugur_id = $request->ugur_5;
        $cak_5->save();
        $cak_6->ugur_id = $request->ugur_6;
        $cak_6->save();
        $cak_7->ugur_id = $request->ugur_7;
        $cak_7->save();


        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();


        return redirect()->action('CaksController@caks_detaile_two',[$wel->wel_id]);
    }

    public function edit_cak_date($cak_id){
        $cak=Caks::find($cak_id);
        $welayat = welayats::find($cak_id);

        $wel=Wels::all();
        $howayag=howa_yagdays::all();
        $ugur=ugurs::all();


        return view('cak.edit_cak_date')->with([
            'cak'=>$cak,
            'wel'=>$wel,
            'howayag'=>$howayag,
            'ugur'=>$ugur,
            'welayat'=>$welayat,

        ]);
    }
    public function uytget_cak_date($cak_id,Request $request){


        $cak=Caks::find($cak_id);
        $data_one = welayats::find($cak_id);
        $data_one->ady = $request->date;




        $id = Caks::where('id', '=', $cak_id)->latest('created_at')->first();
        $wel_id = $id->wel_id;
        $wel = Caks::where('wel_id', '=', $wel_id)->latest('created_at')->first();





        return redirect()->action('CaksController@caks_detaile',[$wel->wel_id]);
    }

    function import(Request $request)
    {
        $this->validate($request, [
            'select_file' =>'required|mimes: xls,xlsx'
        ]);

        $path = $request->file('select_file')->getRealPath();

        Excel::import(new CaksImport, $path);

        return back()->with('success', 'Excel faýlyň maglumatlary üstünlikli girizildi!');
    }

    function caklamalar()
    {
        $caklamalar = Caks::orderby('date', 'desc')->get();

        return view('caklama.index')->with([
            'caklamalar'=>$caklamalar,
        ]);
    }









}
