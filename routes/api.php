<?php

use App\howas;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ashgabat', 'ApiController@ashgabat')->name('ashgabat');
Route::get('ahal', 'ApiController@ahal')->name('ahal');
Route::get('mary', 'ApiController@mary')->name('mary');
Route::get('lebap', 'ApiController@lebap')->name('lebap');
Route::get('dashoguz', 'ApiController@dashoguz')->name('dashoguz');
Route::get('balkan', 'ApiController@balkan')->name('balkan');


//Route::get('/ashgabat', function (){
//    return $data = howas::where('saher_id', 1)->get();
//
//});


//Route::get('/', function (){
//    $turkmenbasy_howa = howas::where('saher_id', '=', 4)->latest('created_at')->first();
//    return $turkmenbasy_howa;
//});

