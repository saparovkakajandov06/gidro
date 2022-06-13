<?php

namespace App\Http\Controllers;

use App\caklama;
use App\Caks;
use App\howa_yagdays;
use App\howas;
use App\index;
use App\news;
use App\photos;
use App\weathers;
use App\welayats;
use App\Wels;
use App\ugurs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index(){
        $welayat=welayats::where('id', '=', 22)->limit(1)->get();

        $welayat=welayats::take(1)->latest('updated_at')->get();

        $how=howas::all();

//        $caklamas=Caks::all();

       
        $today = Carbon::today()->toDateString();

        $ashgabat = Caks::where('wel_id', '=', 1)->latest('created_at')->limit(7)->get();
        
        $ahal = Caks::where('wel_id', '=', 2)->latest('created_at')->first();
        $mary = Caks::where('wel_id', '=', 3)->latest('created_at')->first();
        $lebap = Caks::where('wel_id', '=', 4)->latest('created_at')->first();
        $dashoguz = Caks::where('wel_id', '=', 5)->latest('created_at')->first();
        $balkan = Caks::where('wel_id', '=', 6)->latest('created_at')->first();



        return view('index')->with([
            'welayat'=>$welayat,
            'how'=>$how,
//            'caklamas'=>$caklamas,
            'today' => $today,

            'ashgabat'=>$ashgabat,
            'ahal'=>$ahal,
            'mary'=>$mary,
            'lebap'=>$lebap,
            'dashoguz'=>$dashoguz,
            'balkan'=>$balkan,



        ]);

    }

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


        $caks = Caks::where('wel_id', '=',$wel_id)->latest('created_at')->first();

        // $today = Carbon::tomorrow()->toDateString();
        $today = Carbon::today()->toDateString();
        $yesterday = Carbon::today()->toDateString();


        $cakstwo = Caks::where('wel_id', '=',$wel_id)->latest('created_at')->first();


        $caklamas = Caks::all();
        $caklamastwo = Caks::all();

        $welayat_one=welayats::where('id', '=', 26)->limit(1)->get();

        $welayat_two=welayats::where('id', '=', 27)->limit(1)->get();



        return view('caklama.cak')->with([

            'welayat_caklamalar'=>$welayat_caklamalar,
            'welayat_caklamalar_two'=>$welayat_caklamalar_two,

            'welayat_caklama_data'=>$welayat_caklama_data,
            'welayat_caklama_two_data'=>$welayat_caklama_two_data,

            'today'=>$today,
            'yesterday'=>$yesterday,
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
            'welayat_one'=>$welayat_one,
            'welayat_two'=>$welayat_two,

            ]);

    }






    public function about(){
        $ashgabat = Caks::where('wel_id', '=', 1)->latest('created_at')->first();
        $ahal = Caks::where('wel_id', '=', 2)->latest('created_at')->first();
        $mary = Caks::where('wel_id', '=', 3)->latest('created_at')->first();
        $lebap = Caks::where('wel_id', '=', 4)->latest('created_at')->first();
        $dashoguz = Caks::where('wel_id', '=', 5)->latest('created_at')->first();
        $balkan = Caks::where('wel_id', '=', 6)->latest('created_at')->first();

        $caks=Caks::all();
        $welayat=welayats::all();

        $photo=photos::all();
        return view('about')->with([

            'welayat'=>$welayat,
            'caks'=>$caks,
            'photo'=>$photo,

            'ashgabat'=>$ashgabat,
            'ahal'=>$ahal,
            'mary'=>$mary,
            'lebap'=>$lebap,
            'dashoguz'=>$dashoguz,
            'balkan'=>$balkan,

        ]);




    }

    public function listings(){



        $new=news::all();
        return view('listings')->with([
           'new'=>$new,
        ]);

    }

    public function contact(){
        $ashgabat = Caks::where('wel_id', '=', 1)->latest('created_at')->first();
        $ahal = Caks::where('wel_id', '=', 2)->latest('created_at')->first();
        $mary = Caks::where('wel_id', '=', 3)->latest('created_at')->first();
        $lebap = Caks::where('wel_id', '=', 4)->latest('created_at')->first();
        $dashoguz = Caks::where('wel_id', '=', 5)->latest('created_at')->first();
        $balkan = Caks::where('wel_id', '=', 6)->latest('created_at')->first();

        $caks=Caks::all();
        $welayat=welayats::all();

        return view('contact')->with([

            'welayat'=>$welayat,
            'caks'=>$caks,

            'ashgabat'=>$ashgabat,
            'ahal'=>$ahal,
            'mary'=>$mary,
            'lebap'=>$lebap,
            'dashoguz'=>$dashoguz,
            'balkan'=>$balkan,

        ]);


    }

        public function single($id){

        $new=news::find($id);
        return view('news.single')->with([
            'new'=>$new

        ]);

        }

        public function cak($id){
        $caks=Caks::all();
        $wel=Wels::find($id);;
        $howayagday=howa_yagdays::all();
        $ugur=ugurs::all();



        return view('caklama.cak')->with([
            'caks'=>$caks,
            'wel'=>$wel,
            'howa_yagday'=>$howayagday,
            'ugur'=>$ugur,

              ]);
          }


        public function changeLocale($locale)
        {
            session(['locale' => $locale]);
            App::setLocale($locale);
            return redirect()->back();

        }


}
