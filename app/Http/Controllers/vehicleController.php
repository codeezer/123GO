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


    public function test($id){

        if ($id == 2){
            $two = array("id"=>2,"v_no"=>"Ba 2 Ka 8340","p_location"=>"23:67","c_location"=>"90:89","type"=>"Micro Bus","status"=>"Yellow","capacity"=>"25");
            echo (json_encode($two));}

        if ($id == 1){
            $one = '{"id":1,"v_no":"Ba 3 Kha 8320","p_location":"67:89","c_location":"47:89","type":"Mini Bus","status":"Red","capacity":"35"}';
            return $one;}
            
        if ($id == 3){
            $three = '{"id":3,"v_no":"Na 3 Kha 5320","p_location":"90:89","c_location":"83:34","type":"Mini Bus","status":"Green","capacity":"35"}';
            return $three;}
    }

    
}
