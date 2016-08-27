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
    return view('welcome');
});


Route::get('bus-details/{id}','vehicleController@view');

Route::post('bus-details',function(Request $request){
    
    #$data = Request::json()->all()

    $content = Request::all();
    $raw_data = Response::json($content);
    
    $data_array = json_decode($raw_data->content());

    dd($data_array->id);

});

























































Route::get('hello/{name}',function($name){
    echo 'Hello '.$name.' bro :)';
});

Route::get('test',function(){
    echo '<form action="test" method="POST">';
    echo '<input type="submit" value="submit">';
    echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
    echo '<input type="hidden" name="_method" value="PUT">';
    echo '<input type="hidden" name="_method" value="DELETE">';

    echo '</form>';
});

Route::post('test',function(){
    echo 'POSTED';
});

Route::put('test',function(){
    echo 'PUT';
});

Route::delete('test',function(){
    echo 'Deleted';
});







