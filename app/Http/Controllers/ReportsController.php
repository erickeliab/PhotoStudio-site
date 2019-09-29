<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Order;
use App\User;
use App\Transaction;
use App\MessageModel;
use App\Expens;
use PDF;
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

        $dateone = $request->input('initdate');
        $datetwo = $request->input('date');

        $initial =  strtotime( $request->input('initdate'));
        $final =  strtotime( $request->input('date'));
       

            
        
           $from =  date('Y-m-d H:i:s',$initial); 
            $to = date('Y-m-d H:i:s',$final); 

           
           $services = Service::all();

           $messages = MessageModel::whereBetween('created_at', [$from, $to])->get();
           $users = User::whereBetween('created_at', [$from, $to])->get();
           $orders = Order::whereBetween('created_at', [$from, $to])->get();
           $expens = Expens::whereBetween('created_at', [$from, $to])->get();
           $trans = Transaction::whereBetween('created_at', [$from, $to])->get();

          
            


        $dates = [
            'initdate' => $request->input('initdate'),
            'lastdate' => $request->input('date')

        ];
        $var = date('m/d/y');

        $da = ($dates['initdate'] > $var) ? 1 : 0 ;
        $du = ($dates['lastdate'] > $var) ? 1 : 0 ;

        $d = ($da || $du) ? 1 : 0 ;
       

            
        $reporttype = $request->input('reporttype');
        $dat = ['1'=>'Approved','2'=>'Disapproved','3'=>'Partial','4'=>'Full','5'=>'Expenses','6'=>'Transaction'];
        if($reporttype == 'Approved'){

        $orderz =  $orders->where('approved','=','1');
            $dis = [
                'disy' => $orders->where('approved','=','1'),
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $orderz->count(),
                'dateone' => $dateone,
                'datetwo' => $datetwo

            ];
            //$pdf = PDF::loadView('admin.partialreport', $dis);
        
            //    return $pdf->download('repo.pdf');
          
          //  return $pdf->download('repo.pdf');
            return view('admin.report')->with('order', $dis); 


        }
        if ($reporttype == 'Expenses'){
         

            $dis = [
                'disy' => $expens,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $expens->count(),
                'dateone' => $dateone,
                'datetwo' => $datetwo

            ];
           // return $expens;
            $pdf = PDF::loadView('admin.expencepdf', $dis);
          
                //return $pdf->download('repo.pdf');
                //return $datetwo;
               return view('admin.expencereport')->with('order', $dis);
           
            
        }
        if ($reporttype == 'Transaction'){
         

            $dis = [
                'disy' => $trans,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $trans->count(),
                'dateone' => $dateone,
                'datetwo' => $datetwo
            ];

       // return $dis;
            $pdf = PDF::loadView('admin.odreport', $dis);
           
               // return $pdf->download('repo.pdf');
                   
             return view('admin.transactionreport')->with('order', $dis);
           
            
        } if($reporttype == 'Disapproved'){

            $orderz =  $orders->where('approved','=','0');
                $dis = [
                    'disy' => $orders->where('approved','=','1'),
                    'datefrom' => date('d-m-y',$initial),
                    'cat' => $reporttype,
                    'dateto' => date('d-m-y',$final),
                    'records' => $orderz->count(),
                    'dateone' => $dateone,
                    'datetwo' => $datetwo
    
                ];
                //$pdf = PDF::loadView('admin.partialreport', $dis);
            
                //    return $pdf->download('repo.pdf');
              
              //  return $pdf->download('repo.pdf');
                return view('admin.report')->with('order', $dis); 
    
    
            }elseif ($reporttype == 'Partial'){

       
             
            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $orders->count(),
                'dateone' => $dateone,
                'datetwo' => $datetwo

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
      
                   return view('admin.report')->with('order', $dis); 
             }
             elseif ($reporttype == 'Full'){

            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'dateto' => date('d-m-y',$final),
                'cat' => $reporttype,
                'records' => $orders->count(),
                'dateone' => $dateone,
                'datetwo' => $datetwo
                
            ];
           // $pdf = PDF::loadView('admin.partialreport', $dis);
          
             //   return $pdf->download('repo.pdf');
            
            return view('admin.report')->with('order', $dis); 
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
       // return $id;
       $dat = ['1'=>'Approved','2'=>'Disapproved','3'=>'Partial','4'=>'Full','5'=>'Expenses','6'=>'Transaction'];
    
        return view('admin.reportgate')->with('idy',$dat[$id]);
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
        $initial =  strtotime( $request->input('initdate'));
        $final =  strtotime( $request->input('date'));
       

            
        
           $from =  date('Y-m-d H:i:s',$initial); 
            $to = date('Y-m-d H:i:s',$final); 

           
           $services = Service::all();
           $messages = MessageModel::whereBetween('created_at', [$from, $to])->get();
           $users = User::whereBetween('created_at', [$from, $to])->get();
           $orders = Order::whereBetween('created_at', [$from, $to])->get();
           $expens = Expens::whereBetween('created_at', [$from, $to])->get();
           $trans = Transaction::whereBetween('created_at', [$from, $to])->get();

           $reporttype = $id;
           $dat = ['1'=>'Approved','2'=>'Disapproved','3'=>'Partial','4'=>'Full','5'=>'Expenses','6'=>'Transaction'];
          

        if ($reporttype == 'Partial'){

       
             
            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $orders->count(),

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
      if($request->input('download')){
                return $pdf->download('repo.pdf');
      }
                   return redirect('/reports')->with('order', $dis); 
             }
        return $id;
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
