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





//Route::get('rbus-location','locationController@view');

Route::get('rbus-location/{id}',function($id){

	    $v_details = App\Bus::find($id);
    	
        echo $v_details->v_no .' @ '. $v_details->c_location;
    	#echo 'hello';

});


//Route::get('wbus-location', 'locationController@update');




























































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







