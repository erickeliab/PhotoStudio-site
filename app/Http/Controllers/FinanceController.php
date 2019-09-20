<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Service;

class FinanceController extends Controller
{
    public function index(){
        $s = Service::find(20);
        $d = Order::all();
       
       // return $s->orders;
        
        
       
        return view('admin.financial')->with('order', $d);
    }
}
