<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

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
        $data = ['B'=>'Birthdays','G'=>'Graduations','A'=>'Anniversary','S'=>'Baby Shower','E'=>'Engagement','S'=>'Suprises','H'=>'Holydays'];
       $serv = $request -> input('service');
        $newdt = date("Y-m-d",strtotime($initdate));
        $order -> ocdate = $newdt;
        $order -> service = $data[$serv];
          $order -> save();

        return redirect('/booking')->with('success','you have successful added an order');
    }
}
