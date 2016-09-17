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

    public function view_all(){

        $v_details = App\Bus::all();
        #echo $v_details->v_no .' @ '. $v_details->c_location;

        $new = json_encode($v_details);
        return $new;
    }

    public function test_all(){
        
        $array = '[{"id":1,"v_no":"Ba 3 Kha 8320","p_location":"67:89","c_location":"47:89","type":"Mini Bus","status":"Red","capacity":"35","route_no":"14","p_time":"2016-05-03 22:59:52","c_time":"2016-05-03 22:59:52"},{"id":2,"v_no":"Ba 2 Ka 8340","p_location":"23:67","c_location":"90:89","type":"Micro Bus","status":"Yellow","capacity":"25","route_no":"23","p_time":"2016-05-03 22:59:52","c_time":"2016-05-03 22:59:52"},{"id":3,"v_no":"Ba 1 Kha 5320","p_location":"90:89","c_location":"83:34","type":"Mini Bus","status":"Green","capacity":"35","route_no":"Sajha1","p_time":"2016-05-03 22:59:52","c_time":"2016-05-03 22:59:52"}]';

        $temp_array = json_decode($array);
        

        return json_encode($temp_array);
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
