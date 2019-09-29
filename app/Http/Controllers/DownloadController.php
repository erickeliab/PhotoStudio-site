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

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validation

       // return $request->input('initdat');
         $request->input('reporttype');
          $request->input('dat');
        $request->input('download');


        $initial =  strtotime( $request->input('initdat'));
        $final =  strtotime( $request->input('dat'));


           $from =  date('Y-m-d H:i:s',$initial); 
            $to = date('Y-m-d H:i:s',$final); 
          
             
           $services = Service::all();
           $messages = MessageModel::whereBetween('created_at', [$from, $to])->get();
           $users = User::whereBetween('created_at', [$from, $to])->get();
           $orders = Order::whereBetween('created_at', [$from, $to])->get();
           $expens = Expens::whereBetween('created_at', [$from, $to])->get();
           $trans = Transaction::whereBetween('created_at', [$from, $to])->get();
  if($request->input('download') == '1'){
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
                

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
        
               return $pdf->download('repo.pdf');
         
        }elseif ($reporttype == 'Transaction'){
         

            $dis = [
                'disy' => $trans,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $trans->count()

            ];

       // return $dis;
            $pdf = PDF::loadView('admin.odreport', $dis);
           
                return $pdf->download('repo.pdf');
                   
            // return view('admin.transactionreport')->with('order', $dis);
           
            
        }elseif ($reporttype == 'Disapproved'){
        $ordezy =  $orders->where('approved','=','0');
       // $orders = Order::all();
            $dis = [
                'disy' => $orders->where('approved','=','0'),
                'datefrom' => $request->input('date'),
                'cat' => $reporttype,
                'dateto' => $request->input('date'),
                'records' => $ordezy->count()

            ];

        
          
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->download('repo.pdf');
           
            
        
        }
        elseif ($reporttype == 'Partial'){

       
             
            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $orders->count(),

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->download('repo.pdf');
        }elseif ($reporttype == 'Full'){

            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'dateto' => date('d-m-y',$final),
                'cat' => $reporttype,
                'records' => $orders->count()

                
            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
          
                return $pdf->download('repo.pdf');
            
            return view('admin.report')->with('order', $dis); 
           }elseif ($reporttype == 'Expenses'){
         

            $dis = [
                'disy' => $expens,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $expens->count(),
             

            ];
           // return $expens;
            $pdf = PDF::loadView('admin.expencepdf', $dis);
          
                return $pdf->download('repo.pdf');
                
               return view('admin.expencereport')->with('order', $dis);
           
            
        }
    }elseif($request->input('download') == '1'){
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
                

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
        
               return $pdf->download('repo.pdf');
         
        }elseif ($reporttype == 'Transaction'){
         

            $dis = [
                'disy' => $trans,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $trans->count()

            ];

       // return $dis;
            $pdf = PDF::loadView('admin.odreport', $dis);
           
                return $pdf->download('repo.pdf');
                   
            // return view('admin.transactionreport')->with('order', $dis);
           
            
        }elseif ($reporttype == 'Disapproved'){
        $ordezy =  $orders->where('approved','=','0');
       // $orders = Order::all();
            $dis = [
                'disy' => $orders->where('approved','=','0'),
                'datefrom' => $request->input('date'),
                'cat' => $reporttype,
                'dateto' => $request->input('date'),
                'records' => $ordezy->count()

            ];

        
          
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->download('repo.pdf');
           
            
        
        }
        elseif ($reporttype == 'Partial'){

       
             
            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $orders->count(),

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->download('repo.pdf');
        }elseif ($reporttype == 'Full'){

            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'dateto' => date('d-m-y',$final),
                'cat' => $reporttype,
                'records' => $orders->count()

                
            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
          
                return $pdf->download('repo.pdf');
            
            return view('admin.report')->with('order', $dis); 
           }elseif ($reporttype == 'Expenses'){
         

            $dis = [
                'disy' => $expens,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $expens->count(),
             

            ];
           // return $expens;
            $pdf = PDF::loadView('admin.expencepdf', $dis);
          
                return $pdf->download('repo.pdf');
                
               return view('admin.expencereport')->with('order', $dis);
           
            
        }
    }elseif($request->input('download') == '1'){
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
                

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
        
               return $pdf->download('repo.pdf');
         
        }elseif ($reporttype == 'Transaction'){
         

            $dis = [
                'disy' => $trans,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $trans->count()

            ];

       // return $dis;
            $pdf = PDF::loadView('admin.odreport', $dis);
           
                return $pdf->download('repo.pdf');
                   
            // return view('admin.transactionreport')->with('order', $dis);
           
            
        }elseif ($reporttype == 'Disapproved'){
        $ordezy =  $orders->where('approved','=','0');
       // $orders = Order::all();
            $dis = [
                'disy' => $orders->where('approved','=','0'),
                'datefrom' => $request->input('date'),
                'cat' => $reporttype,
                'dateto' => $request->input('date'),
                'records' => $ordezy->count()

            ];

        
          
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->download('repo.pdf');
           
            
        
        }
        elseif ($reporttype == 'Partial'){

       
             
            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $orders->count(),

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->download('repo.pdf');
        }elseif ($reporttype == 'Full'){

            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'dateto' => date('d-m-y',$final),
                'cat' => $reporttype,
                'records' => $orders->count()

                
            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
          
                return $pdf->download('repo.pdf');
            
            return view('admin.report')->with('order', $dis); 
           }elseif ($reporttype == 'Expenses'){
         

            $dis = [
                'disy' => $expens,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $expens->count(),
             

            ];
           // return $expens;
            $pdf = PDF::loadView('admin.expencepdf', $dis);
          
                return $pdf->download('repo.pdf');
                
               return view('admin.expencereport')->with('order', $dis);
           
            
        }
    }elseif($request->input('download') == '2'){
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
                

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
         
               return $pdf->stream('repo.pdf');
         
        }elseif ($reporttype == 'Transaction'){
         

            $dis = [
                'disy' => $trans,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $trans->count()

            ];

       // return $dis;
            $pdf = PDF::loadView('admin.odreport', $dis);
           
                return $pdf->stream('repo.pdf');
                   
            // return view('admin.transactionreport')->with('order', $dis);
           
            
        }elseif ($reporttype == 'Disapproved'){
        $ordezy =  $orders->where('approved','=','0');
       // $orders = Order::all();
            $dis = [
                'disy' => $orders->where('approved','=','0'),
                'datefrom' => $request->input('date'),
                'cat' => $reporttype,
                'dateto' => $request->input('date'),
                'records' => $ordezy->count()

            ];

        
          
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->stream('repo.pdf');
           
            
        
        }
        elseif ($reporttype == 'Partial'){

       
             
            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $orders->count(),

            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
            return $pdf->stream('repo.pdf');
        }elseif ($reporttype == 'Full'){

            $dis = [
                'disy' => $orders->where('approved','!==','new'),
                'datefrom' => date('d-m-y',$initial),
                'dateto' => date('d-m-y',$final),
                'cat' => $reporttype,
                'records' => $orders->count()

                
            ];
            $pdf = PDF::loadView('admin.partialreport', $dis);
          
                return $pdf->stream('repo.pdf');
            
            return view('admin.report')->with('order', $dis); 
           }elseif ($reporttype == 'Expenses'){
         

            $dis = [
                'disy' => $expens,
                'datefrom' => date('d-m-y',$initial),
                'cat' => $reporttype,
                'dateto' => date('d-m-y',$final),
                'records' => $expens->count(),
             

            ];
           // return $expens;
            $pdf = PDF::loadView('admin.expencepdf', $dis);
          
                return $pdf->stream('repo.pdf');
                
               return view('admin.expencereport')->with('order', $dis);
           
            
        }
    }

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
