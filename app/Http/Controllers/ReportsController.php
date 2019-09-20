<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Order;
use App\User;
use App\MessageModel;
use App\Expens;
class reportsController extends Controller
{
   private $aprovednum;
   private $aprovedvalue;
   private  $nonaprovedvalue;
   private $nonaprovednum;
  
   private $servicesvalue;
   private $paidfullyprice;
   private $numpaid;
   
   private $paidpartialprice;
   private $partialremain;
   private $numpartial;
   private $allorders;
   private $allmsgs;
   private $value_all_orders;
   private $numexp;
   private $expvalue;
   private $profit;
   private $income;
   private $initial;
   private $final;
   
 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reportgate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation

        $this -> validate($request , [
            'initdate' => 'required',
            'date' => 'required'
        ]);

        $initial =  strtotime( $request->input('initdate'));
        $final =  strtotime( $request->input('date'));
       

            
        
           $from =  date('Y-m-d H:i:s',$initial); 
            $to = date('Y-m-d H:i:s',$final); 

           
           $services = Service::all();
           $messages = MessageModel::whereBetween('created_at', [$from, $to])->get();
           $users = User::whereBetween('created_at', [$from, $to])->get();
           $orders = Order::whereBetween('created_at', [$from, $to])->get();
           $expens = Expens::whereBetween('created_at', [$from, $to])->get();

          
            


        $dates = [
            'initdate' => $request->input('initdate'),
            'lastdate' => $request->input('date')

        ];
        $var = date('m/d/y');

        $da = ($dates['initdate'] > $var) ? 1 : 0 ;
        $du = ($dates['lastdate'] > $var) ? 1 : 0 ;

        $d = ($da || $du) ? 1 : 0 ;
       

        if(!$d){

            if($dates['initdate'] > $dates['lastdate']){
                $msg = 'The initial date should be earlier than the final date';
               return view('admin.reportgate')->with('error', $msg);
            }else
    
            // PROCESSING THE REQUIRED DETAILS TO THE REPORT

            //number of orders
            $allorders = count($orders);
           

            //value of all orders in money
            $value_all_orders = 0;
            foreach ($orders as $order ) {
                $value_all_orders = $value_all_orders + $order->services->price;
            }
            
            //number of approved orders
            $approved = $orders->where('approved','=',1);
            $aprovednum = count($approved);
            //value of approved orders 
            $aprovedvalue = 0;
            foreach ($approved as $approve) {
                $aprovedvalue =  $aprovedvalue + $approve->services->price;
            }
           

            //number of non approved orders

            $nonapproved = $orders->where('approved','=',0);
            $nonaprovednum = count($nonapproved);
            //value of nonaproved orders
            $nonaprovedvalue = 0;
            foreach ($nonapproved as $napprove) {
                $nonaprovedvalue =  $nonaprovedvalue + $napprove->services->price;
            }
           


            //number of all services
            $allservices = count($services);

            //value of all the services in money
            $servicesvalue = 0;
            foreach($services as $serv){
                $servicesvalue = $servicesvalue + $serv->price;
            }
            //number of fully paid orders
            //value of fully paid orders
            $paidfullyprice = 0;
            $numpaid = 0;
            foreach($orders as $odz){
                if($odz->paid == $odz->services->price){
                $paidfullyprice = $paidfullyprice + $odz->services->price;
                $numpaid++;
                }
            }
            //number of partial paid orders
            //Remain orders with partial payment
             //value of remain partial payment
            $paidpartialprice = 0;
            $partialremain = 0;
            $numpartial = 0;
            foreach($orders as $odiz){
                if(($odiz->paid < $odiz->services->price) && ($odiz->paid !== 0)){
                $paidpartialprice = $paidpartialprice + $odiz->services->price;
                $partialremain = $partialremain + ($odiz->services->price - $odiz->paid);
                $numpartial++;
                }
            }
            //value of partial paid orders
            //number of all the expenses
            $numexp = Expens::all()->count();
            $expvalue = 0;
           
            //value of expenses
            foreach($expens as $expe){
                $expvalue = $expvalue + $expe->amount;
            }
            
            //number of messages
            $allmsgs = MessageModel::all()->count();
            
            //total income
            $income = $paidfullyprice + $paidpartialprice;

            //net profit
            $profit = $income - $expvalue;
            //the datastructure array of data
            $datas = [
                'aprovednum' => $aprovednum,
                'aprovedvalue' => $aprovedvalue,
                'nonaprovedvalue' => $nonaprovedvalue,
                'nonaprovednum' => $nonaprovednum,
                'allservices' => $allservices,
                'servicesvalue' => $servicesvalue,
                'paidfullyprice' => $paidfullyprice,
                'numpaid' => $numpaid,
                'paidpartialprice' => $paidpartialprice,
                'partialremain' =>$partialremain,
                'numpartial' => $numpartial,
                'allorders' => $allorders,
                'allmsgs' => $allmsgs,
                'numexp' => $numexp,
                'allordervalue' => $value_all_orders,
                'expvalue' => $expvalue,
                'profit' => $profit,
                'income' => $income,
              
                'datefrom' => date('d-m-y',$initial),
                'dateto' => date('d-m-y',$final)
            ];
           
            return view('admin.report')->with('datas', $datas); 

        }else 
        {
            return view('admin.reportgate')->with('error','the dates shouldn\'t be after today ');
        }
    }
   
    public function create()
    {
        $datas = [
            'aprovednum' => $aprovednum,
            'aprovedvalue' => $aprovedvalue,
            'nonaprovedvalue' => $nonaprovedvalue,
            'nonaprovednum' => $nonaprovednum,
            'allservices' => $allservices,
            'servicesvalue' => $servicesvalue,
            'paidfullyprice' => $paidfullyprice,
            'numpaid' => $numpaid,
            'paidpartialprice' => $paidpartialprice,
            'partialremain' =>$partialremain,
            'numpartial' => $numpartial,
            'allorders' => $allorders,
            'allmsgs' => $allmsgs,
            'numexp' => $numexp,
            'allordervalue' => $value_all_orders,
            'expvalue' => $expvalue,
            'profit' => $profit,
            'income' => $income,
          
            'datefrom' => date('d-m-y',$initial),
            'dateto' => date('d-m-y',$final)
        ];
       
        return view('admin.report')->with('datas', $datas); 
      
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
