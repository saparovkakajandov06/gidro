<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['set_locale'])->group(function (){

    Route::get('storage', function () {
        Artisan::call('storage:link');
    });

    Route::get('/clear_clear', function() {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });


    Route::get('/publish', function() {
        Artisan::call('config:publish');
        return "Cache is cleared";
    });

    Route::get('/composer', function() {
        Composer::call('update');
        return "install";
    });



//saher
    Route::get('creatsaher','SahersController@creatsaher')->name('creatsaher');
    Route::post('creatsaher/store','SahersController@store')->name('creatsaher.store');
    Route::get('saheryuz','SahersController@saheryuz')->name('saheryuz');
    Route::get('editsaher/{saher_id}','SahersController@editsaher')->name('editsaher');
    Route::post('uytgetsaher/{saher_id}','SahersController@uytgetsaher')->name('uytgetsaher');
    Route::get('deletesaher/{saher_id}','SahersController@deletesaher')->name('deletesaher');


//howa yagdayy
    Route::get('creathowayagdayy','HowaYagdaysController@creathowayagdayy')->name('creathowayagdayy');
    Route::post('creathowayagdayy/store','HowaYagdaysController@store')->name('creathowayagdayy.store');
    Route::get('howayagdayyuz','HowaYagdaysController@howayagdayyuz')->name('howayagdayyuz');
    Route::get('deletehowayag/{howayagday_id}','HowaYagdaysController@deletehowayag')->name('deletehowayag');
    Route::get('edithowayag/{howayagday_id}','HowaYagdaysController@edithowayag')->name('edithowayag');
    Route::post('uytgethowayag/{howayagday_id}','HowaYagdaysController@uytgethowayag')->name('uytgethowayag');



//ugur creat
    Route::get('creatugur','UgursController@creatugur')->name('creatugur');
    Route::post('creatugur/store','UgursController@store')->name('creatugur.store');
    Route::get('uguryuz','UgursController@uguryuz')->name('uguryuz');
    Route::get('deleteugur/{ugur_id}','UgursController@deleteugur')->name('deleteugur');
    Route::get('editugur/{ugur_id}','UgursController@editugur')->name('editugur');
    Route::post('uytgetugur/{ugur_id}','UgursController@uytgetugur')->name('uytgetugur');


//howa creat
    Route::get('creathowa','HowasController@creathowa')->name('creathowa');
    Route::post('creathowa/store','HowasController@store')->name('creathowa.store');
    Route::get('howayuz','HowasController@howayuz')->name('howayuz');
    Route::get('deletehowa/{how_id}','HowasController@deletehowa')->name('deletehowa');
    Route::get('edithowa/{how_id}','HowasController@edithowa')->name('edithowa');
    Route::post('uytgethowa/{how_id}','HowasController@uytgethowa')->name('uytgethowa');


//uytget temperatura
    Route::get('edittemp/{how_id}','HowasController@edittemp')->name('edittemp');
    Route::post('uytgettemp/{how_id}','HowasController@uytgettemp')->name('uytgettemp');


//uytget basys
    Route::get('editbasys/{how_id}','HowasController@editbasys')->name('editbasys');
    Route::post('uytgetbasys/{how_id}','HowasController@uytgetbasys')->name('uytgetbasys');


//uytget cyglylyk
    Route::get('editcyg/{how_id}','HowasController@editcyg')->name('editcyg');
    Route::post('uytgetcyg/{how_id}','HowasController@uytgetcyg')->name('uytgetcyg');


//uytget tizlik
    Route::get('edittizlik/{how_id}','HowasController@edittizlik')->name('edittizlik');
    Route::post('uytgettizlik/{how_id}','HowasController@uytgettizlik')->name('uytgettizlik');

//uytget saher_id
    Route::get('editsaher_id/{how_id}', 'HowasController@editsaher_id')->name('editsaher_id');
    Route::post('uytgetsaher_id/{how_id}','HowasController@uytgetsaher_id')->name('uytgetsaher_id');

//uytget howa_id
    Route::get('edithowayagday_id/{how_id}', 'HowasController@edithowayagday_id')->name('edithowayagday_id');
    Route::post('uytgethowayagday_id/{how_id}','HowasController@uytgethowayagday_id')->name('uytgethowayagday_id');

//uytget ugur_id
    Route::get('editugur_id/{how_id}', 'HowasController@editugur_id')->name('editugur_id');
    Route::post('uytgetugur_id/{how_id}','HowasController@uytgetugur_id')->name('uytgetugur_id');

//mowsum
    Route::get('mowsum/{id}','HowasController@mowsum')->name('mowsum');

// Detale caklama
    Route::get('edit_cak_howayagday/{cak_id}','CaksController@edit_cak_howayagday')->name('edit_cak_howayagday');
    Route::post('uytget_cak_howayagday/{cak_id}','CaksController@uytget_cak_howayagday')->name('uytget_cak_howayagday');

    Route::get('edit_cak_basys/{cak_id}','CaksController@edit_cak_basys')->name('edit_cak_basys');
    Route::post('uytget_cak_basys/{cak_id}','CaksController@uytget_cak_basys')->name('uytget_cak_basys');

    Route::get('edit_cak_temp/{cak_id}','CaksController@edit_cak_temp')->name('edit_cak_temp');
    Route::post('uytget_cak_temp/{cak_id}','CaksController@uytget_cak_temp')->name('uytget_cak_temp');

    Route::get('edit_cak_tizlik/{cak_id}','CaksController@edit_cak_tizlik')->name('edit_cak_tizlik');
    Route::post('uytget_cak_tizlik/{cak_id}','CaksController@uytget_cak_tizlik')->name('uytget_cak_tizlik');

    Route::get('edit_cak_cyg/{cak_id}','CaksController@edit_cak_cyg')->name('edit_cak_cyg');
    Route::post('uytget_cak_cyg/{cak_id}','CaksController@uytget_cak_cyg')->name('uytget_cak_cyg');

    Route::get('edit_cak_ugur/{cak_id}','CaksController@edit_cak_ugur')->name('edit_cak_ugur');
    Route::post('uytget_cak_ugur/{cak_id}','CaksController@uytget_cak_ugur')->name('uytget_cak_ugur');

    Route::get('edit_cak_date/{cak_id}','CaksController@edit_cak_date')->name('edit_cak_date');
    Route::post('uytget_cak_date/{cak_id}','CaksController@uytget_cak_date')->name('uytget_cak_date');


    Route::get('edit_cak_temp_two/{cak_id}','CaksController@edit_cak_temp_two')->name('edit_cak_temp_two');
    Route::post('uytget_cak_temp_two/{cak_id}','CaksController@uytget_cak_temp_two')->name('uytget_cak_temp_two');

    Route::get('edit_cak_basys_two/{cak_id}','CaksController@edit_cak_basys_two')->name('edit_cak_basys_two');
    Route::post('uytget_cak_basys_two/{cak_id}','CaksController@uytget_cak_basys_two')->name('uytget_cak_basys_two');

    Route::get('edit_cak_tizlik_two/{cak_id}','CaksController@edit_cak_tizlik_two')->name('edit_cak_tizlik_two');
    Route::post('uytget_cak_tizlik_two/{cak_id}','CaksController@uytget_cak_tizlik_two')->name('uytget_cak_tizlik_two');

    Route::get('edit_cak_cyg_two/{cak_id}','CaksController@edit_cak_cyg_two')->name('edit_cak_cyg_two');
    Route::post('uytget_cak_cyg_two/{cak_id}','CaksController@uytget_cak_cyg_two')->name('uytget_cak_cyg_two');

    Route::get('edit_cak_ugur_two/{cak_id}','CaksController@edit_cak_ugur_two')->name('edit_cak_ugur_two');
    Route::post('uytget_cak_ugur_two/{cak_id}','CaksController@uytget_cak_ugur_two')->name('uytget_cak_ugur_two');

    Route::get('edit_cak_howayagday_two/{cak_id}','CaksController@edit_cak_howayagday_two')->name('edit_cak_howayagday_two');
    Route::post('uytget_cak_howayagday_two/{cak_id}','CaksController@uytget_cak_howayagday_two')->name('uytget_cak_howayagday_two');


//import_excel

    Route::post('/import_excel/import', 'CaksController@import');

    Route::get('/caklamalar', 'CaksController@caklamalar')->name('caklamalar');

//users
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/create_user', 'UserController@create')->name('create_user');
    Route::post('/store_user', 'UserController@store')->name('store_user');
    Route::get('/delete_user/{user_id}', 'UserController@delete')->name('delete_user');

    /* logs */
    Route::get('/logs','LogsController@logs')->name('logs');
    Route::post('/logsApi','LogsController@logsApi')->name('log.api');
    /* logs */


    Auth::routes();


//welayatlar creat
    Route::get('creatwelayat','WelayatsController@creatwelayat')->name('creatwelayat');
    Route::post('creatwelayat/store','WelayatsController@store')->name('creatwelayat.store');
    Route::get('welayatyuz','WelayatsController@welayatyuz')->name('welayatyuz');
    Route::get('deletewel/{welayat_id}','WelayatsController@deletewel')->name('deletewel');
    Route::get('editwel/{welayat_id}','WelayatsController@editwel')->name('editwel');
    Route::post('uytgetwel/{welayat_id}','WelayatsController@uytgetwel')->name('uytgetwel');

//caklama creat
    Route::get('creatcaklama','CaklamaController@creatcaklama')->name('creatcaklama');
    Route::post('creatcaklama/store','CaklamaController@store')->name('creatcaklama.store');
    Route::get('caklamayuz','CaklamaController@caklamayuz')->name('caklamayuz');
    Route::get('deletecaklama/{caklama_id}','CaklamaController@deletecaklama')->name('deletecaklama');
    Route::get('editcaklama/{caklama_id}','CaklamaController@editcaklama')->name('editcaklama');
    Route::post('uytgetcaklama/{caklama_id}','CaklamaController@uytgetcaklama')->name('uytgetcaklama');

    //cak creat

    Route::get('creatcak','CaksController@creatcak')->name('creatcak');
    Route::post('creatcak/store','CaksController@store')->name('creatcak.store');
    Route::get('caks','CaksController@caks')->name('caks');
    Route::get('deletecak/{caklama_id}','CaksController@deletecak')->name('deletecak');

    Route::get('editcak/{caklama_id}','CaksController@editcak')->name('editcak');
    Route::post('uytgetcak/{caklama_id}','CaksController@uytgetcak')->name('uytgetcak');

    Route::get('editcak_two/{caklama_id}','CaksController@editcak_two')->name('editcak_two');
    Route::post('uytgetcak_two/{caklama_id}','CaksController@uytgetcak_two')->name('uytgetcak_two');




//caklama id-si
    Route::get('caks.caks_detaile.{wel_id}','IndexController@caks_detaile')->name('caks_detaile');
    Route::get('admin.caks_detaile.{wel_id}','CaksController@caks_detaile')->name('admin_caks_detaile');
    Route::get('admin.caks_detaile_two.{wel_id}','CaksController@caks_detaile_two')->name('admin_caks_detaile_two');


    Route::group(['middleware' =>['auth']], function () {

//photos create
        Route::get('creatphotos','PhotosController@creatphotos')->name('creatphotos');
        Route::post('creatphotos/store','PhotosController@store')->name('creatphotos.store');
        Route::get('photo','PhotosController@photo')->name('photo');
        Route::get('deletephoto{photo_id}','PhotosController@deletephoto')->name('deletephoto');
        Route::post('uytgetphoto{photo_id}','PhotosController@uytgetphoto')->name('uytgetphoto');
        Route::get('editphoto{photo_id}','PhotosController@editphoto')->name('editphoto');

        //wels

        Route::get('creatwel','WelsController@creatwel')->name('creatwel');
        Route::post('creatwel/store','WelsController@store')->name('creatwel.store');
        Route::get('wels','WelsController@wels')->name('wels');
        Route::get('deletewels/{wels_id}','WelsController@deletewels')->name('deletewels');
        Route::get('editwels/{wels_id}','WelsController@editwels')->name('editwels');
        Route::post('updatewels/{wels_id}','WelsController@updatewels')->name('updatewels');





        Route::get('/home', 'HomeController@index')->name('home');

    });

//user

    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/about', 'IndexController@about')->name('about');
    Route::get('/listings', 'IndexController@listings')->name('listings');
    Route::get('/contact', 'IndexController@contact')->name('contact');

    Route::get('/refresh_captcha', 'Auth\loginController@refreshCaptcha')->name('refresh');

    Route::get('locale/{locale}', 'IndexController@changeLocale')->name('locale');

});




