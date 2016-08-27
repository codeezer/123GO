<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

use Response;

use App\Http\Requests;

class vehicleController extends Controller
{
    //

    public function view($id){

        $v_details = App\Bus::find($id);
        #echo $v_details->v_no .' @ '. $v_details->c_location;

        $new = json_encode($v_details);
        return $new;
    }



    
}
