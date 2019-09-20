<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Service;

class bookingsController extends Controller
{
    public function add(Request $request)
    {
        $this -> validate($request,[
            'name'=> 'required',
            'service' => 'required',
            'date' => 'required',
            'phone' => 'required'
        ]);

        $order = new Order;
        $order -> username = $request -> input('name');
        $order -> phone = $request -> input('phone');
        
        $initdate = $request -> input('date');
        $data =[];

        $details = Service::all();
        //creating an array of data with the services key and value from the services table
            foreach($details as $detail){
               $data[$detail->serv_key] = $detail->serv_name;
            }
            
            $serv = $request -> input('service');
        $newdt = date("Y-m-d",strtotime($initdate));
        $order -> ocdate = $newdt;
        $order -> service = $data[$serv];
        $servdata = Service::where('serv_name',$data[$serv])->get();
        $order -> service_id = $servdata[0]->service_id;
          $order -> save();

        return redirect('/booking')->with('success','you have successful added an order');
    }
}
