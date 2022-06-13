<?php

namespace App\Http\Controllers;

use App\howas;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function ashgabat(){
        $data = howas::where('saher_id', 1)->get();
        return response()->json($data, 200);
    }

    public function ahal(){
        $data = howas::where('saher_id', 3)->get();
        return response()->json($data, 200);
    }
    public function mary(){
        $data = howas::where('saher_id', 19)->get();
        return response()->json($data, 200);
    }
    public function lebap(){
        $data = howas::where('saher_id', 26)->get();
        return response()->json($data, 200);
    }
    public function dashoguz(){
        $data = howas::where('saher_id', 33)->get();
        return response()->json($data, 200);
    }
    public function balkan(){
        $data = howas::where('saher_id', 4)->get();
        return response()->json($data, 200);
    }


}
