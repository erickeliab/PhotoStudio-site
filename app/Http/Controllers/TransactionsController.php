<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Order;

class TransactionsController extends Controller
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
        //
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
        $this->validate($request,[
            //rules
            'amount' => 'required'
        ]);
            //finding a order insance
            $order = Order::find($id);

            $channel = $request->input('paymethod');
        $array = ['C' => 'Cash','M' => 'mpesa', 'T' => 'tigo pesa', 'A' => 'Airtel Money','B'=>'Bank'];
        $methode = $array[$channel];

        $transa = new Transaction;
        $transa->channel = $methode;
        $transa->amount = $request->input('amount');
        $transa->order_id = $id;
        $transa->user_id = Auth()->User()->id;
        $transa->balance_before = $order->paid;
        $transa->balance_after = $request->input('amount') + $order->paid;
        
        $transa->save();

        $oder = Order::find($id);
        $oder->paid = $oder->paid + $request->input('amount');
        $oder->save();

        return redirect('/orders/'.$id)->with('success','You have successfully added a payment to this order');
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
