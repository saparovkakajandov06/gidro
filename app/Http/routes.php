Route::group(['middleware' => 'api'], function () {
Route::get('api', 'ApiController@index');
//other routes
});
