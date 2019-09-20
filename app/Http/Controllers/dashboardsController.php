<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class dashboardsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $oder = Order::orderBy('created_at', 'desc')->take(5)->get();
        
        return view('admin.dashboard')->with('orders',$oder);
    }
}
