<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Order;
use App\Service;

class OrdersController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retrieving all the orders
 
    $order = Order::all();
        
    //return redirect('/orders')->with('order',$order);
    return view('admin.oders')->with('order',$order);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addorder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        
        return redirect('/orders')->with('success','you have successful added an order');
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oders = Order::find($id);
       
        return view('admin.singleorder')->with('od',$oders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrfail($id);

        return view('admin.editorder')->with('od',$order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $order = Order::find($id);
        $order -> username = $request -> input('name');
        $order -> phone = $request -> input('phone');
       
        if($request -> input('paid')){

            $order -> paid = $request -> input('paid');
              
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
              $order -> save();
            return redirect('/finances')->with('success','You have successfully updated an order');
        }else 
            
            $order -> paid = 0.00;


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
          $order -> save();
        return redirect('/orders')->with('success','You have successfully updated an order');
    }

    public function approved(Request $request){
        $odr = Order::find($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $odr = Order::find($id);
        
        $odr->approved = 1;
      
        $odr->save();
        return redirect('/orders/'.$id)->with('success','order successfully Approved');
    }
}
