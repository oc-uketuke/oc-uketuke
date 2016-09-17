<?php

use Illuminate\Http\Request;

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

Route::get('/api/people',function(){
	$result['people'] = App\people::all();
	return $result;
});

Route::get('/api/opencanpass/{id}/people',function($id){
	return App\opencanpass::find($id)->people;
});

Route::put('/api/people/entry',function(Request $request){
	App\people::find($request->get('id'))->update(['entry'=>'true']);
	return;
});

Route::put('/api/people/taiken',function(Request $request){
	$data = $request->all();
	return App\people::find($data['id'])->updateTaiken($data['taiken_num'],$data['taiken_id']);
});

