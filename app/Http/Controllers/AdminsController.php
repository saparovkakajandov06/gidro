<?php

namespace App\Http\Controllers;

use App\admins;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
       public function admin(){

           return view('administrator.admin')->with([

           ]);
       }
}
