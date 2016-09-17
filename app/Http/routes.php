<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $data['ocs'] = App\opencanpass::orderBy('date')->before()->get();
    return view('landing',$data);
});

Route::get('/opencampass/{{code}}', function () {
    return view('people-list');
});
