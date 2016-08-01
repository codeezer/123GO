<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class locationController extends Controller
{
    //
    public function view()
    {
    	# code...
    	$bus_location = App\Bus::find(1);

    	#print_r($bus_location);

    	echo 'hello';
    }

}
